<?php

class Statistic extends Eloquent {

    public function scopeArticleWeeklyList($query, $type = null)
    {
        if($type) $query = $query->whereCategoryCode($type);

        return $query->whereResourceType('article')
        ->select('articles.*')
        ->where('month', '=', date('m'))
        ->where('year', '=', date('Y'))
        ->join('articles', 'articles.id', '=', 'statistics.resource_id')
        ->GroupBy('resource_id')
        ->orderBy('statistic', 'desc');
    }

    public function scopeArticleMonthlyList($query, $type = null)
    {
        if($type) $query = $query->whereCategoryCode($type);

        return $query->select([DB::raw('sum(statistic) AS month_statistic'), 'articles.*'])
        ->whereResourceType('article')
        ->where('month', '=', date('m'))
        ->where('year', '=', date('Y'))
        ->join('articles', 'articles.id', '=', 'statistics.resource_id')
        ->GroupBy('resource_id')
        ->orderBy('month_statistic', 'desc');
    }

    public function scopeUpdateOfArticle($query, $id)
    {
        $resource = $query->whereWeek(date('W'))->whereResourceId($id)->first();

        if($resource->statistic) {
            $resource->increment('statistic');
        } else {
            $statistic = new Statistic;
            $statistic->statistic = 1;
            $statistic->week = date('W');
            $statistic->month = date('m');
            $statistic->year = date('Y');
            $statistic->resource_id = $id;
            $statistic->resource_type = 'article';
            $statistic->save();
        }
    }

    public function article()
    {
        return $this->belongsTo('Article', 'resource_id', 'id');
    }
}
