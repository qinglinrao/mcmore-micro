<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Base extends Eloquent {

    use SoftDeletingTrait;

    public function scopePublished($query) {
        return $query->where('publish_at', '<=', Carbon::now());
    }

    public function scopeVisible($query) {
        return $query->where('visible', 1);
    }

    public function scopeLatest($query) {
        return $query->orderBy('updated_at', 'desc')->orderBy('publish_at', 'desc')->orderBy('created_at', 'desc');
    }

    public function image() {
        return $this->belongsTo('Image', 'image_id');
    }

    public function scopePrev($query, $id) {
        return $this->where('id', '<', $id)->orderBy('id', 'desc');
    }

    public function scopeNext($query, $id) {
        return $this->where('id', '>', $id)->orderBy('id', 'asc');
    }

    public function scopeCode($query, $code) {
        return $query->where('code', $code);
    }

    public function scopeRand($query) {
        return $query->orderBy(DB::raw('RAND()'));
    }

    public function scopePriority($query, $sort = 'DESC') {
        return $query->orderBy('priority', $sort);
    }



}
