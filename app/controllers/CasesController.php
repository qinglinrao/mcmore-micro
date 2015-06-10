<?php

class CasesController extends BaseController {

    function __construct()
    {
        parent::__construct();
//        Breadcrumbs::addCrumb('App开发案例', URL::route('cases'));
    }

    public function getIndex($ids_str = '')
    {
        $active_menu = 'case';
        
        $banners = SlideItem::with('image')->whereSlideCode('appcase')->get(); 
        
        $attrGroups = AttributeGroup::with('attributes')->whereIn('code',['platform','industry','type'])->get();
        
        $cases = Work::with('images', 'latestcomment')->type('work')->visible()->paginate(4);

        //加载更多
        if (Request::wantsjson()) {
            $result['data'] = View::make('public.partials.case')->with('cases', $cases)->render();
            return Response::json($result);
        }

        return View::make('cases.index', compact(
            'active_menu', 'banners','attrGroups', 'filter_ids','code', 'banners', 'cases', 'recommend_cases','filter_word'
        ));
    }
    
    public function getDetail($id)
    {
        /*案例最新点评  评论优先级*/
        $comments_latest = Comment::with('work')->where('resource_type','=', 'works')->latest()->visible()->take(4)->get();

        $hot_faqs = Article::where('category_code','faq')->orderBy('view_count','desc')->visible()->take(6)->get();

        $banners = SlideItem::with('image')->whereSlideCode('appcase')->get();
        
       $case = Work::with('comments')->type('work')->find($id);

        if (!$case) {
            App::abort(404);
        }
        
       
        $comments = $case->comments()->visible()->paginate(1);

        //加载更多评论 
        if (Request::wantsjson()) {
            $result['data'] = View::make('news.partials.comment')->with('items', $comments)->render();
            return Response::json($result);
        }

		
        //总评论数
        $comments_num = $case->comments()->visible()->get()->count();
        /*
        Breadcrumbs::addCrumb("<b>{$case->name}</b>");
		*/

        $prev = Work::prev($id)->visible()->whereType('work')->first();
        $next = Work::next($id)->visible()->whereType('work')->first();
        


        //最新资讯
        $articles = Article::where('category_code','=','fangan')->published()->visible()->get();
        
        /*
        $platform_ids = DB::table('work_assigned_attributes')
            ->join('attributes','attributes.id', '=', 'work_assigned_attributes.attribute_id')
            ->where('work_id',$id)
            ->where('attributes.attribute_group_code','platform')
            ->select('attributes.id')
            ->lists('id'); 
      
        $recommend_cases = Work::whereType('work')->visible()->with('attributes.group')
                ->whereHas('attributes',function($query) use ($platform_ids){
                    $query->whereIn('attributes.id',$platform_ids);
                })->rand()->take(4)->get();
         
      */

       
        Breadcrumbs::addCrumb('商城案例', URL::route('case'));
        Breadcrumbs::addCrumb("<b>{$case->name}</b>");
        
        return View::make('cases.detail', compact(

            'active_menu', 'banners', 'case', 'comments', 'comments_num', 'prev','next','recommend_cases','hot_faqs','comments_latest','articles'



        ))->with('breadcrumb', Breadcrumbs::render());
        
    }
    
    public function getComment($id) 
    {
        return View::make('cases.comment_form')
                        ->with('id', $id);
    }

    public function postComment($id) 
    {

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
        $comment->created_by = 0;
        $comment->updated_by = 0;
        if ($comment->save()) {
            return Redirect::route('case.comment', array('id' => $id))->withErrors(array('info' => '评论成功，需要后台审核。'));
        } else {
            return Redirect::route('case.comment', array('id' => $id))->withErrors(array('error' => '系统错误，评论失败'))->withInput();
        }

        return View::make('case.comment');
    }
    
    public function getUpdateViewCount($id) 
    {
        DB::table('works')->where('id', $id)->increment('view_count', 1);
    }
}