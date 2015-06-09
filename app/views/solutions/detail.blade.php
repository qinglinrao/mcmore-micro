@extends('public.html')

@section('content')
    <div id="solution-detailed-header">
        <div class="sdh-back-arrow">
            <a href="">
                <img src="/img/icon/left-arrow.png">
            </a>
        </div>
        <div class="sdh-title"><p>服装行业电商解决方案</p></div>
        <div class="sdh-share">
            <a href="">
                <img src="/img/icon/share.png">
            </a>
        </div>
    </div>

    <div id="solution-brief">
        <div class="solution-brief-title">
            麦多商城解决方案
        </div>
        <div class="solution-brief-text"><b>摘要：</b>摘要又称概要、内容提要。摘要是以提供文献内容梗概为目的，不加评论和补充解释，简明、确切地记述文献重要内容的短文。其基本要素baok研究目的、方法、结果和结论、具体地讲就是研究工作的主要对象和范围。</div>
        <div id="solution-brief-other">
            <div id="solution-brief-time">2014-10-13 12:10</div>
            <div id="solution-brief-comment">56</div>
            <div id="solution-brief-browse">112</div>
        </div>
    </div>
    <div class="solution-detailed">
        <div class="solution-detailed-img">
            <img src="/img/solution-detailed-1.jpg">
        </div>
        <div class="solution-detailed-text">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中国传统的服装行业市场，尤其是服装加工业，受到海外市场疲软的强烈冲击，随着订单量的萎缩，国内的传统服装企业面临着破产和转型的多个问题。</p>
            <br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;近期，传统服装企业破产、倒闭新闻层出不穷，部分服装企业负责人跑路引发行业性信任危机，进而引爆了一场大洗牌。在这个严寒的行业之冬，各大电商平台的火爆业绩孕育了无限生机。</p>
        </div>
    </div>

    <div class="last-next sd-last-next">
        <a href="">
            <div class="last-one"><b>上一篇：</b>医疗行业解决方案</div>
        </a>
        <a href="">
            <div class="next-one"><b>下一篇：</b>建材行业解决方案</div>
        </a>
    </div>

    <div class="recommend-news">
        <div class="recommend-news-title">电商资讯相关推荐</div>
        <div class="recommend-news-list">
            <ul>
                <li>
                    <a href="">
                        用独立微信商城系统创业的优势
                    </a>
                </li>
                <li>
                    <a href="">
                        php商城系统相关知识普及
                    </a>
                </li>
                <li>
                    <a href="">
                        建立在商城系统上的o2o餐饮品牌出路在哪？
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="cd-comment">
        <div class="comment-title">
            全部评论
            <span></span>
        </div>
        <div id="comment-list">
            <ul>
                <li>
                    <div class="user-comment">
                        <div class="comment-top">
                            <div class="user-name">遇见</div>
                            <div class="comment-time">2015-03-25 发表</div>
                        </div>
                        <div class="comment-detailed">多种团购服务集于一体，使用起来非常的方便。尤其是一些高频次的团购服务内容，像是美食、电影、KTV等，是很赞的一个团购商城。</div>
                    </div>
                </li>
                <li>
                    <div class="user-comment">
                        <div class="comment-top">
                            <div class="user-name">流连忘返</div>
                            <div class="comment-time">2015-03-25 发表</div>
                        </div>
                        <div class="comment-detailed">商城网站案例棒棒哒！</div>
                    </div>
                </li>
            </ul>
        </div>

        <div id="i-want-comment">
            <form>
                <input type="text" name="comment" placeholder="请输入点评内容">
            </form>
        </div>
    </div>
@stop