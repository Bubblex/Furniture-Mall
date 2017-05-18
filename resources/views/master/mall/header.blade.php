<div class="header">
	<div class="container">
		<div class="header-top">
			<div class="logo">
				<a href="/"><h6>Furniture-Mall</h6><h2>家具商城</h2></a>
			</div>
			<div class="header_right">
				@if(session('user'))
					<div class="lang_list">
						<a href="/user/order" style='color: #fff'>个人中心</a> |
						<a href="/account/logout" style='color: #fff'>退出登录</a>
					</div>
				@endif
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="about_box">
			@if (!session('user'))
				<ul class="login">
					<li class="login_text"><a href="/account/login">登录</a></li>
					<li class="wish"><a href="/account/register">注册</a></li>
					<div class='clearfix'></div>
				</ul>
			@endif
			<div class="cart_bg">
				<ul class="cart">
					<a href="/user/shopping-cart">
						<h4><i class="cart_icon"> </i><div class="clearfix"> </div></h4>
					</a>
					<h5 class="empty">
						<a href="/user/shopping-cart" class="simpleCart_empty">查看购物车</a>
					</h5>
					<div class="clearfix"> </div>
				</ul>
			</div>
			
			<div class="search">
				<input type="text" placeholder="搜索" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="">
			</div>
		</div>
	</div>
</div>