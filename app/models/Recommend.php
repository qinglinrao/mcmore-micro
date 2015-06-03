<?php

class Recommend extends Eloquent {

    public function article()
    {
        return $this->belongsTo('Article', 'item_id', 'id');
    }

    public function work()
    {
        return $this->belongsTo('Work', 'item_id', 'id');
    }

    public function tag()
    {
        return $this->belongsTo('Tag', 'item_id', 'id');
    }
}