@extends('master.mall')

@section('vendor-style')
  @parent
  <link href="/resource/css/magnific-popup.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/resource/css/flexslider.css" type="text/css" media="screen" />
@endsection

@section('vendor-script')
  @parent
  <script src="/resource/js/simpleCart.min.js"> </script>
  <script src="/resource/js/jquery.easydropdown.js"></script>
  <script src="/resource/js/jquery.magnific-popup.js" type="text/javascript"></script>
  <script src="/resource/js/easyResponsiveTabs.js" type="text/javascript"></script>
  <script defer src="/resource/js/jquery.flexslider.js"></script>
@endsection

@section('page-script')
	@parent
  <script type="text/javascript">
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
      });
    });
    $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });
		});
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
  </script>
@endsection

@section('main')
<div class="main">
	<div class="content_box">
		<div class="container">
			<div class="row">
				
				<div class="col-md-3">
					<div class="menu_box">
						<h3 class="menu_head">为您推荐</h3>
						<ul class="nav">
							@foreach ($recommendGoods as $item)
								<li><a href="/goods/single?id={{ $item->id }}">{{ $item->name }}</a></li>
							@endforeach
						</ul>
					</div>
				</div>


			  <div class="col-md-9">
					<!--begin 面包屑-->
			    <div class="dreamcrub">
						<ul class="breadcrumbs">
							<li class="home">
								<a href="/" title="Go to Home Page">主页</a>&nbsp;
								<span>&gt;</span>
							</li>
							<li class="home">
								<a href="/goods/list" title="Go to Home Page">{{ $goods->type->name }}</a>&nbsp;
								<span>&gt;</span>
							</li>
							<li class="home">&nbsp;
								{{ $goods->name }}
							</li>
						</ul>
						<ul class="previous">
							<li><a href="javascript:history.go(-1)">返回上一页</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<!--end 面包屑-->
					
					<!--begin 商品详情-->
					<div class="singel_right">
						<div class="labout span_1_of_a1">
							<div class="flexslider">
								<ul class="slides">
									@foreach ($goods->images as $item)
										<li data-thumb="{{ $item->url }}">
											<img src="{{ $item->url }}" alt="{{ $item->name }}" />
										</li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="cont1 span_2_of_a1 simpleCart_shelfItem">
							<h1>{{ $goods->name }}</h1>
							<ul class="rating">
								<div class="clearfix"></div>
							</ul>
							<div class="price_single">
							  <span class="reducedfrom">￥{{ $goods->price }}</span>
								<span class="amount item_price actual">￥{{ $goods->discount_price }}</span><a href="#">优惠价</a>
							</div>
							<h3 class="quick">产品简介</h3>
							<p class="quick_desc">{{ $goods->summary }}</p>
			   		 	<ul class="size goods-norm">
								<h3>产品规格</h3>
								@foreach ($goods->norms as $item)
									<li data-norm='{{ $item->name }}'><a href="javascript:">{{ $item->name }}</a></li>
								@endforeach
							</ul>
							<ul class="product-qty">
								<span>数量:</span>
								<input class="goods-num" placeholder='请输入购买数量'/>
							</ul>
							<div class="btn_form button item_add item_1">
				   		<form>
							<input type="submit" class="add-cart" data-id="{{ $goods->id }}" value="加入购物车" title="">
				  		</form>
						</div>
					</div>
					<div class="clearfix"></div>
					<!--end 商品详情-->
					
				</div>


				<div class="sap_tabs">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>产品简介</span></li>
							{{-- <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>产品简介</span></li>
							<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>产品简介</span></li> --}}
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="facts">
									<ul class="tab_list">
										<li>
											{!! $goods->detail !!}
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>


				<h3 class="like">猜您喜欢</h3>
				<ul id="flexiselDemo3">
					<li><img src="/resource/images/pic11.jpg" class="img-responsive" /><div class="grid-flex"><a href="/goods/single">家具名称</a><p>RMB 850</p></div></li>
					<li><img src="/resource/images/pic10.jpg" class="img-responsive" /><div class="grid-flex"><a href="/goods/single">家具名称</a><p>RMB 1050</p></div></li>
					<li><img src="/resource/images/pic4.jpg" class="img-responsive" /><div class="grid-flex"><a href="/goods/single">家具名称</a><p>RMB 990</p></div></li>
					<li><img src="/resource/images/pic8.jpg" class="img-responsive" /><div class="grid-flex"><a href="/goods/single">家具名称</a><p>RMB 850</p></div></li>
					<li><img src="/resource/images/pic7.jpg" class="img-responsive" /><div class="grid-flex"><a href="/goods/single">家具名称</a><p>RMB 870</p></div></li>
				</ul>
				<script type="text/javascript">
					$(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
							responsiveBreakpoints: {
								portrait: {
									changePoint:480,
									visibleItems: 1
								},
								landscape: {
									changePoint:640,
									visibleItems: 2
								},
								tablet: {
									changePoint:768,
									visibleItems: 3
								}
							}
						});
					});
				</script>
				<script type="text/javascript" src="/resource/js/jquery.flexisel.js"></script>
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