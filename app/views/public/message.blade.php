@if($errors->any())
@section('scripts')
<script type="text/javascript">
    (function($) {
        window.parent.$.scojs_message('<ul>@foreach($errors->all() as $error)<li><i>{{$error}}</i></li>@endforeach</ul>', $.scojs_message.<?php echo $errors->has('info') ? 'TYPE_OK' : 'TYPE_ERROR' ?>);
    })(jQuery)
</script>
@stop
@endif