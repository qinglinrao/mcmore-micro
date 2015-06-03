<?php

class Category extends BaseModel {
    
    use SoftDeletingTrait;
    
    public function articles()
    {
        return $this->hasMany('Article', 'category_id', 'id');
    }
}