@extends('public.html')

@section('content')
<!--main	-->
	
<div class="mcmore-wrapper ">
           

            <!-- <div class="banner mainwidth">
              <div class="banimg">
                <img src="images/case-banner.jpg">
              </div>
            </div>--><!-- banner --> 

            <div class="main-content gray-bg">
           <div class="crumbs mainwidth">您现在的位置：<a href="http://www.mcmore.com/">麦多商城系统</a> > <b>业务咨询</b></div>
            <!--main  --><!-- 业务咨询页面-->
              
            <div  id="main">
              <div class="consulting-main-wrap">
                <div class="common-title"><!-- 标题-->
                  <h1>业务咨询</h1>
                  <p class="one">Business consulting</p>
                  <P class="two">您可以在下方直接提交需求，我们将在24小时内响应并<br/>
            给您提供专业方案。您也可以通过以下方式联系我们：</P>
                  <div class="contact-us-tel"></div>
                </div>
                <div class="contact-us-wrap">
                  <div class="contact-us" id="consult-form"><!-- 表单 -->
                    <form class="message-form" method="post">
                        <input type="text" name="name" class="message-name  t-input" placeholder="您的姓名:"  value="您的姓名:" />
                        <input type="text" name="mobile" class="message-tel  t-input" placeholder="您的联系电话:"  value="您的联系电话:"  />
                        <input type="text"  name="email" class="message-email  t-input" placeholder="您的邮箱:"  value="您的邮箱:"  />
                        <textarea name="detail" class="message-con  t-input" placeholder="请输入咨询内容" >请输入咨询内容</textarea>
                        <input type="submit" class="message-submit" value="完成提交" />
                    </form>
                  </div>
                </div>

              </div>
            </div>

            <!--main -end-->
            </div>
            <!-- 内容区 -->




        </div>
<!--main -end	-->
@stop

@section('scripts')
@parent
{{HTML::script('sunnsoft/js/consult_form.js')}}
@stop