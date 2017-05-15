@extends('master.mall')

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
		  	  <form>
				 <div class="register-top-grid">
					<h3>填写注册信息</h3>
					 <div>
						<span>账户名<label>*</label></span>
						<input type="text">
					 </div>
					 <div>
						<span>手机号<label>*</label></span>
						<input type="text">
					 </div>
					 <div>
						 <span>邮箱<label>*</label></span>
						 <input type="text">
					 </div>
					 <div>
						 <span>地址</span>
						 <input type="text">
					 </div>
					 <div class="clearfix"> </div>
					   {{-- <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a> --}}
					 </div>
				     <div class="register-bottom-grid">
						    {{-- <h3>LOGIN INFORMATION</h3> --}}
							 <div>
								<span>密码<label>*</label></span>
								<input type="text">
							 </div>
							 <div>
								<span>确认密码<label>*</label></span>
								<input type="text">
							 </div>
					 </div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
					<a href="javascript:">注册</a>
					<a href="/account/login">已有账号去登录</a>
					<div class="clearfix"></div>
				</div>
		   </div>
    </div>
  </div>
@endsection