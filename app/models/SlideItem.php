<?php

class SlideItem extends BaseModel {
    
    use SoftDeletingTrait;
    
    public function scopeIndexSlide($query)
    {
        return $query->whereSlideCode('index');
    }
    public function slide()
    {
        return $this->belongsTo('Slide', 'slide_id', 'id');
    }

}