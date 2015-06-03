<div id="main" class="platform-android">
    <div class="platform-android-wrap wrap">
        @include('public.breadcrumb')
        <div class="platform-a-title" id="platform-a-title">
            <h1>
                （安卓）Android开发服务
            </h1>
        </div>
        <div class="h-block-sys" id="platform-item">
            <div class="sys-con clearfix">
                <div class="sys-left">
                    <h3>
                        了解
                        <b>
                            Android（安卓）系统
                        </b>
                        <span>
                            ABOUT Android
                        </span>
                    </h3>
                    <div class="line">
                    </div>
                    <p>
                        Android是一种基于Linux的自由及开放源代码的操作系统，主要使用于移动设备，如智能手机和平板电脑，由Google公司和开放手机联盟领导及开发。Android操作系统最初由Andy
                        Rubin开发，主要支持手机。2005年8月由Google收购注资。2007年11月，Google与84家硬件制造商、软件开发商及电信营运商组建开放手机联盟共同研发改良Android系统。随后Google以Apache开源许可证的授权方式，发布了Android的源代码。第一部Android智能手机发布于2008年10月。
                    </p>
                </div>
                <div class="sys-right">
                    <img class="type-img" src="/sunnsoft/images/p-android01.png" alt="什么是Android系统">
                </div>
                <!--<i></i>-->
            </div>
        </div>
        <div class="platform-advantage">
            <div class="subject-title">
                <h3>
                    Android APP
                    <span>
                        3
                    </span>
                    大开发优势
                </h3>
                <p>
                    THE ADVANTAGES of Android
                </p>
            </div>
            <div class="platform-subject-item">
                <div class="item-left">
                    <img src="/sunnsoft/images/p-android02.png" alt="安卓手机系统是目前移动终端用户量最多的操作系统">
                </div>
                <div class="item-right">
                    <h3>
                        Android是用户量最多的移动操作系统
                        <span>
                            THE MOST USERS
                        </span>
                    </h3>
                    <div class="line">
                    </div>
                    <p>
                        就在2013年5月，安卓系统诞生5周年的时候，全球采用安卓系统的移动设备，已经突破了10亿台，可以说是您身边6台就会至少有一台设备用着这个系统。
                    </p>
                </div>
            </div>
            <div class="platform-subject-item">
                <div class="item-left">
                    <img src="/sunnsoft/images/p-android03.png" alt="安卓手机app应用软件推广起来相对容易">
                </div>
                <div class="item-right">
                    <h3>
                        Android APP 推广相对容易
                        <span>
                            EASY SEO
                        </span>
                    </h3>
                    <div class="line">
                    </div>
                    <p>
                        相对苹果用户想要下载应用只能通过app store，安卓用户的下载就相对容易非常多，用户不仅可以通过应用商店下载您的应用，甚至可以在您推广的广告、宣传单张中扫一个二维码就可以开始下载您的应用。
                    </p>
                </div>
            </div>
            <div class="platform-subject-item">
                <div class="item-left">
                    <img src="/sunnsoft/images/p-android04.png" alt="Android系统的开放性比较高">
                </div>
                <div class="item-right">
                    <h3>
                        Android 系统开放性高
                        <span>
                            HIGHLY OPENING SYSTEM
                        </span>
                    </h3>
                    <div class="line">
                    </div>
                    <p>
                        相对苹果系统的全封闭式，安卓系统的高度开放，给了开发者相当高的开发自由度，您的应用可以更加接近您所想所要的。
                    </p>
                </div>
            </div>
            <div class="platform-ios-sec-bg">
            </div>
        </div>
        <div class="platform-question" id="platform-question">
            <div class="subject-title">
                <h3>
                    Android APP开发常见
                    <span>
                        问题
                    </span>
                </h3>
                <p>
                    THE QUESTIONS of Android DEVELOPMENT
                </p>
            </div>
            <div class="platform-question-con">
                <div class="question-item">
                    <div class="question-item-wrap">
                        <h4>
                            Android
                            <span>
                                入门
                            </span>
                            知识
                        </h4>
                        @include('pages.partials.item', ['items'=>$primer_recommends])
                    </div>
                </div>
                <div class="question-item left-btm">
                    <div class="question-item-wrap">
                        <h4>
                            Android
                            <span>
                                开发入门
                            </span>
                            知识
                        </h4>
                        @include('pages.partials.item', ['items'=>$developer_primer_recommends])
                    </div>
                </div>
                <div class="question-item right">
                    <div class="question-item-wrap">
                        <h4>
                            Android
                            <span>
                                运营
                            </span>
                            知识
                        </h4>
                        @include('pages.partials.item', ['items'=>$operate_recommends])
                    </div>
                </div>
            </div>
            <div class="question-bg">
            </div>
        </div>
        @include('pages.blocks.related')
    </div>
</div>