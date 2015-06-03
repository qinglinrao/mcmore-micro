 <div class="home-block06">
        <div class="block-top-mess">
           <div class="tm-title"><h2><a href="http://www.mcmore.com/case/">麦多商城成功案例</a></h2></div>
           <div class="red-piece"></div>
           <div class="tm-content">
           麦多团队用户丰富的网上商城开发经验，针对中小企业的快速搭建商城网站要求，推出了麦多手机商城系统；同时针对中大型企业，麦多同样能够进行定制化的商城系统开发，并且因已有扎实的商城网站开发基础，因此开发效率大大提升，比一般的系统开发公司更有效率。
           <div class="en-dis">CASE</div>
           </div>
        </div><!-- 区块头部文字描述 -->

        <div class="hb06-content">
          <ul class="hb06ul">

            @foreach($works as $work)
          <li>

            <div class="img"><a target="_blank" href="{{URL::route('case.detail',['id'=>$work->id])}}">

            {{AppHelper::img($work->images[0]->url,$work->name,array('width'=>290,'height'=>240))}}
           <div class="cover"></div></a></div>
            <div class="word">
              <div class="word-box">
                  <a target="_blank" href="{{URL::route('case.detail',['id'=>$work->id])}}">{{$work->name}}</a>
                  <p>{{$work->brief}}</p>
              </div>
            </div>
          </li>
            @endforeach
          </ul>
        </div><!-- 区块内容 -->

        <div class="merchant">
          <ul class="mcul">
           <li><img src="/sunnsoft/images/success-icon-01.jpg" alt="P&G网站"></li>
           <li><img src="/sunnsoft/images/success-icon-02.jpg" alt="多加宝集体"></li>
           <li><img src="/sunnsoft/images/success-icon-03.jpg" alt="百果园商城"></li>
           <li><img src="/sunnsoft/images/success-icon-04.jpg" alt="广铝集团"></li>
           <li><img src="/sunnsoft/images/success-icon-05.jpg" alt="带啥儿商城"></li>
           <li><img src="/sunnsoft/images/success-icon-06.jpg" alt="板材易商城"></li>
           <li><img src="/sunnsoft/images/success-icon-07.jpg" alt="qiny情侣装商城"></li>
          </ul>
        </div><!-- 商家logo -->
     </div><!-- 首页案例 -->



{{--<div class="appcase">--}}
    {{--<div class="appcase-warp">--}}
        {{--<div class="title-top">--}}
            {{--<div class="title-con">--}}
                {{--<h2><a href="{{URL::route('case')}}">APP经典案例</a></h2>--}}
                {{--<p>CASE</p>--}}
                {{--<span class="title-btn"><span></span></span>--}}
            {{--</div>--}}
            {{--<p>商侣APP开发公司拥有超过5个主流开发平台，100人以上的App开发/网站制作团队，服务超过120家企业</p>--}}
            {{--<p>完成超过10000张产品设计！我们了解大中小型企业的生意模式，需求，我们倡导让客户感知产品的应用体验价值，而不仅是产品的功能。--}}
            {{--</p>--}}
        {{--</div>--}}
        {{--<div class="appcase-title-list">--}}

            {{--@foreach($cases['groups'] as $group)--}}
           {{----}}
            {{--<a href="#" re='nofollow' class="appcase-title-item" data-toggle="tab">{{{ $group->name }}}</a>--}}
            {{--@endforeach--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}
