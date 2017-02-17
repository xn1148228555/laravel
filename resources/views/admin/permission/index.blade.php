@extends('layouts.admin')
@section('title')权限管理@endsection
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            权限管理
            <small>管理系统所有权限</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> home</a></li>
            <li class="active">权限管理</li>
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
                                <a href="{{ url('admin/permission/create') }}" class="btn btn-default btn-sm" data-toggle="tooltip" title="创建新权限"><i class="fa fa-plus"></i></a>
                                <button class="btn btn-default btn-sm" data-toggle="tooltip" title="删除选中项" onclick="confirm_delete('确认删除选中项？')"><i class="fa fa-trash-o"></i></button>
                              </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="row">
                                <form name="searchForm" action="{{ url('admin/permission/index') }}" method="GET">
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
                        <form name="itemForm" id="item_form" method="POST" action="{{ url('admin.permission.destroy') }}">
                            <input name="_method" type="hidden" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table class="table table-striped">
                                <tr>
                                    <th><input type="checkbox" class="checkbox-toggle" /></th>
                                    <th>权限名称</th>
                                    <th>唯一标示</th>
                                    <th>创建时间</th>
                                    <th>更新时间</th>
                                    <th>操作</th>
                                </tr>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td><input type="checkbox" name="id[]" value="{{ $permission->id }}"/></td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->slug }}</td>
                                        <td>{{ $permission->created_at }}</td>
                                        <td>{{ $permission->updated_at }}</td>
                                        <td>
                                            <div class="btn-group-xs" >
                                                <a class="btn btn-default" href="{{ url('admin/permission/'.$permission->id.'/edit') }}" data-toggle="tooltip" title="编辑"><i class="fa fa-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </form>
                    </div>
                  

                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script type="text/javascript">
        set_active_menu('admin',"{{ url('admin.permission.index') }}");
    </script>
@endsection