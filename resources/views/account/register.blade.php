@extends('master.mall')

@section('page-script')
	<script>
		$(function() {
			$('.register-btn').on('click', function() {
				if (!$('[name="username"]').val()) {
					alert('请输入用户名')
					return
				}
				else if (!$('[name="telephone"]').val()) {
					alert('请输入手机号')
					return
				}
				else if (!/^1[0-9]{10}$/.test($('[name="telephone"]').val())) {
					alert('手机号格式不正确')
					return
				}
				else if (!$('[name="email"]').val()) {
					alert('请输入邮箱')
					return
				}
				else if (!$('[name="password"]').val()) {
					alert('请输入密码')
					return
				}
				else if (!$('[name="confirm_password"]').val()) {
					alert('请确认密码')
					return
				}
				else if ($('[name="password"]').val() !== $('[name="confirm_password"]').val()) {
					alert('两次密码不一致')
					return
				}

				$.ajax({
					url: '/account/register',
					type: 'POST',
					data: $('#register-form').serialize(),
					success: function(data) {
						alert(data.message);
						
						if (data.status === 1) {
							window.location.href = '/account/login'
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
	   <div class="container">
		  <div class="register">
				<form id="register-form">
				<div class="register-top-grid">
					<h3>填写注册信息</h3>
					 <div>
						<span>账户名<label>*</label></span>
						<input type="text" name="username">
					 </div>
					 <div>
						<span>手机号<label>*</label></span>
						<input type="text" name="telephone">
					 </div>
					 <div>
						 <span>邮箱<label>*</label></span>
						 <input type="text" name="email">
					 </div>
					 <div>
						 <span>地址<label>&nbsp;</label></span>
						 <input type="text" name="address">
					 </div>
					<div>
						<span>密码<label>*</label></span>
						<input type="password" name="password">
					</div>
					<div>
						<span>确认密码<label>*</label></span>
						<input type="password" name="confirm_password">
					</div>
					<div class="clearfix"></div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
					<a href="javascript:" class="register-btn">注册</a>
					<a href="/account/login">已有账号去登录</a>
					<div class="clearfix"></div>
				</div>
		   </div>
    </div>
  </div>
@endsection