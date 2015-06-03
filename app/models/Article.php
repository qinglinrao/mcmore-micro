<?php

class Article extends BaseModel {
    
    use SoftDeletingTrait;
    
    public $timestamps = false;


    public function scopeVisible($query) {
        return $query->where('visible', 1);
    }

    public function thumb() {
    	return $this->belongsTo('Image', 'image_id');
    }
    
 	public function comments()
    {
        return $this->hasMany('Comment', 'resource_id')->where('resource_type', 'articles')->latest();
   	 }
    
    
    public function scopeGetList($query, $type = null, $order_by = 'latest')
    {
        if(is_array($type))
            $query = $query->whereIn('category_code', $type);
        elseif(!empty($type))
            $query = $query->whereCategoryCode($type);

        if($order_by === 'hot')
            $query->hot();
        else if($order_by === 'priority')
            $query->latest(true);
        else
            $query->latest();

        return $query->visible()->published();
    }
    
    public function scopeLatest($query,$priority = false) {
        if($priority){
            $query = $query->priority();
        }
        return $query->orderBy('updated_at', 'desc')->orderBy('publish_at', 'desc')->orderBy('created_at', 'desc');
    }

    public function scopeRelateList($query, $tag_ids = [], $id)
    {
        if(!empty($tag_ids)) $query->whereIn('tag_items.tag_id', $tag_ids);

        return $query->join('tag_items', 'tag_items.item_id', '=', 'articles.id')
            ->select('articles.*')
            ->visible()->published()->where('articles.id', '!=', $id)->rand();
    }

    public function scopeRecommendList($query, $type, $id = 0)
    {
        if(is_array($type)){
            $query = $query->whereIn('category_code',$type);
        }else{
            $query = $query->whereCategoryCode($type);
        }
        return $query->visible()->published()->where('id', '!=', $id)->rand();
    }

    public function scopeDetailData($query, $id)
    {
        return $query->visible()->published()->find($id);
    }

    public function scopePreviousData($query, $type, $id)
    {
        return $query->prev($id)->whereCategoryCode($type)->visible()->published()->first();
    }

    public function scopeNextData($query, $type, $id)
    {
        return $query->next($id)->whereCategoryCode($type)->visible()->published()->first();
    }

    public function scopeWeekly($query,$type = false)
    {
        $year = date('Y');
        $month = date('m');

        $between_month = $month + 1;
        if($between_month > 12)
        {
            $between_year = $between_month > 12 ? $year + 1 : $year;
            $between_month = 1;
        }
        if($type){
            $query = $query->whereCategoryCode($type);
        }
        return $query->whereBetween('created_at', [
            "{$year}-{$month}-1 0:0:0",
            "{$between_year}-{$between_month}-1 0:0:0"
        ]);
    }

    public function statistic()
    {
        return $this->hasMany('Statistic', 'resource_id', 'id')->whereResourceType('article');
    }

    public function statis()
    {
        return $this->hasMany('Statistic', 'resource_id', 'id')->orderBy('statistic','DESC');
    }

    public function scopeCategorys($query, $code) {

    	return $query->where('category_code', $code);
    }

    public function category()
    {
        return $this->belongsTo('Category', 'category_id', 'id');
    }
	
	public function images()
	{
        return $this->belongsToMany('Image', 'article_assigned_images')->orderBy('priority');
	}

    public function img()
    {
        return $this->belongsTo('Image','image_id','id');

    }
    public function tags()
    {
        return $this->belongsToMany('Tag', 'tag_items', 'item_id', 'tag_id');
    }
    
    public function scopeNews($query) {
    	return $query->whereIn('category_code' ,['rmnews','hynews','yxnews']);
    }

   
}
