<?php

class Work extends BaseModel {

    public function scopeRandCase($query)
    {
        return $query->whereType('work')->visible()->rand();
    }

    public function latestcomment()
    {
    	return $this->hasMany('Comment','resource_id')->where('resource_type','works')->orderBy('updated_at','DESC')->orderBy('created_at','DESC');
    }
    
    
    public function scopeLatest($query) {
    	return $query->orderBy('updated_at', 'desc')->orderBy('created_at', 'desc');
    }
    
    
    public function scopeType($query, $type) {
    	return $query->where('type', $type);
    }
    
    
    public function attrs() {
    	return $this->belongsToMany('Attribute', 'work_assigned_attributes', 'work_id', 'attribute_id')->withPivot('attribute_id');
    }
    
    public function thumb()
    {
        return $this->belongsToMany('Image', 'work_assigned_images')->orderBy('priority')->take(1);
    }

    public function images()
    {
        return $this->belongsToMany('Image', 'work_assigned_images')->orderBy('priority');
    }

    public function attributes()
    {
        return $this->belongsToMany('Attribute', 'work_assigned_attributes');
    }

    public function comments()
    {
        return $this->hasMany('Comment', 'resource_id')->where('resource_type', 'works')->latest();
    }


    
}