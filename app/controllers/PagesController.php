<?php

class PagesController extends BaseController {

    function __construct()
    {
        parent::__construct();
    }

   public function getPage($code) {

   		return View::make('pages.page', compact('code'));

    }

    public function getConsult()
    {



        return View::make('pages.consult',compact('active_menu'));
    }

/*登记——我要试用*/
    public function getDjIndex()
    {

        return View::make('pages.dj',compact('active_menu'));
    }

    public function postConsult()
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

            if(Input::has('type')){

                $booking->type = 'tryout';

            }else{

                $booking->type = 'inquiry';

            }

            $booking->fill(Input::all());

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

    public function getSitemap()
    {
        $solutions = Article::categorys('fangan')->visible()->published()->get();

        $categories = Category::whereIn('code', ['hynews', 'ydnews', 'yxnews', 'faq', 'ghnews'])->get();

        $hot_tags = Recommend::with('tag')->get();

        // print_r($hot_tags);exit;

        return View::make('pages.sitemap',compact(
            'solutions', 'categories', 'hot_tags'
        ));
    }
}
