<ul class="sidebar-menu">
    <li class="header">管理菜单</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>常用菜单</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="/admin"><i  class="fa fa-circle-o"></i>后台首页</a></li>
            <li><a href="/" target="_blank"><i  class="fa fa-circle-o"></i>网站首页</a></li>
            <li><a href="{{ url('admin/tool') }}/clearCache"><i  class="fa fa-circle-o"></i>清空缓存</a></li>

        </ul>
    </li>


    <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>全局</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li > <a href="{{ url('admin/setting/website') }}" ><i class="fa fa-circle-o"></i>站点设置</a></li>
            <li> <a href="{{ url('admin/setting/email') }}" ><i class="fa fa-circle-o"></i>邮箱配置</a></li>
            <li> <a href="{{ url('admin/setting/time') }}" ><i class="fa fa-circle-o"></i>时间设置</a></li>

        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>系统权限</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ url('admin/user') }}" ><i class="fa fa-circle-o"></i>会员管理</a></li>
            <li> <a href="{{ url('admin/admins') }}" ><i class="fa fa-circle-o"></i>管理员列表</a></li>
            <li> <a href="{{ url('admin/register') }}" ><i class="fa fa-circle-o"></i>添加管理</a></li>
            <li> <a href="{{ url('admin/permission') }}" ><i class="fa fa-circle-o"></i>权限管理</a></li>
            <li> <a href="{{ url('admin/role') }}" ><i class="fa fa-circle-o"></i>role管理</a></li>
            <li> <a href="{{ url('admin/modifypassword') }}" ><i class="fa fa-circle-o"></i>修改密码</a></li>


        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>文章管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li> <a href="{{ url('admin/article') }}" ><i class="fa fa-circle-o"></i>文章管理</a></li>
            <li> <a href="{{ url('admin/comment') }}"  ><i class="fa fa-circle-o"></i>评论管理</a></li>
            <li><a href="{{ url('admin/category') }}" ><i class="fa fa-circle-o"></i>分类管理</a></li>

        </ul>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>第三方</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li> <a href="{{ url('admin/setting/oauth') }}" ><i class="fa fa-circle-o"></i>一键登录</a></li>


        </ul>
    </li>

</ul>