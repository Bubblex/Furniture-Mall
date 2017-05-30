@extends('master.mall')

@section('main')
<div class="main">
	<div class="container">
		<div class="check_box">
			<div class="col-md-9 cart-items">
				<h1>购买记录({{ count($orders) }})</h1>
				<script>
					$(document).ready(function(c) {
						$('.close2').on('click', function(c) {
							var $this = $(this)

							$.ajax({
								url: '/user/delete/order',
								type: 'post',
								data: {
									id: $this.attr('data-id')
								},
								fjslfoijofweonfownjniv
								success: function(data) {
									alert(data.message)

									if (data.status === 1) {
										window.location.reload()
									}
								}
							})
						});
					});
				</script>
				<!--购物车内一条数据-->
				@foreach ($orders as $item)
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
				{{-- <a class="continue" href="#">再逛逛</a> --}}
				<div class="price-details">
					<h3>价格清单</h3>
					<span>原价共计</span>
					<span class="total1">{{ $price }}</span>
					<span>件数</span>
					<span class="total1">{{ $orders->sum('num') }}</span>
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
				<a class="order" href="#">再逛逛</a>
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
@endsection