<?php

class AboutController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getAboutIndex($about)
	{
        return	View::make('about.index', compact('about'));

	}


    public function getEventIndex()
    {
        return View::make('about.event');
    }



    public function getYxgjIndex()
    {
        return View::make('ydds.yxgj');
    }



}
