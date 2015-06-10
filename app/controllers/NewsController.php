<?php

class NewsController extends BaseController {

    function __construct()
    {
        parent::__construct();

        Breadcrumbs::addCrumb('APP开发资讯', URL::route('news'));

        View::share('active_menu', 'news');
    }

    public function getIndex()
    {
        $categories = Category::whereIn('code', ['hynews', 'ydnews', 'yxnews', 'faq', 'ghnews'])->get();
        foreach($categories as $key => $category)
        {
            $categories[$key]->articles = Article::with('category', 'img', 'comments', 'tags')
                ->getList($category->code)
                ->take(10)
                ->get();
        }

        $code = $category->code;
        $recommends     = Article::with('img')->rand()->recommendList(['hynews', 'ydnews', 'yxnews', 'faq', 'ghnews'])->rand()->take(6)->get();
        $hot_tags       = Recommend::with('tag')->whereRecommendTypeCode('hot_tag')->get();

        $weekly_list    = Article::where('category_code','!=','faq')->where('category_code','!=','fangan')->orderBy('view_count','desc')->visible()->take(6)->get();

        $monthly_list   = Statistic::articleMonthlyList()->take(6)->get();

        $type = 'news';
        return View::make('news.index', compact(
            'active_menu', 'categories', 'recommends', 'hot_tags', 'weekly_list', 'monthly_list','code','type'
        ));
    }

    public  function getTag($id)
    {
        $tag = Tag::find($id);

        $articles = Article::with('category', 'images', 'comments', 'tags')
            ->select('articles.*')
            ->join('tag_items', 'articles.id', '=', 'tag_items.item_id')
            ->whereTagId($id)
            ->where('articles.publish_at', '<=', Carbon::now())
            ->latest()
            ->where('articles.visible', 1)
            ->paginate(15);

        if(!$articles[0]->id) {
            App::abort(404);
        }


        // 加载更多
        if(Request::ajax()) {
            $result['data'] = View::make('news.partials.news')->with(['type' => $tag->code, 'items' => $articles])->render();
            return Response::json($result);
        }

        $categories = Category::whereIn('code', ['ios', 'android', 'html5', 'weixin', 'web', 'faq'])->get();

        $latests = Article::getList()->take(6)->get();

        $weekly = Article::weekly()
            ->select('articles.*')
            ->join('tag_items', 'articles.id', '=', 'tag_items.item_id')
            ->whereTagId($id)
            ->count();


        /*TAG电商资讯推荐阅读*/
        $recommends = Article::with('img')->rand()->take(6)->get();

        /*TAG*/
       $list_tags = Recommend::with('tag')->whereRecommendTypeCode('list_tag')->get();



        return View::make('news.tag', compact(
            'tag', 'articles', 'latests', 'weekly','categories','recommends','list_tags'
        ));
    }

    public function getList($type='hynews')
    {

        $categories = Category::whereIn('code', ['hynews', 'ydnews', 'yxnews', 'faq', 'ghnews'])->get();
        foreach($categories as $key => $category)
        {
            $categories[$key]->articles = Article::with('category', 'img', 'comments', 'tags')
                ->getList($category->code)
                ->take(10)
                ->get();
        }

        $articles = Article::with('category', 'images', 'comments', 'tags')
            ->getList($type)
            ->paginate(15);


        // 加载更多
        if(Request::ajax()) {
            $result['data'] = View::make('news.partials.news')->with(['items' => $articles])->render();
            return Response::json($result);
        }

        $category = Category::whereCode($type)->first();

        $recommends = Article::with('images')->recommendList($type)->take(6)->get();

        /*$weekly = Article::weekly($type)->count();

        $weekly_list = Statistic::articleWeeklyList($type)->take(6)->get();
        $monthly_list = Statistic::articleMonthlyList($type)->take(6)->get();*/


        $latest_news =Article::with('images')->recommendList($type)->take(6)->get();


        $hot_tags = Recommend::with('tag')->whereRecommendTypeCode('hot_tag')->get();
        return View::make('news.list', compact(
            'category', 'articles', 'recommends', 'weekly', 'weekly_list', 'monthly_list','type','latest_news','hot_tags','type','categories'
        ));
    }

