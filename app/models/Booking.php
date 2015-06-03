<?php

class Booking extends BaseModel {

    protected $table = 'bookings';
    protected $fillable = array('name', 'mobile', 'detail', 'email');

    public function trial()
    {
        return $this->hasOne('Trial', 'booking_id', 'id');
    }
}
