<div class="display-case-con-wrap">
            <div class="appcase-con">
                <ul class="appcase-con-list clearfix">
                @foreach($cases as $case)
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="{{'case.detail',$case->id}}">
                                {{AppHelper::img($case->images[0]->url,$case->images[0]->alt,array("width"=>290,"height"=>240))}}
                               <!--  <img src="/libraries/sunnsoft/images/case01.jpg"/>  --> 
                                
                            
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span>
                            <a href="case-details.html">{{$case->name}}</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">{{$case->name}}</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">{{}}</span></div>
                        </div>
                    </li>
                    @endforeach
                  <!--   <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case02.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">恒大报</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case03.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">特百惠</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case04.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">雅思分手攻略</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case01.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">倍护儿</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case02.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">恒大报</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case03.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">特百惠</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case04.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">雅思分手攻略</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case01.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">倍护儿</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case02.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">恒大报</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case03.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">特百惠</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li>
                    <li class="appcase-con-item">
                        <div class="appcase-con-img">
                            <a href="#">
                                <img src="/libraries/sunnsoft/images/case04.jpg"/>  
                            </a>
                            <span></span>
                        </div>
                        <div class="appcase-con-bottom">
                            <div class="appcase-con-title"><span>名称：</span><a href="#">雅思分手攻略</a></div>
                            <div class="appcase-content"><span class="label">类型：</span><span class="con">母婴类商城，为其开发了APP、PC网站及微信商城。</span></div>
                            <div class="appcase-content"><span class="label">评论：</span><span class="con">购物车、特殊筛选方式定制、多支付系统接入。</span></div>
                        </div>
                    </li> -->
                </ul>
            </div>
            <div class="more-case"><a>更多</a></div>
        </div>