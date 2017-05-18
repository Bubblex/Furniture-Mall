@extends('master.mall')

@section('page-script')
	<script>
		$(function() {
      $('#login-form').on('submit', function(e) {
        e.preventDefault()

        if (!$('[name="username"]').val()) {
          alert('请输入用户名')
          return
        }
        else if (!$('[name="password"]').val()) {
          alert('请输入密码')
          return
        }

        $.ajax({
          url: '/account/login',
          type: 'POST',
					data: $('#login-form').serialize(),
          success: function(data) {
            alert(data.message)

            if (data.status === 1) {
              window.location.href = '/'
            }
          }
        })
      })
    })
  </script>
@endsection

@section('header')
<div class="header">
  <div class="container">
    <div class="header-top">
      <div class="logo">
      <a href="/"><h6>Furniture-Mall</h6><h2>家具商城</h2></a>
      </div>
    <div class="clearfix"></div>
    </div>
  </div>
</div>
@endsection

@section('main')
  <div class="main">
    <div class="content_box">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="account_grid">
              <div class="col-md-6 login-left">
                <h3>注册协议</h3>
                <p>注册协议内容注册协议内容注册协议内容注册协议内容注册协议内容注册协议内容注册协议内容注册协议内容</p>
                <a class="acount-btn" href="/account/register">去注册</a>
              </div>
              <div class="col-md-6 login-right">
                <h3>登录</h3>
                <p>如果你已有账户，请登录</p>
                <form id="login-form">
                  <div>
                    <span>账号<label>*</label></span>
                    <input type="text" name="username">
                  </div>
                  <div>
                    <span>密码<label>*</label></span>
                    <input type="password" name="password">
                  </div>
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