<?php

class Slide extends BaseModel {
    
    use SoftDeletingTrait;
    
    public function items() {
        return $this->hasMany('SlideItem', 'slide_id');
    }
    
}
