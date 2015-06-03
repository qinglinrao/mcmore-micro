<?php

class Comment extends BaseModel {

    public function scopeGetList($query, $resource_id, $type='articles')
    {
        return $query->whereResourceId($resource_id)->whereResourceType($type)->visible();
    }
    
    public function article()
    {
        return $this->belongsTo('Article','resource_id');      
    }
    
    public function work()
    {
        return $this->belongsTo('Work','resource_id');      
    }

    public function scopeComment($query)
    {
        return $query->orderBy('updated_at', 'desc')->orderBy('created_at', 'desc');
    }
}
