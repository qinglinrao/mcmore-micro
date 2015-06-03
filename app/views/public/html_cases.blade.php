<!doctype html>
<!--[if lt IE 7]><html class='ie lte9 lte8 lte7 ie6' ><![endif]-->
<!--[if IE 7 ]><html class="ie lte9 lte8 lte7 ie7" ><![endif]-->
<!--[if IE 8 ]><html class="ie lte9 lte8 ie8" "><![endif]-->
<!--[if IE 9 ]><html class="ie lte9 ie9" ><![endif]-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" >
  <title>{{sprintf(Seo::get('title'),$filter_word)}}案例-商侣软件</title>
  <meta name="keywords" content="{{sprintf(Seo::get('keywords'),$filter_word)}}案例"/>
  <meta name="description" content="{{sprintf(Seo::get('description'),$filter_word,$filter_word)}}"/>
  <meta name="author" content="商侣软件 | www.sunnsoft.com" />
  <meta name="baidu-site-verification" content="uaEEahePcH" />
  {{ HTML::style('sunnsoft/css/mainstyle.css') }}
  {{ HTML::style('sunnsoft/css/sunnsoft.css') }}
</head>

<body>
<div class="body-wrap">
@include('public.header')
@yield('content')
@include('public.footer')
</div>
{{AppHelper::assets([
        'libraries/jquery-1.11.1.js',
        'libraries/WriteLimit/jquery.writelimit.js',
        'sunnsoft/js/jquery.slides.min.js',
        'sunnsoft/js/jquery.colorboxmin.js',
        'sunnsoft/js/jquery.pin.min.js',
        'libraries/sco/sco.message.js',
        'libraries/sco/sco.modal.js',
        'libraries/sco/sco.panes.js',
        'libraries/sco/sco.tab.js',
        'sunnsoft/js/public.js',
        'sunnsoft/js/tab.js'   
    ], '.js')}}
@yield('scripts')
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
 </body>
</html>
