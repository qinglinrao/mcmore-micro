
                 <div class="lr-mablock">
                     <div class="block-top-mess">
                        @if($code==='o2oshop')
                       <div class="tm-title">了解更多O2O商城系统解决方案</div>
                        @elseif($code==='pcshop')
                        <div class="tm-title">了解更多网上商城系统解决方案</div>
                        @elseif($code==='dyhshop')
                        <div class="tm-title">了解更多多用户商城系统解决方案</div>
                        @else
                        <div class="tm-title">了解更多微信商城系统解决方案</div>
                        @endif
                       <div class="en-title">contact us</div>
                     </div><!-- 区块头部文字描述 -->
                     <div class="message-board clearfix">
                       <div class="mb-form" id="consult-form">
                        <form>
                         <div class="mb-input">
                           <span>姓名：</span><input type="text" name="name">
                         </div>
                         <div class="mb-input">
                           <span>手机号码：</span><input type="text" name="mobile">
                         </div>
                         <div class="mb-input">
                           <span>您的邮箱：</span><input type="text" name="email">
                         </div>
                         <div class="mb-input textarea">
                           <span>咨询内容：</span>
                           <textarea name="detail"></textarea>
                         </div>
                         <input type="submit"  class="message-submit input-submit" value="提交留言">
                        </form>
                       </div>

                       <div class="mb-linkus">
                        <div class="mb-row phone">客服热线：4008-388-381</div>
                        <div class="mb-row qq"><span>在线咨询：</span><a href="http://wpa.qq.com/msgrd?v=3&uin=2924551319&site=qq&menu=yes" rel="nofollow"><img src="../sunnsoft/images/qq-button.png"></a></div>
                        <div class="mb-row worktime">工作时间：9:00-18:00【周一至周五】</div>

                       </div>
  
                     </div><!-- 区块大图 -->
                 </div>
                 <!-- 区块02 -->
                 
@section('scripts')
@parent
{{HTML::script('sunnsoft/js/consult_form.js')}}
@stop