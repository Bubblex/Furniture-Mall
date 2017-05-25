@extends('master.mall')

@section('main')
<div class="main">
	<div class="container">
		<div class="check_box">
			<div class="col-md-9 cart-items">
				<h1>我的购物车(<span class="cart-count">{{ count($carts) }}</span>)</h1>
				<script>
					$(document).ready(function(c) {
						$('.close2').on('click', function(c) {
							var $this = $(this)

							$.ajax({
								url: '/user/delete/cart',
								type: 'post',
								data: {
									id: $this.attr('data-id')
								},
								success: function(data) {
									alert(data.message)

									if (data.status === 1) {
										window.location.reload()
									}
								}
							})
						});

						$('.pay-button').on('click', function() {
							$.ajax({
								url: '/user/pay',
								type: 'post',
								success: function(data) {
									alert(data.message)

									if (data.status === 1) {
										window.location.href = '/user/order'
									}
								}
							})
						})
					});
				</script>
				<!--购物车内一条数据-->
				@foreach ($carts as $item)
					<div class="cart-header2">
						<div data-id="{{ $item->id }}" class="close2"></div>
						<div class="cart-sec simpleCart_shelfItem">
							<div class="cart-item cyc">
								<img src="{{ $item->goods->images[0]->url }}" class="img-responsive" alt="">
							</div>
							<div class="cart-item-info">
								<h3>
									<a href="#">{{ $item->goods->name }}</a>
									<span>家具编号: {{ $item->goods->id }}</span>
								</h3>
								<ul class="qty">
									<li><p>规格 : {{ $item->norm }}</p></li>
									<li><p>数量 : {{ $item->num }}</p></li>
								</ul>
								<div class="delivery">
									<p>价格 : ￥{{ $item->goods->price }}</p>
									<p>折扣 : ￥{{ $item->goods->discount_price }}</p>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				@endforeach
			</div>
			<!--右侧价格结算-->
			<div class="col-md-3 cart-total">
				<a class="continue" href="/">再逛逛</a>
				<div class="price-details">
					<h3>价格清单</h3>
					<span>原价共计</span>
					<span class="total1">{{ $price }}</span>
					<span>件数</span>
					<span class="total1">{{ $carts->sum('num') }}</span>
					<span>优惠</span>
					<span class="total1">{{ $price - $discount }}</span>
					<div class="clearfix"></div>
				</div>
				<ul class="total_price">
					<li class="last_price"> <h4>折扣后共计</h4></li>
					<li class="last_price"><span>{{ $discount }}</span></li>
					<div class="clearfix"> </div>
				</ul>
				<div class="clearfix"></div>
				<a class="order pay-button" href="#">支付</a>
				<!--<div class="total-item">
					<h3>OPTIONS</h3>
					<h4>COUPONS</h4>
					<a class="cpns" href="#">Apply Coupons</a>
					<p><a href="login.html">Log In</a> to use accounts - linked coupons</p>
				</div>-->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--品牌展示-->
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

<!--新品-->
<div class="container">
	<div class="instagram_top">
		<div class="instagram text-center">
			<h3>新品</h3>
		</div>
		<ul class="instagram_grid">
			<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="/resource/images/i1.jpg" class="img-responsive"alt=""/></a></li>
			<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="/resource/images/i2.jpg" class="img-responsive" alt=""/></a></li>
			<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="/resource/images/i3.jpg" class="img-responsive" alt=""/></a></li>
			<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="/resource/images/i4.jpg" class="img-responsive" alt=""/></a></li>
			<li><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="/resource/images/i5.jpg" class="img-responsive" alt=""/></a></li>
			<li class="last_instagram"><a class="popup-with-zoom-anim" href="#small-dialog1"><img src="/resource/images/i6.jpg" class="img-responsive" alt=""/></a></li>
			<div class="clearfix"></div>
			<div id="small-dialog1" class="mfp-hide">
				<div class="pop_up">
					<h4>新品名称</h4>
					<img src="/resource/images/i_zoom.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
		</ul>
	</div>
	<ul class="footer_social">
		<li><a href="#"><i class="tw"> </i> </a></li>
		<li><a href="#"> <i class="fb"> </i> </a></li>
		<li><a href="#"><i class="pin"> </i> </a></li>
		<div class="clearfix"></div>
	</ul>
</div>
@endsection