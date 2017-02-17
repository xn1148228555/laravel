@extends('layouts.admin')
@section('title')新建权限@endsection
@section('content')

        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        新建权限
        <small>添加新权限</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> home</a></li>
        <li class="active">新建权限</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <form role="form" action="{{ url('admin/modifypassword') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="原密码" name="credential_o">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="新密码" name="credential">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="确认新密码" name="credential_confirmation">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">确认修改</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
