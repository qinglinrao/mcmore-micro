<!doctype html>
<!--[if lt IE 7]><html class='ie lte9 lte8 lte7 ie6' ><![endif]-->
<!--[if IE 7 ]><html class="ie lte9 lte8 lte7 ie7" ><![endif]-->
<!--[if IE 8 ]><html class="ie lte9 lte8 ie8" "><![endif]-->
<!--[if IE 9 ]><html class="ie lte9 ie9" ><![endif]-->
<html>
<head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="baidu-site-verification" content="SkuslauSHL" />
			<meta name="360-site-verification" content="88730af8854662efd0aaec358a69eb4e" />
			<meta name="sogou_site_verification" content="s4gnKp4B8O"/>
            <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
             <title>@yield('title') </title>
             <meta name="keywords" content="@yield('keywords')"/>
              <meta name="description" content="@yield('description')"/>
              <meta name="author" content=" 麦多商城系统| www.mcmore.com" />
            <link href="{{AppHelper::asset("/favicon.ico")}}" type="text/css" rel="stylesheet" />

               {{AppHelper::assets([
                        'css/webapp.css','css/message.css','css/loadmore.css'
                    ], '.css')}}


</head>

<body>
<div id="main">
    @include('public.left_menu')
    <div class="mainContent">
    @include('public.header')

        <div class="close">

            @if(Request::is('/') || Request::is('function*') || Request::is('service') || Request::is('case*'))
                @include('public.menu1')
            @endif

            @if(Request::is('ydds*'))
                @include('public.menu2')
            @endif

            @yield('content')
            @include('public.footer')
        </div>
    </div>
</div>
{{AppHelper::assets([
        'js/jquery.min.js',
    /*  'js/consult_form.js',*/
        'js/jquery.ScrollPic.js ',
        'js/footer.js',
       /* 'js/webapp.js',*/
/*         'js/sco/sco.message.js',
        'js/sco/sco.modal.js',
        'js/sco/sco.panes.js',
        'js/sco/sco.tab.js',*/
        'js/leftmenu.js'
   ], '.js')}}
@yield('scripts')

 </body>
</html>
