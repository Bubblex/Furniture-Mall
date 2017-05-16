@extends('master.mall')

@section('vendor-style')
  @parent
  <link href="/resource/css/magnific-popup.css" rel="stylesheet" type="text/css">
  <link href="/resource/css/component.css" rel='stylesheet' type='text/css' />
@endsection

@section('vendor-script')
  @parent
  <script src="/resource/js/simpleCart.min.js"> </script>
  <script src="/respirce/js/jquery.easydropdown.js"></script>
  <script src="/resource/js/jquery.magnific-popup.js" type="text/javascript"></script>
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
							<li><a href="/goods/list">起居室</a></li>
							<li><a href="/goods/list">桌子</a></li>
							<li><a href="/goods/list">沙发</a></li>
							<li><a href="/goods/list">床</a></li>
							<li><a href="/goods/list">椅子</a></li>
							<li><a href="/goods/list">婴儿床</a></li>
						</ul>
					</div>
			  </div>

			  <div class="col-md-9">
			   	<div class="mens-toolbar">
						<div class="sort">
							<div class="sort-by">
								<label>排序</label>
								<select>
									<option value="">销量</option>
									<option value="">价格升序</option>
									<option value="">价格降序</option>
								</select>
								<a href=""><img src="/resource/images/arrow2.gif" alt="" class="v-middle"></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
						<ul>

							{{-- BEGIN 一条商品 --}}
							<li class="simpleCart_shelfItem">
								<a class="cbp-vm-image" href="/goods/single">
									<div class="inner_content clearfix">
										<div class="product_image">
											<img src="/resource/images/pic12.jpg" class="img-responsive" alt=""/>
											<div class="product_container">
												<div class="cart-left">
												<p class="title">商品名称</p>
											</div>
											<div class="mount item_price price">￥99.00</div>
											<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</a>
								<div class="cbp-vm-details">
									商品简介商品简介商品简介商品简介商品简介商品简介商品简介商品简介
								</div>
								<a class="button item_add cbp-vm-icon cbp-vm-add" href="javascript:">加入购物车</a>
							</li>
							{{-- END 一条商品 --}}
						
						</ul>
					</div>
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