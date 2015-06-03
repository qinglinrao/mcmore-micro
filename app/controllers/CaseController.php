<?php

class CaseController extends BaseController {

    function __construct() {
        parent::__construct();
    }

    public function getCaseIndex($id = '') {

        $cases = Work::with('attrs', 'images')->type('work')->take(12)->visible();
       
        Breadcrumbs::addCrumb(Config::get('app.sitename'), URL::to('/'));

        $attr_name = '';

        if ($id) {
            $attr = Attr::find($id);
       
            $attr_name = $attr->name;
            Breadcrumbs::addCrumb('商城案例', URL::route('case.index'));
            Breadcrumbs::addCrumb("<b>{$attr->name}</b>", URL::route('case.index', [$attr->id]));

            $block_title = $attr->name;
           
                 $cases = $cases->join('work_assigned_attributes', 'work_assigned_attributes.work_id', '=', 'works.id')->where('work_assigned_attributes.attribute_id',$id)->select('works.*');
            
           
        } else {
            $block_title = '全部';
            Breadcrumbs::addCrumb('<b>商城案例</b>', URL::route('case.index'));
        }
        //分页
        $cases = $cases->paginate(4);

        //Loadmore 
        if (Request::wantsjson()) {
            $result['data'] = View::make('cases.blocks.case_show')->with('cases', $cases)->render();
            return Response::json($result);
        }

        $attrGgroup = AttrGroup::with('attrs')->type('work')->priority('desc')->get();


        return View::make('cases.index')
                        ->with('id', $id)
                        ->with('attr_name', $attr_name)
                        ->with('block_title', $block_title)
                        ->with('attrGgroup', $attrGgroup)
                        ->with('cases', $cases)
                        ->with('active_menu', 'case')
                        ->with('breadcrumb', Breadcrumbs::render());
    }

    public function getCaseDetail($id) {

        $case = Work::with('attrs', 'images')->type('work')->find($id);
        if (!$case) {
            App::abort(404);
        }
        $comments = $case->comments()->visible()->paginate(5);
        //Loadmore 
        if (Request::wantsjson()) {
            $result['data'] = View::make('news.blocks.news_comments')->with('comments', $comments)->render();
            return Response::json($result);
        }

        Breadcrumbs::addCrumb(Config::get('app.sitename'), URL::to('/'));
        Breadcrumbs::addCrumb('商城案例', URL::route('case.index'));
        Breadcrumbs::addCrumb("<b>{$case->name}</b>");


        $prev = Work::prev($id)->visible()->type('work')->first();
        $next = Work::next($id)->visible()->type('work')->first();

        $rand_cases = Work::visible()->type('work')->rand()->take(5)->get();

        return View::make('cases.detail')
                        ->with('case', $case)
                        ->with('prev', $prev)
                        ->with('next', $next)
                        ->with('rand_cases', $rand_cases)
                        ->with('comments', $comments)
                        ->with('active_menu', 'case')
                        ->with('breadcrumb', Breadcrumbs::render());
    }

    public function getCaseComment($id) {
        return View::make('cases.comment')
                        ->with('id', $id);
    }

    public function postCaseComment($id) {
        $rules = array(
            'detail' => 'required|max:200',
            'captcha' => 'required|captcha'
        );

        $message = array(
            'detail.required' => '请填写评论内容',
            'detail.max' => '评论内容必须少于200个字符',
            'captcha.required' => '请填写验证码',
            'captcha.captcha' => '验证码不正确',
        );

        $v = Validator::make(Input::all(), $rules, $message);

        if ($v->fails()) {

            return Redirect::route('case.comment', array('id' => $id))->withErrors($v)->withInput();
        }

        $comment = new Comment();
        $comment->resource_id = $id;
        $comment->resource_type = 'works';
        $comment->visible = 0;
        $comment->name = Input::get('name');
        $comment->detail = Input::get('detail');

        if ($comment->save()) {
            return Redirect::route('case.comment', array('id' => $id))->withErrors(array('info' => '评论成功，需要后台审核。'));
        } else {
            return Redirect::route('case.comment', array('id' => $id))->withErrors(array('error' => '系统错误，评论失败'))->withInput();
        }

        return View::make('case.comment');
    }

    public function getUpdateNewsViewCount($id) {
        DB::table('works')->where('id', $id)->increment('view_count', 1);
    }

}
