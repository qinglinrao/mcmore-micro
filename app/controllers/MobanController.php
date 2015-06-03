<?php

class MobanController extends BaseController
{

    function __construct() {
        parent::__construct();
    }

    public function getMobanIndex(){

        $active_menu = 'moban';

        $cases = Work::with('attrs', 'images')->type('template')->visible()->get();

        return View::make('moban.index', compact(
            'active_menu', 'cases'
        ));
    }
}