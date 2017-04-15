<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ $admin->avatar }}" class="img-circle" alt="用户头像">
      </div>
      <div class="pull-left info">
        <p>{{ $admin->nickname }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">后台管理系统</li>
      <li>
        <a href="/admin/info">
          <i class="fa fa-link"></i>
          <span>个人信息</span>
        </a>
      </li>
      <li>
        <a href="/admin/user">
          <i class="fa fa-link"></i>
          用户管理
        </a>
      </li>
      <li>
        <a href="/admin/goods">
          <i class="fa fa-link"></i>
          商品管理
        </a>
      </li>
    </ul>
  </section>
</aside>