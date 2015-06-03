<?php

// Custom Validator
Validator::extend('phoneoremail', function($attribute, $value, $parameters) {
    return (preg_match('/^(((1(3|4|5|7|8)[0-9]{1}))+\d{8})$/', $value) || preg_match("/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/", $value));
});

Validator::extend('cnphone', function($attribute, $value, $parameters) {
    return (preg_match('/^(((1(3|4|5|7|8)[0-9]{1}))+\d{8})$/', $value));
});

Validator::extend('checkpsw', function($attribute, $value, $parameters) {
    return Hash::check($value, $parameters[0]);
});

Validator::extend('phone_verify_code', function($attribute, $value, $parameters) {

    $verify_code = Session::get('phone_verify_code', false);

    if (!$verify_code || $verify_code['expired'] < Carbon::now()) {
        return false;
    }


    return ($value != '' && $value == $verify_code['code']);
});

Validator::extend('password', function($attribute, $value, $parameters) {

    return preg_match("/^[a-zA-Z0-9!#$@_\-=+]{" . $parameters[0] . "," . $parameters[1] . "}$/", $value);
});

Validator::extend('zip',function($attribute, $value, $parameters){
     return preg_match("/^[1-9]\d{5}$/", $value);
});
