<?php
class IndexController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getShow()
    {
        // Banner
//        $banners = SlideItem::indexSlide()->with('image')->get();
        $banners= SlideItem::where('slide_code','=','\/')->with('image')->get();

         // APP经典案例
        $this->caseAttributes();
        $groups             = Attribute::whereAttributeGroupId(2)->get();
        $cases['groups']    = $groups;
        foreach($groups as $key => $group) {
            $cases['items'][] = $group->works()->with('attributes.group','latestcomment','images')->priority('desc')->where('type','=','work')->latest()->take(4)->get();
        }
        Debugbar::info($cases);

        /*麦多经典案例*/
     $works = Work::with('images')->latest()->where('type','=','work')->take(4)->get();

        // APP开发常见问题
         $appissues      = Article::getList('faq','priority')->take(3)->get();

        // APP最新评论
        $latest_comments = Comment::visible()->latest()->take(4)->get();

        
        // 最新咨询
        // $ios_news       = Article::getList('ios','priority')->take(6)->get();
        $gh_news   = Article::getList(['hynews','ghnews'],'priority')->take(6)->get();

        $yd_news = Article::getList('ydnews','priority')->take(6)->get();


        $yx_news = Article::getList('yxnews','priority')->take(6)->get();

       // $html5_news     = Article::getList(['html5', 'weixin', 'web'],'priority')->take(6)->get();

        return View::make('index.index', compact(
            'banners', 'cases', 'appissues',
            'ios_news', 'gh_news', 'html5_news',
            'latest_comments','works','yd_news','yx_news'
        ));
    }

    public function createsitemap()
    {
        $sitemap[] = '<?xml version = "1.0" encoding = "UTF-8" ?>' . "\r\n";
        $sitemap[] = "<urlset>\r\n";
        $sitemap[] = AppHelper::sitemapUrl(URL::to('/'), 'daily', '1.0');

        $sitemap[] = AppHelper::sitemapUrl(URL::route('ydds'), 'monthly', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('pages', ['o2oshop']), 'monthly', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('pages', ['dyhshop']), 'monthly', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('pages', ['pcshop']), 'monthly', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('pages', ['wxshop']), 'monthly', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('fangan'), 'monthly', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('moban'), 'monthly', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('mdnews.index'), 'monthly', '0.9');

        $sitemap[] = AppHelper::sitemapUrl(URL::route('case'), 'daily', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('news'), 'daily', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('news.list', ['hynews']), 'daily', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('news.list', ['yxnews']), 'daily', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('news.list', ['faq']), 'daily', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('news.list', ['ghnews']), 'daily', '0.9');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('news.list', ['ydnews']), 'daily', '0.9');

        $sitemap[] = AppHelper::sitemapUrl(URL::route('service'), 'monthly', '0.7');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('yxgj.index'), 'monthly', '0.7');

        //关于我们
        $sitemap[] = AppHelper::sitemapUrl(URL::route('about.index', ['about']), 'weekly', '0.7');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('about.index', ['recruit']), 'weekly', '0.7');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('about.index', ['law']), 'weekly', '0.7');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('about.index', ['contact']), 'weekly', '0.7');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('about.index', ['link']), 'weekly', '0.7');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('about.index', ['buy']), 'weekly', '0.7');
        $sitemap[] = AppHelper::sitemapUrl(URL::route('about.index', ['tool']), 'weekly', '0.7');

        //案例详情
        $cases = Work::whereType('work')->visible()->get();

        foreach ($cases as $case) {
            $sitemap[] = AppHelper::sitemapUrl(URL::route('case.detail', [$case->id]), 'weekly', '0.7');
        }

        //news
        $news = Article::visible()->published()->whereNotIn('category_code' ,['fangan','mdnews','faq'])->get();

        foreach ($news as $n) {
            $sitemap[] = AppHelper::sitemapUrl(URL::route('news.detail', [$n->id]), 'weekly', '0.7');
        }

        //方案
        $fangans = Article::visible()->published()->whereIn('category_code' ,['fangan'])->get();

        foreach ($fangans as $n) {
            $sitemap[] = AppHelper::sitemapUrl(URL::route('fangan.detail', [$n->id]), 'weekly', '0.7');
        }

        //公告
        $mdnews = Article::visible()->published()->whereIn('category_code' ,['mdnews'])->get();

        foreach ($mdnews as $n) {
            $sitemap[] = AppHelper::sitemapUrl(URL::route('mdnews.detail', [$n->id]), 'weekly', '0.7');

        }

        //常见问题
        $faqs = Article::visible()->published()->whereIn('category_code' ,['faq'])->get();

        foreach ($faqs as $n) {
            $sitemap[] = AppHelper::sitemapUrl(URL::route('faq.detail', [$n->id]), 'weekly', '0.7');

        }


        $hot_tags = Recommend::with('tag')->get();
        $arr = array();
        foreach ($hot_tags as $hot_tag) {
            if($hot_tag->tag) {
                $arr[] = $hot_tag->tag->id;
            }
        }

        foreach(array_unique($arr) as $a){

            $sitemap[] = AppHelper::sitemapUrl(URL::route('news.tag', [$a]), 'weekly', '0.7');
        }

        $sitemap[] = "</urlset>\r\n";
        //d($sitemap);exit;

        File::put('sitemap.xml', implode("\r\n", $sitemap));
        echo 'success';
        exit;
    }


}
