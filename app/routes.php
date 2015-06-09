<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

// 微信获取内容资格
Route::controller('weixin', 'WeiXinController');

Route::group(array('before' => 'seorules.before'), function() {
    Route::get('/', array('as' => 'index', 'uses' => 'IndexController@getShow'));

    /*我要试用*/
    Route::get('dj',array('as' =>'dj.index','uses'=>'PagesController@getDjIndex'));
    Route::post('dj',array('as' =>'dj.index','uses'=>'PagesController@postConsult'));

    //系统功能
    Route::get('function',array('as' =>'system.function','uses'=>'FunctionController@getIndex'));

    //专题开发平台 开发类型 页面相关
    //专题pages页面相关
    Route::get('{page_code}', array('as' => 'pages', 'uses' => 'PagesController@getPage'))->where('page_code', '(pc|o2o|wx|dyh)shop');

    // 行业解决方案
    Route::get('fangan', array('as' => 'fangan', 'uses' => 'SolutionsController@getIndex'));
    Route::get('fangan-{id}', array('as' => 'fangan.detail', 'uses' => 'SolutionsController@getDetail'));

    //案例
    Route::get('case/{id_str?}', array('as' => 'case', 'uses' => 'CasesController@getIndex'));
    Route::get('case-{id}', array('as' => 'case.detail', 'uses' => 'CasesController@getDetail'));
    Route::get('case-{id}/comment', array('as' => 'case.comment', 'uses' => 'CasesController@getComment'));
    Route::post('case-{id}/comment', array('as' => 'case.comment', 'uses' => 'CasesController@postComment'));
    Route::get('update-case-view-count/{id}', array('as' => 'case.update', 'uses' => 'CasesController@getUpdateViewCount'));

    //资讯
    Route::get('news', array('as' => 'news', 'uses' => 'NewsController@getIndex'));
    Route::get('tag-{id}', ['as' => 'news.tag', 'uses' => 'NewsController@getTag']);
    Route::get('{type}', ['as' => 'news.list', 'uses' => 'NewsController@getList'])->where('type','(hynews|ydnews|yxnews|faq|ghnews)');

    Route::get('news-{id}', ['as' => 'news.detail', 'uses' => 'NewsController@getDetail']);
    Route::get('faq-{id}', ['as' => 'faq.detail', 'uses' => 'NewsController@getFaqDetail']);

    Route::get('update-news-view-count/{id}', array('as' => 'news.update', 'uses' => 'NewsController@getUpdateViewCount'));
    Route::get('news/{id}/comment', ['as' => 'news.comment', 'uses' => 'NewsController@getComment']);
    Route::post('news/{id}/comment', ['as' => 'news.comment', 'uses' => 'NewsController@postComment']);

    //APP开发公司
    Route::get('{company}', ['as' => 'companies.detail', 'uses' => 'NewsController@getCompanyDetail'])->where('company','\w+app');

    //留言表单
    Route::get('consult', array('as' => 'consult', 'uses' => 'PagesController@getConsult'));
    Route::post('consult', array('as' => 'consult', 'uses' => 'PagesController@postConsult'));
    //sitemap
    Route::get('sitemap',array('as' => 'sitemap', 'uses' => 'PagesController@getSitemap'));

    /*其他商城系统定制服务*/


    //麦多商城产品
    Route::get('ydds/{id?}',array('as' =>'ydds','uses' =>'YddsController@getYdds'))->where('id', '\d+');
    //模板
    Route::get('moban',array('as' =>'moban','uses' =>'MobanController@getMobanIndex'));


    //服务
    Route::get('service',array('as' =>'service','uses' =>'ServiceController@getService'));
    Route::get('service/{id?}',array('as' =>'service.detail','uses' =>'ServiceController@getServiceDetail'))->where('id', '\d+');

//关于麦多

    Route::get('{about}',array('as'=>'about.index','uses'=>'AboutController@getAboutIndex'))->where('about', '(about|recruit|law|contact|link|buy|tool)');
    /*公告*/
    Route::get('mdnews',array('as'=>'mdnews.index','uses'=>'MdnewsController@getMdnewsIndex'));
    Route::get('mdnews-{id}',array('as'=>'mdnews.detail','uses'=>'MdnewsController@getMdnewsDetail'));

    Route::get('zixun',array('as'=>'zixun.index','uses'=>'ZixunController@getZixunIndex'));
    Route::post('zixun',array('as'=>'zixun.index','uses'=>'ZixunController@postZixun'));
    //模板
    Route::get('moban', array('as' => 'moban.index', 'uses' => 'MobanController@getMobanIndex'));

    /*活动*/
    Route::get('event', array('as' => 'event.index', 'uses' => 'AboutController@getEventIndex'));

    /*营销工具*/

    Route::get('yxgj',array('as'=>'yxgj.index','uses'=>'AboutController@getYxgjIndex'));

    //清除缓存
    Route::get('cache/clear', function () {
        Cache::flush();
        Freezer::clear();
        return Redirect::to(URL::previous());
    });
    //生成sitemap
    Route::get('createsitemap', 'IndexController@createsitemap');
});

