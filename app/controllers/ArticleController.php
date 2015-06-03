<?php

class ArticleController extends BaseController {

    function __construct() {
        parent::__construct();
    }

    public function getNewsIndex() {

        Breadcrumbs::addCrumb(Config::get('app.sitename'), URL::to('/'));
        Breadcrumbs::addCrumb('<b>电商资讯</b>');

        //$stick_recommend = RecommendType::with('articles')->code('stick_recommend')->first();
        $hot_articles = Article::news()->visible()->published()->hotest()->take(5)->get(); //热点推荐
        $rand_articles = Article::news()->visible()->published()->rand()->take(5)->get(); //推荐阅读
        $categories = Category::with('articles.thumb', 'articles.comments')->visible()->whereNotIn('code', array('fangan'))->priority('DESC')->get();


        return View::make('news.index')
                        ->with('hot_articles', $hot_articles)
                        ->with('rand_articles', $rand_articles)
                        ->with('categories', $categories)
                        ->with('active_menu', Request::is('fangan') ? 'fangan' : 'news')
                        ->with('breadcrumb', Breadcrumbs::render());
    }

    public function getNewsList($code) {

        $category = Category::code($code)->first();
        $articles = Article::with('thumb', 'comments')->category($code)->visible()->published()->latest()->paginate(10);

        //Loadmore 
        if (Request::wantsjson()) {
            $result['data'] = View::make('news.blocks.news_list')->with('articles', $articles)->render();
            return Response::json($result);
        }

        if ($code != 'mdnews') {
            $hot_articles = Article::category($code)->visible()->published()->hotest()->take(5)->get();
        } else {
            $hot_articles = Article::news()->visible()->published()->hotest()->take(5)->get();
        }


        $latest_news = Article::category($code)->visible()->published()->latest()->take(5)->get();

        $rand_articles = Article::news()->visible()->published()->rand()->take(5)->get(); //推荐阅读
        $latest_notice = Article::category('mdnews')->visible()->published()->latest()->first();

        Breadcrumbs::addCrumb(Config::get('app.sitename'), URL::to('/'));
        Breadcrumbs::addCrumb('电商资讯', URL::route('news.index'));
        Breadcrumbs::addCrumb("<b>{$category->name}</b>");

        return View::make('news.list')
                        ->with('category', $category)
                        ->with('code', $code)
                        ->with('articles', $articles)
                        ->with('latest_news', $latest_news)
                        ->with('hot_articles', $hot_articles)
                        ->with('rand_articles', $rand_articles)
                        ->with('latest_notice', $latest_notice)
                        ->with('active_menu', 'news')
                        ->with('breadcrumb', Breadcrumbs::render());
    }

    public function getNewsDedail($id,$news = ['hynews','rmnews','yxnews']) {
        $article = Article::visible()->published()->whereIn('category_code',$news)->find($id);

        if (!$article) {
            App::abort(404);
        }

        $comments = $article->comments()->visible()->paginate(5);
        //Loadmore 
        if (Request::wantsjson()) {
            $result['data'] = View::make('news.blocks.news_comments')->with('comments', $comments)->render();
            return Response::json($result);
        }

        $category = Category::code($article->category_code)->first();

        $prev = Article::prev($id)->category($article->category_code)->visible()->published()->first();
        $next = Article::next($id)->category($article->category_code)->visible()->published()->first();

        $relate_articles = Article::with('thumb')->category($article->category_code)->where('id', '!=', $id)->visible()->published()->rand()->take(5)->get();

        $latest_notice = Article::category('mdnews')->visible()->published()->latest()->first();

        $hot_articles = Article::news()->visible()->published()->hotest()->take(5)->get();

        $latest_news = Article::category($article->category_code)->visible()->published()->latest()->take(5)->get();

        $rand_articles = Article::news()->visible()->published()->rand()->take(5)->get(); //推荐阅读

        Breadcrumbs::addCrumb(Config::get('app.sitename'), URL::to('/'));
        Breadcrumbs::addCrumb('电商资讯', URL::route('news.index'));
        Breadcrumbs::addCrumb($category->name, URL::route('news.list', array('code' => $article->category_code)));
        Breadcrumbs::addCrumb("<b>{$article->name}</b>");

        return View::make('news.detail')
                        ->with('article', $article)
                        ->with('prev', $prev)
                        ->with('next', $next)
                        ->with('relate_articles', $relate_articles)
                        ->with('hot_articles', $hot_articles)
                        ->with('latest_notice', $latest_notice)
                        ->with('latest_news', $latest_news)
                        ->with('rand_articles', $rand_articles)
                        ->with('comments', $comments)
                        ->with('active_menu', 'news')
                        ->with('breadcrumb', Breadcrumbs::render());
    }
    
    public function getMdNewsDedail($id) {
        return $this->getNewsDedail($id, ['mdnews']);
    }

    public function getUpdateNewsViewCount($id) {
        DB::table('articles')->where('id', $id)->increment('view_count', 1);
    }

    public function getNewsComment($id) {

        return View::make('news.comment')
                        ->with('id', $id);
    }

    public function postNewsComment($id) {

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

        return View::make('news.comment');
    }

    public function getFanganIndex() {

        $fangans = Article::category('fangan')->visible()->published()->take(15)->get();
		
        Breadcrumbs::addCrumb(Config::get('app.sitename'), URL::to('/'));
        Breadcrumbs::addCrumb("<b>行业解决方案</b>");

        return View::make('fangan.index')
                        ->with('fangans', $fangans)
                        ->with('active_menu', 'fangan')
                        ->with('breadcrumb', Breadcrumbs::render());
        ;
    }

    public function getFanganDedail($id) {
        $article = Article::category('fangan')->published()->visible()->find($id);
        if (!$article) {
            App::abort(404);
        }
        
        $category = Category::code($article->category_code)->first();
        $articles = Article::category('fangan')->published()->visible()->get();

        $recommend_articles = RecommendType::with('articles.thumb')->code('fangan')->first();
        $rand_news = Article::published()->rand()->news()->take(6)->get();
        $latest_news = Article::published()->latest()->news()->take(6)->get();

        Breadcrumbs::addCrumb(Config::get('app.sitename'), URL::to('/'));
        Breadcrumbs::addCrumb($category->name, URL::route('news.list', array('code' => $article->category_code)));
        Breadcrumbs::addCrumb("<b>{$article->name}</b>");

        return View::make('fangan.detail')
                        ->with('article', $article)
                        ->with('articles', $articles)
                        ->with('latest_news', $latest_news)
                        ->with('rand_news', $rand_news)
                        ->with('active_menu', 'fangan')
                        ->with('breadcrumb', Breadcrumbs::render());
    }

}
