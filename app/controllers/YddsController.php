<?php

class YddsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getYdds($id=1)
	{


        $cases = Work::with('images', 'latestcomment', 'attributes.group')->type('work')->rand()->take(4)->get();

        switch ($id) {
            case  1 :
                return View::make('ydds.index')->with('cases',$cases);
                break;
            case  2 :
                return View::make('ydds.index2')->with('cases',$cases);
                break;
            case  3 :
                return View::make('ydds.index3')->with('cases',$cases);
                break;
            case  4 :
                return View::make('ydds.index4')->with('cases',$cases);
                break;
            case  5 :
                return View::make('ydds.index5')->with('cases',$cases);
                break;
        }


	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
