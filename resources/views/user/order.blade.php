@extends('master.mall')

@section('main')
<div class="main">
	<div class="container">
		<div class="check_box">
			<div class="col-md-9 cart-items">
				<h1>我的订单(2)</h1>
				<script>
				$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
					});
				});
				</script>

				<!--购物车内一条数据-->
				<div class="cart-header">
					<div class="close1"> </div>
					<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<img src="/resource/images/pic1.jpg" class="img-responsive" alt="">
						</div>
						<div class="cart-item-info">
							<h3><a href="#">家具名称</a><span>家具编号: 3578</span></h3>
							<ul class="qty">
								<li><p>规格 : 5</p></li>
								<li><p>数量 : 1</p></li>
							</ul>
							<div class="delivery">
								<p>价格 : 10000</p>
								<p>折扣 : 100</p>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<script>
				$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
					});
				});
				</script>
				<!--购物车内一条数据-->
				<div class="cart-header2">
					<div class="close2"> </div>
					<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<img src="/resource/images/pic2.jpg" class="img-responsive" alt="">
						</div>
						<div class="cart-item-info">
							<h3><a href="#">家具名称</a><span>家具编号: 3578</span></h3>
							<ul class="qty">
								<li><p>规格 : 5</p></li>
								<li><p>数量 : 1</p></li>
							</ul>
							<div class="delivery">
								<p>价格 : 10000RMB</p>
								<p>折扣 : 100RMB</p>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<!--右侧价格结算-->
			<div class="col-md-3 cart-total">
				{{-- <a class="continue" href="#">再逛逛</a> --}}
				<div class="price-details">
					<h3>价格清单</h3>
					<span>原价共计</span>
					<span class="total1">6200.00</span>
					<span>件数</span>
					<span class="total1">3</span>
					<span>优惠</span>
					<span class="total1">150.00</span>
					<div class="clearfix"></div>
				</div>
				<ul class="total_price">
					<li class="last_price"> <h4>折扣后共计</h4></li>
					<li class="last_price"><span>6350.00</span></li>
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