@extends('master.mall')

@section('main')
  <div class="main">
    <div class="content_box">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="menu_box">
              <h3 class="menu_head">近期上新</h3>
              <ul class="nav">
                <li><a href="about.html">现代简约沙发</a></li>
                <li><a href="about.html">现代简约沙发</a></li>
                <li><a href="about.html">现代简约沙发</a></li>
                <li><a href="about.html">现代简约沙发</a></li>
                <li><a href="about.html">现代简约沙发</a></li>
                <li><a href="about.html">现代简约沙发</a></li>
                <li><a href="about.html">现代简约沙发</a></li>
                <li><a href="about.html">现代简约沙发</a></li>
                <li><a href="typo.html">现代简约沙发</a></li>
                <li><a href="about.html">现代简约沙发</a></li>
                <li><a href="about.html">现代简约沙发</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9">
            <div class="dreamcrub">
              <ul class="breadcrumbs">
                <li class="home">
                  <a href="index.html" title="Go to Home Page">主页</a>&nbsp;
                  <span>&gt;</span>
                </li>
                <!--<li class="home">&nbsp;
                    &nbsp;Account
                    <span>&gt;</span>&nbsp;
                </li>-->
                <li class="women">登录</li>
              </ul>
              <ul class="previous">
                <li><a href="index.html">返回上一页</a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="account_grid">
              <div class="col-md-6 login-left">
                <h3>注册协议</h3>
                <p>注册协议内容注册协议内容注册协议内容注册协议内容注册协议内容注册协议内容注册协议内容注册协议内容</p>
                <a class="acount-btn" href="register.html">去注册</a>
              </div>
              <div class="col-md-6 login-right">
                <h3>登录</h3>
                <p>If you have an account with us, please log in.</p>
                <form>
                  <div>
                    <span>账号<label>*</label></span>
                    <input type="text">
                  </div>
                  <div>
                    <span>密码<label>*</label></span>
                    <input type="text">
                  </div>
                  <a class="forgot" href="#">忘记密码？  </a>
                  <input type="submit" value="登录">
                </form>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection