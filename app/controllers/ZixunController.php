<?php

class ZixunController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getZixunIndex()
	{
        return View::make('pages.consult');

	}


	public function postZixun()
	{
        $rules = array(
            'detail' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|cnphone|unique:bookings,mobile'
        );

        $message = array(
            'detail.required' => '请填写咨询内容',
            'name.required' => '请填写姓名',
            'email.required' => '请填写邮箱',
            'mobile.required' => '请填写手机号码',
            'email.email' => '邮箱格式不正确',
            'mobile.cnphone' => '手机号码格式不正确',
            'mobile.unique' => '手机号码已存在'
        );

        $v = Validator::make(Input::all(), $rules, $message);


        if ($v->fails()) {
            $result['state'] = 0;
            $errors = '<ul>';
            foreach ($v->errors()->all() as $error) {
                $errors .= "<li><i>{$error}</i></li>";
            }
            $errors .= '</ul>';
            $result['msg'] = $errors;
        } else {
            $booking = new Booking();
            $booking->fill(Input::all());
            if(Input::has('type')){

                $booking->type = 'tryout';

            }else{

                $booking->type = 'inquiry';

            }
            $booking->user_id = 0;
            $booking->created_by = 0;
            $booking->updated_by = 0;

            if ($booking->save()) {
                $result['state'] = 1;
            } else {
                $result['state'] = 0;
                $result['msg'] = '系统出错，保存失败';
            };
        }

        return Response::json($result);
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
