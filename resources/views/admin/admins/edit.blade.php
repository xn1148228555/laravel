@extends('layouts.admin')
@section('title')编辑权限@endsection
@section('content')

        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        会员编辑
        <small>修改会员信息</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> home</a></li>
        <li class="active">会员编辑</li>
    </ol>
</section>
<section class="content">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>编辑失败</strong> 输入不符合要求<br><br>
            {!! implode('<br>', $errors->all()) !!}
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <form action="{{ url('admin/user/'.$user->id) }}" method="POST">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <input type="text" name="username" class="form-control" required="required"  value="{{ $user->name }}">
                    <br>


                    <textarea name="email" rows="10" class="form-control" required="required"  >{{ $user->email }}</textarea>

                    <button class="btn btn-lg btn-info">提交修改</button>
                </form>

</section>
@endsection