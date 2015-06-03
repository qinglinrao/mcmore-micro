<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <link rel="shortcut icon" href="{{AppHelper::asset("/favicon.ico")}}" type="image/x-icon"/>
        <link rel="icon" href="{{AppHelper::asset("/favicon.ico")}}" type="image/x-icon"/>
        <title>404-{{Config::get('app.sitename')}}</title>
        <meta name="keywords" content="404页面"/>
        <meta name="description" content="404页面"/>
        <meta name="author" content="{{Config::get('app.sitename')}}" />
        <meta content="noindex,nofollow" name="robots">
        <style>
            body{
                background: #313131;
                font-family: '微软雅黑';
                height: 100%;
                margin: 0;
            }
            #main-wrapper{
                width: 850;
                min-height: 100%;
                padding-left:170px;
                margin: 0 auto;
                padding-top: 100px;
                padding-right: 170px;
                background: url('/assets/images/404_bg.png') right 150px no-repeat;
            }
            h1,
            .title{
                font-size: 30px;
                color: #fff;
                line-height: 60px;
            }

            p{
                color: #707070;
                font-size: 14px;
                width: 200px;
            }
            .action ul{
                padding: 0;
            }
            .action li{
                list-style: none;
                padding-top: 74px;
                width: 74px;
                display: block;
                float: left;
                background: url('/assets/images/404_link_bg.png') right top no-repeat;
                text-align: center;
                margin-right: 75px;
            }
            .action li.back{
                background-position: left top;
            }
            .action li a{
                text-decoration: none;
                color: #fff;
            }
            .action li.back a{
                color: #ff4e57;
            }
        </style>
    </head>
    <body>
        <div  id="main-wrapper">
            <h1>不好意思，<br/>你穿越到404了。</h1>
            <p>很多人不知道404是什么。
                其实，它是那个我们梦寐以求最后还是木有租下的办公室。
                就酱。</p>
            <div class="title">
                想回到哪里点哪里：
            </div>
            <div class="action">
                <ul>
                    <li class="back"><a href="javascript:history.go(-1)">上一页</a></li>
                    <li><a href="http://www.mcmore.com/">首页</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>