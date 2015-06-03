<div class="home-block06">
    <div class="block-top-mess">
        <div class="tm-title"><h2>麦多商城成功案例</h2></div>
        <div class="red-piece"></div>
        <div class="tm-content">
            麦多团队拥有丰富的商城开发经验 ，针对中小企业的快速搭建商城要求，推出了麦多移动商城系统，同<br>时针对中大型企业，麦多同样能够进行定制化的商城开发，并且因已有扎实的商城开发基础，<br>
            因此开发效率大大提升，比一般开发公司更有效率。
            <div class="en-dis">CASE</div>
        </div>
    </div>
    <!-- 区块头部文字描述 END-->
    <!-- 案例  -->
    <div class="hb06-content">
    <ul class="hb06ul">
        @foreach($cases as $case)
        <li>
            <div class="img"><a target="_blank" href="{{URL::route('case.detail',['id'=>$case->id])}}">
            {{  AppHelper::img($case->images[0]->url,$case->images[0]->alt,array('width'=>290,'height'=>240))}}
            <div class="cover"></div></a></div>
            <div class="word">
                <div class="word-box">
                    <h3><a target="_blank" href="{{URL::route('case.detail',['id'=>$case->id])}}">{{AppHelper::ellipse($case->name,30)}}</a></h3>
                    <p>{{AppHelper::ellipse($case->brief,85)}}</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>

    {{--<div class="merchant">--}}
        {{----}}
        {{--<ul class="mcul">--}}
           {{--<li><img src="/sunnsoft/images/success-icon-01.jpg" alt="P&G网站"></li>--}}
           {{--<li><img src="/sunnsoft/images/success-icon-02.jpg" alt="多加宝集体"></li>--}}
           {{--<li><img src="/sunnsoft/images/success-icon-03.jpg" alt="百果园商城"></li>--}}
           {{--<li><img src="/sunnsoft/images/success-icon-04.jpg" alt="广铝集团"></li>--}}
           {{--<li><img src="/sunnsoft/images/success-icon-05.jpg" alt="带啥儿商城"></li>--}}
           {{--<li><img src="/sunnsoft/images/success-icon-06.jpg" alt="板材易商城"></li>--}}
           {{--<li><img src="/sunnsoft/images/success-icon-07.jpg" alt="qiny情侣装商城"></li>--}}
          {{--</ul>--}}
    {{--</div><!-- 商家logo -->--}}
</div>