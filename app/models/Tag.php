<?php

class Tag extends Eloquent {

    public function articles()
    {
        return $this->belongsToMany('Article', 'tag_items', 'tag_id', 'item_id');
    }
}	