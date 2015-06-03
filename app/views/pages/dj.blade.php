@extends('public.html')
@section('title'){{ Seo::get('title')}}@stop
@section('keywords'){{Seo::get('keywords')}}@stop
@section('description'){{Seo::get('description')}}@stop
@section('content')
    <div id="trial-register">
        <div class="tr-title">试用登记</div>
        <div class="tr-title-en">TRIAL REGISTRATION </div>
        <div class="tr-text">有兴趣试用麦多wap移动商城系统？您只需要<br>在下方表格中简单登记您的信息，我们的销售人员会尽快<br>联系您，安排您体验麦多系统，感谢您对麦多的支持，谢谢！</div>
        <div class="tr-tel">4008-388-381</div>
        <div id="register-form">
            <form method="post">
                <input type="text" name="name" placeholder="请输入您的姓名" />
                <input type="text" name="mobile" placeholder="请输入您的联系电话" />
                <input type="text" name="email" placeholder="请输入您的邮箱" />
                <textarea rows="4"  name="detail" placeholder="请简单描述您的申请原因"></textarea>
                <input type="submit" class="message-submit" value="完成提交" />
            </form>
        </div>

    </div>

@stop

@section('scripts')
    @parent
    {{HTML::script('/js/consult_form.js')}}
@stop

