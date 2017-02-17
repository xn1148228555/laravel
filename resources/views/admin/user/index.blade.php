@extends('layouts.admin')
@section('title')会员管理@endsection
@section('content')

        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        会员管理
        <small>会员管理</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> home</a></li>
        <li class="active">会员管理</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="btn-group">
                                <a href="{{ url('admin/user/create') }}" class="btn btn-default btn-sm" data-toggle="tooltip" title="创建"><i class="fa fa-plus"></i></a>
                                <button class="btn btn-default btn-sm" data-toggle="tooltip" title="删除选中项" onclick="confirm_delete('确认删除选中项？')"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="row">
                                <form name="searchForm" action="{{ url('admin/user/index') }}" method="GET">
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" name="word" placeholder="权限名称" value=""/>
                                    </div>
                                    <div class="col-xs-1">
                                        <button type="submit" class="btn btn-primary">搜索</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body  no-padding">


                    <table class="table table-striped">
                        <tr>
                            <th><input type="checkbox" class="checkbox-toggle" /></th>
                            <th>id</th>
                            <th>用户名</th>
                            <th>邮箱</th>
                            <th>创建时间</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td><input type="checkbox" name="id[]" value="{{ $user->id }}"/></td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <div class="btn-group-xs" >
                                        <a class="btn btn-default" href="{{ url('admin/user/'.$user->id.'/edit') }}" data-toggle="tooltip" title="编辑"><i class="fa fa-edit"></i></a>

                                        <form action="{{ url('admin/user/'.$user->id) }}" method="POST" style="display: inline;">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $users->links() }}
                </div>


            </div>
        </div>
    </div>
</section>

@endsection
