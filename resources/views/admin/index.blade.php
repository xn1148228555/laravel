@extends('layouts.admin')

@section('content')
        <!-- Small boxes (Stat box) -->
<div class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">文章数</span>
                    <span class="info-box-number">{{ $totalArticleNum }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">注册用户</span>
                    <span class="info-box-number">{{ $totalUserNum }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->




    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">系统信息</h3>
                </div>
                <div  >
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                <tr>
                                    <td>软件版本：  V0.06</td>
                                </tr>
                                <tr>
                                    <td>服务器域名： {{ $systemInfo['hostName'] }}</td>
                                </tr>
                                <tr>
                                    <td>PHP版本： {{ $systemInfo['phpVersion'] }}</td>
                                </tr>
                                <tr>
                                    <td>服务器端信息：{{ $systemInfo['runOS'] }}/{{ $systemInfo['serverInfo'] }}</td>
                                </tr>
                                <tr>
                                    <td>最大上传限制：{{ $systemInfo['maxUploadSize'] }}</td>
                                </tr>
                                <tr>
                                    <td>最大执行时间：{{ $systemInfo['maxExecutionTime'] }} seconds</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        </div>
@endsection