    public function getDetail($id)
    {
        $comments = Comment::getList($id)->paginate(3);


        // 加载更多
        if(Request::ajax()) {
            $result['data'] = View::make('news.partials.comment')->with(['items' => $comments])->render();
            return Response::json($result);
        }

        $article = Article::with('category', 'comments', 'tags')->where('category_code','!=','faq')->where('category_code','!=','mdnews')->detailData($id);
        $type = $article->category_code;

        if(!$article->id) {
            App::abort(404);
        }

        // 上一篇、下一篇
        $previous = Article::previousData($type, $id);
        $next = Article::nextData($type, $id);


        $tag = array();
        foreach($article->tags as $article_tag)
            $tag[] = $article_tag->id;

        // 相关阅读推荐
        $relates = Article::with('images')->relateList($tag, $id)->take(3)->get();
        $solutions = $relate_cases = array();


        /*电商最新资讯*/


        if($type !== 'faq')
        {
            $latests    = Article::getList($type)->take(5)->get();
            $recommends = Article::with('images')->recommendList($type, $id)->rand()->take(6)->get();


            /*$weekly_list    = Article::where('category_code',$type)->orderBy('view_count',desc)->visible()->take(6)->get();

            $monthly_list = Statistic::articleMonthlyList($type)->take(6)->get();*/
        } else {
            $latest_faqs = Article::getList($type)->take(5)->get();
            $hot_faqs = Article::getList($type, 'hot')->take(5)->get();
            $rand_faqs = Article::RecommendList($type)->take(6)->get();
        }

        /*faq 最新热点问题*/
        $faq_articles =  Article::with('statis')->where('category_code','=','faq')->take(4)->get();

        /* faq最新的资讯*/
        $latest_news =Statistic::with('article')->orderBy('statistic','DESC')->take(4)->get();

        $recommends = Article::with('images')->recommendList($type)->rand()->take(6)->get();

        /*tag */

        return View::make('news.detail', compact(
            'type', 'comments', 'article', 'previous', 'next', 'relates',
            'latests','recommends', 'weekly_list', 'monthly_list',
            'latest_faqs', 'hot_faqs','solutions','rand_faqs','faq_articles','latest_news'
        ));
    }

    public function getFaqDetail($id)
    {
        $article = Article::with('category', 'comments', 'tags')->where('category_code','=','faq')->detailData($id);
        $type = $article->category_code;
        if(!$article->id) {
            App::abort(404);
        }

        $comments = Comment::getList($id)->paginate(2);


        // 加载更多
        if(Request::ajax()) {
            $result['data'] = View::make('news.partials.comment')->with(['items' => $comments])->render();
            return Response::json($result);
        }

        // 上一篇、下一篇
        $previous = Article::previousData($type, $id);
        $next = Article::nextData($type, $id);

        $tag = array();
        foreach($article->tags as $article_tag)
            $tag[] = $article_tag->id;

        // 相关阅读推荐
        $relates = Article::with('images')->relateList($tag, $id)->take(3)->get();
        $solutions = $relate_cases = array();


        /*电商最新资讯*/


        if($type !== 'faq')
        {
            $latests    = Article::getList($type)->take(5)->get();
            $recommends = Article::with('images')->recommendList($type, $id)->rand()->take(6)->get();

            $weekly_list = Statistic::articleWeeklyList($type)->take(6)->get();
            $monthly_list = Statistic::articleMonthlyList($type)->take(6)->get();
        } else {
            $latest_faqs = Article::getList($type)->take(5)->get();
            $hot_faqs = Article::getList($type, 'hot')->take(5)->get();
            $rand_faqs = Article::RecommendList($type)->take(6)->get();
        }

        /*faq 最新热点问题*/
        $faq_articles =  Article::where('category_code','=','faq')->orderBy('view_count','desc')->visible()->take(4)->get();

        /* faq最新的资讯*/
        $latest_news =Statistic::with('article')->orderBy('statistic','DESC')->take(4)->get();

        $recommends = Article::with('images')->recommendList($type)->rand()->take(6)->get();

        /*tag */

        return View::make('news.detail', compact(
            'type', 'comments', 'article', 'previous', 'next', 'relates',
            'latests','recommends', 'weekly_list', 'monthly_list',
            'latest_faqs', 'hot_faqs','solutions','rand_faqs','faq_articles','latest_news'
        ));
    }

    public function getCompanyDetail($code)
    {
        $article = Article::whereCode($code)->visible()->published()->first();

        if(!$article->id) {
            App::abort(404);
        }

        $comments = Comment::getList($article->id)->get();

        // 加载更多
        if(Request::ajax()) {
            $result['data'] = View::make('news.partials.comment')->with(['items' => $comments])->render();
            return Response::json($result);
        }

        $tag = array();
        foreach($article->tags as $article_tag)
            $tag[] = $article_tag->id;

        $relates = Article::with('images')->relateList($tag, $article->id)->take(3)->get();

        $companies = Category::with('articles')->find($article->category_id);

        $right_relates = Article::with('img')->rand()->getList(['ios','android'], $article->id)->take(5)->get();

        return View::make('news.company', compact(
            'article', 'comments', 'relates', 'companies', 'right_relates'
        ));
    }


    public function getUpdateViewCount($id)
    {
        DB::table('articles')->where('id', $id)->increment('view_count', 1);
        Statistic::updateOfArticle($id);
    }

    public function getComment($id)
    {
        return View::make('news.comment_form')
            ->with('id', $id);
    }

    public function postComment($id) {

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
            return Redirect::route('news.comment', array('id' => $id))->withErrors($v)->withInput();
        }

        $comment = new Comment();
        $comment->resource_id = $id;
        $comment->resource_type = 'articles';
        $comment->visible = 0;
        $comment->name = Input::get('name');
        $comment->detail = Input::get('detail');

        if ($comment->save()) {
            return Redirect::route('news.comment', array('id' => $id))->withErrors(array('info' => '评论成功，需要后台审核。'));
        } else {
            return Redirect::route('news.comment', array('id' => $id))->withErrors(array('error' => '系统错误，评论失败'))->withInput();
        }

        return View::make('news.comment_form');
    }
}
