<div class="contact">
    <div class="cd-s2-title">了解更多微信商城系统解决方案</div>
    <div id="cd-s1-en">CONTACT US</div>
    <div class="contact-form" id="register-form">
        <form method="post">
            <p class="form-tip">{{$errors->first()}}</p>
            <input type="hidden" name="type" value="try" />
            <input type="text" name="name" placeholder="请输入您的姓名" />
            <input type="text" name="mobile" placeholder="请输入您的联系电话" />
            <input type="text" name="email" placeholder="请输入您的邮箱" />
            <textarea rows="4"  name="detail" placeholder="请输入您的咨询内容"></textarea>
            <input type="submit" class="message-submit" value="提交留言" />
        </form>
    </div>
</div>

@section('scripts')
    @parent
    {{HTML::script('js/consult_form.js')}}
    {{HTML::script('js/sco/sco.message.js')}}
    {{HTML::script('js/sco/sco.modal.js')}}
    {{HTML::script('js/sco/sco.panes.js')}}
    {{HTML::script('js/sco/sco.tab.js')}}
@stop