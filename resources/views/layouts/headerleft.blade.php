<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
            <li><a href="{{ url('admin/article') }}"><i class="fa fa-link"></i> <span>分类管理</span></a></li>
            <li><a href="{{ url('admin/category') }}"><i class="fa fa-link"></i> <span>文章管理</span></a></li>
            <li><a href="{{ url('admin/comment') }}"><i class="fa fa-link"></i> <span>评论管理</span></a></li>
            <li><a href="{{ url('admin/user') }}"><i class="fa fa-link"></i> <span>用户管理</span></a></li>
            <li><a href="{{ url('admin/register') }}"><i class="fa fa-link"></i> <span>添加用户</span></a></li>
            <li><a href="{{ url('admin/permission') }}"><i class="fa fa-link"></i> <span>权限管理</span></a></li>
            <li><a href="{{ url('admin/role') }}"><i class="fa fa-link"></i> <span>role管理</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>