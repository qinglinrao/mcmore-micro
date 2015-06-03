<?php

class Appissue extends BaseModel {

    public function scopeOrderByLatest($query) {
        return $query->orderBy('updated_at', 'desc')->orderBy('created_at', 'desc');
    }
}