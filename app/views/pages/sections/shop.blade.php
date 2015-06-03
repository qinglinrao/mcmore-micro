<div id="main">
    <div class="e-supplier-wrap wrap">
        @include('public.breadcrumb')
        <div class="e-supplier-title">
            <h1>
                专业为您提供全模式的商城APP/电商APP解决方案
            </h1>
            <p>
                PROFESSIONAL TO PROVIDE YOU FULL MODE MALL SOLUTIONS
            </p>
            <div class="title-line">
            </div>
        </div>
        <div class="e-supplier-content">
            <div class="e-supplie-list">
                <ul class="clearfix">
                    <li class="left">
                        <div class="con-line">
                        </div>
                        <h3>
                            <a href="{{ URL::route('app.pages', 'b2c') }}">
                                B2C电商模式
                            </a>
                        </h3>
                        <p>
                            B2C又称为单商模式，B2C商城的特点就是单一的企业/公司向个人销售产品。
                        </p>
                    </li>
                    <li class="right">
                        <div class="con-line">
                        </div>
                        <h3>
                            <a href="{{ URL::route('app.pages', 'b2b2c') }}">
                                B2B2C电商模式
                            </a>
                        </h3>
                        <p>
                            B2B2C又称为多商模式，B2B2C商城就是，平台方自己可以销售产品 ，同时也能引入商家销售。
                        </p>
                    </li>
                    <li class="left bottom">
                        <div class="con-line">
                        </div>
                        <h3>
                            <a href="{{ URL::route('app.pages', 'b2b') }}">
                                B2B电商模式
                            </a>
                        </h3>
                        <p>
                            B2B商城又称为批发商城，B2B电商模式，即为企业对企业的电子商务模式。
                        </p>
                    </li>
                    <li class="right bottom">
                        <div class="con-line">
                        </div>
                        <h3>
                            <a href="{{ URL::route('app.pages', 'o2o') }}">
                                O2O电商模式
                            </a>
                        </h3>
                        <p>
                            O2O商城又称为本地社区商城，O2O即Online To Offline，Online2Offline模式（线上到线下，简称O2O），将线下商务的机会与互联网结合在一起，让互联网成为线下交易的前台。
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        @include('pages.blocks.related')
    </div>
</div>