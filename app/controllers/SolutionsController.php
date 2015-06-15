<?php

class SolutionsController extends BaseController {

    function __construct()
    {
        parent::__construct();
    }

    public function getIndex()
    {

      $solutions = Article::categorys('fangan')->visible()->published()->paginate(4);




        //加载更多
        if (Request::wantsjson()) {
        	$result['data'] = View::make('public.partials.solution')->with('solutions', $solutions)->render();
        	return Response::json($result);
        }
        
       
        
        Breadcrumbs::addCrumb("<b>行业解决方案</b>");

        return View::make('solutions.index', compact(
            'active_menu', 'solutions'
        ));
    }
    
    public function getDetail($id){
        /*详情页*/
//    	$article = Article::with('statistic')->detailData('fangan', $id);
        $article = Article::where('category_code','=','fangan')->find($id);

    	$category = Category::code($article->category_code)->first();

        /*商城解决方案*/
       $solutions =  $solutions = Article::categorys('fangan')->visible()->published()->get();

    	//评论
    	$comments = Comment::where('resource_id','=',$id)->visible()->paginate(3);
    	$comment_count = Comment::where('resource_id','=',$id)->visible()->count();

        $tag = array();
        foreach($article->tags as $article_tag)
            $tag[] = $article_tag->id;
        // 相关阅读推荐
        $relates = Article::with('images')->relateList($tag, $id)->take(3)->get();

    	//加载更多评论
        //加载更多评论
        if (Request::wantsjson()) {
            $result['data'] = View::make('news.partials.comment')->with('items', $comments)->render();
            return Response::json($result);
        }
        //电商资讯推荐阅读
        $recommends = Article::with('images')->rand()->take(6)->get();
    	//总评论数
    	$article_num = Comment::where('resource_id','=',$id)->count();

    	
    	 //上一篇，下一篇
         $prev = Article::prev($id)->visible()->categorys('fangan')->first();
         $next = Article::next($id)->visible()->categorys('fangan')->first();
    	
    	if (!$article) {
    		App::abort(404);
    	}
    	
    	
    	//面包屑数据
    	Breadcrumbs::addCrumb($category->name, URL::route('news.list', array('code' => $article->category_code)));
    	Breadcrumbs::addCrumb("<b>{$article->name}</b>");

    	return View::make('solutions.detail', compact(
            'active_menu', 'article', 'prev', 'next', 'article_num', 'comments', 'comments_num','solutions','recommends','relates','comment_count'
        ))->with('breadcrumb', Breadcrumbs::render());
    }
    
public function getUpdateViewCount($id) 
    {
        DB::table('articles')->where('id', $id)->increment('view_count', 1);
        Statistic::updateOfArticle($id);
    }
}


















