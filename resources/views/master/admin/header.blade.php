<div class="top_nav">
    <div class="nav_menu">
    <nav>
        <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
        <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ session('admin')->username }}
            <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="/admin/change-password">修改密码</a></li>
            <li><a href="/admin/logout"><i class="fa fa-sign-out pull-right"></i>退出登录</a></li>
            </ul>
        </li>
        </ul>
    </nav>
    </div>
</div>