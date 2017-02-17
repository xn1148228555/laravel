@extends('layouts.admin')
@section('title')站点设置@endsection
@section('content')
<section class="content-header">
    <h1>
        站点设置
        <small>站点信息设置</small>
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <form role="form" name="addForm" id="website_form" method="POST" action="{{ url('admin/setting/website') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">

                        <div class="form-group @if ($errors->has('website_name')) has-error @endif">
                            <label for="website_name">站点名称</label>
                            <input type="text" name="website_name" class="form-control " value=" {{ $lll }}">
                            @if ($errors->has('website_name')) <p class="help-block">{{ $errors->first('website_name') }}</p> @endif
                        </div>




                    <div class="box-footer">
                        <button type="button" id="saveBtn" class="btn btn-primary" name="submitBtn">保存</button>
                        <button type="reset" class="btn btn-success">重置</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('/static/js/jquery.jsonp.js') }}"></script>
<script type="text/javascript">
    $(function(){
        set_active_menu('global',"{{ url('admin/setting/website') }}");
        $("#saveBtn").click(function(){
            $.jsonp({
                url: push_site_url+$("#website_form input").serialize(),
                callbackParameter: "callback",
            });
            $("#website_form").submit();
        });

    });
</script>
@endsection