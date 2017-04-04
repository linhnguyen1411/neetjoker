<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="public/admin/avatar/{{Auth::user()->u_avatar}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">

                <p>{{Auth::user()->u_name}}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
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
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-edit"></i> <span>Slider</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="administrator/slider/list"><i class="glyphicon glyphicon-ok text-aqua"></i>List</a></li>
                    <li><a href="administrator/slider/insert"><i class="glyphicon glyphicon-plus text-aqua"></i>Insert</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-th-list"></i> <span>Categories Group</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="administrator/cate_group/list"><i class="glyphicon glyphicon-ok text-aqua"></i>List</a></li>
                    <li><a href="administrator/cate_group/insert"><i class="glyphicon glyphicon-plus text-aqua"></i>Insert</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-th-list"></i> <span>Categories</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="administrator/categories/list"><i class="glyphicon glyphicon-ok text-aqua"></i>List</a></li>
                    <li><a href="administrator/categories/insert"><i class="glyphicon glyphicon-plus text-aqua"></i>Insert</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-edit"></i> <span>Article</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="administrator/article/list"><i class="glyphicon glyphicon-ok text-aqua"></i>List</a></li>
                    <li><a href="administrator/article/insert"><i class="glyphicon glyphicon-plus text-aqua"></i>Insert</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-picture"></i> <span>Images</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="administrator/images/list"><i class="glyphicon glyphicon-ok text-aqua"></i>List</a></li>
                    <li><a href="administrator/images/insert"><i class="glyphicon glyphicon-plus text-aqua"></i>Insert</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-pencil"></i> <span>Comment</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="administrator/index.html"><i class="glyphicon glyphicon-ok text-aqua"></i>List</a></li>
                    <li><a href="administrator/index2.html"><i class="glyphicon glyphicon-plus text-aqua"></i>Insert</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i> <span>User</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="administrator/users/list"><i class="glyphicon glyphicon-ok text-aqua"></i>List</a></li>
                    <li><a href="administrator/users/insert"><i class="glyphicon glyphicon-plus text-aqua"></i>Insert</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-fire"></i> <span>Roles</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="administrator/roles/list"><i class="glyphicon glyphicon-ok text-aqua"></i>List</a></li>
                    <li><a href="administrator/roles/insert"><i class="glyphicon glyphicon-plus text-aqua"></i>Insert</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
