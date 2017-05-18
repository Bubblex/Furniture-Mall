@extends('master.mall')

@section('header')

<div class="header">

	<div class="container">
		<div class="header-top">

			<div class="logo">
				<a href="/"><h6>Furniture-Mall</h6><h2>家具商城</h2></a>
			</div>

			<div class="header_right">
				@if (session('user'))
					<div class="lang_list">
						<a href="/user/order" style='color: #fff'>个人中心</a> |
						<a href="/account/logout" style='color: #fff'>退出登录</a>
					</div>
				@endif
				<div class="clearfix"></div>
			</div>

			<div class="clearfix"></div>
		</div>

		<div class="banner_wrap">
			<div class="bannertop_box">
				@if (!session('user'))
					<ul class="login">
						<li class="login_text"><a href="/account/login">登录</a></li>
						<li class="wish"><a href="/account/register">注册</a></li>
						<div class='clearfix'></div>
					</ul>
				@endif
				<div class="cart_bg">
					<ul class="cart">
						<a href="checkout.html">
							<h4><i class="cart_icon"> </i><div class="clearfix"> </div></h4>
						</a>
						<h5 class="empty">
							<a href="/user/shopping-cart" class="simpleCart_empty">查看购物车</a>
						</h5>
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="search">
					<input type="text" value="搜索" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '搜索';}">
					<input type="submit" value="">
				</div>

				<div class="welcome_box">
					<h3>欢迎来到家具商城</h3>
					<p>在这里你可以购买真正放心的家具</p>
				</div>
			</div>

			<div class="banner_right">
				<h1>文本标题 文本标题<br>副标题</h1>
				<p>文本内容文本内容文本内容文本内容文本内容文本内容文本内容文本内容文本内容文本内容文本内容</p>
				<a href="/goods/single" class="banner_btn">立即购买</a>
			</div>
			<div class='clearfix'></div>

		</div>
	</div>
</div>
@endsection

@section('main')
<div class="main">
	<div class="content_box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="menu_box">
						<h3 class="menu_head">分类</h3>
						<ul class="nav">
							@foreach($goodsTypes as $type)
								<li><a href="/goods/list?id={{ $type->id }}">{{ $type->name }}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<h3 class="m_1">新品</h3>
				 	<div class="content_grid">

					{{-- BEGIN 一件商品 --}}
					@foreach ($newGoods as $goods)
						<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
							<a href="/goods/single?id={{ $goods->id }}">
								<div class="inner_content clearfix">
									<div class="product_image">
										<img src="/resource/images/pic2.jpg" class="img-responsive" alt=""/>
										{{-- <a href="javascript:" class="button item_add item_1"> </a> --}}
										<div class="product_container">
											<div class="cart-left">
												<p class="title">{{ $goods->name }}</p>
											</div>
											<span class="amount item_price">￥{{ $goods->price }}</span>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
					@endforeach
					<div class="clearfix"></div>
			  </div>


				<h3 class="m_2">最热</h3>
				<div class="content_grid">
					{{-- BEGIN 一件商品 --}}
					<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
							<a href="single.html">
								<div class="inner_content clearfix">
									<div class="product_image">
										<img src="/resource/images/pic1.jpg" class="img-responsive" alt=""/>
										<a href="javascript:" class="button item_add item_1"> </a>
										<div class="product_container">
								 		  <div class="cart-left">
									 			<p class="title">商品名称</p>
								   		</div>
											<span class="amount item_price">￥2300.00</span>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</a>
				    </div>
						{{-- END 一件商品 --}}
					<div class="clearfix"></div>
				</div>



				<h3 class="m_2">折扣</h3>
				<div class="content_grid">


					{{-- BEGIN 一件商品 --}}
					<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
						<a href="single.html">
							<div class="inner_content clearfix">
								<div class="product_image">
									<img src="/resource/images/pic1.jpg" class="img-responsive" alt=""/>
									<a href="javascript:" class="button item_add item_1"> </a>
									<div class="product_container">
										<div class="cart-left">
											<p class="title">商品名称</p>
										</div>
										<span class="amount item_price">￥2300.00</span>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</a>
					</div>
					{{-- END 一件商品 --}}


			  </div>
			</div>
		 </div>
		</div>


		<div class="container">
			<div class="brands">
				<ul class="brand_icons">
					<li><img src='/resource/images/icon1.png' class="img-responsive" alt=""/></li>
					<li><img src='/resource/images/icon2.png' class="img-responsive" alt=""/></li>
					<li><img src='/resource/images/icon3.png' class="img-responsive" alt=""/></li>
					<li><img src='/resource/images/icon4.png' class="img-responsive" alt=""/></li>
					<li class="last"><img src='/resource/images/icon5.png' class="img-responsive" alt=""/></li>
				</ul>
			</div>
		</div>

</div>
@endsection