@extends('master.mall')

@section('vendor-style')
  @parent
  <link href="/resource/css/magnific-popup.css" rel="stylesheet" type="text/css">
  <link href="/resource/css/component.css" rel='stylesheet' type='text/css' />
@endsection

@section('vendor-script')
  @parent
  <script src="/resource/js/simpleCart.min.js"> </script>
  <script src="/resource/js/jquery.easydropdown.js"></script>
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
							@foreach ($goodsType as $type)
								<li class="{{ $id == $type->id ? 'active' : '' }}"><a href="/goods/list?id={{ $type->id }}">{{ $type->name }}</a></li>
							@endforeach
						</ul>
					</div>
			  </div>

			  <div class="col-md-9">
			   	<div class="mens-toolbar">
					<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid" style="margin-bottom: 60px;">
						<ul>
							{{-- BEGIN 一条商品 --}}
							@foreach ($goods as $item)
								<li class="simpleCart_shelfItem">
									<a class="cbp-vm-image" href="/goods/single?id={{ $item->id }}">
										<div class="inner_content clearfix">
											<div class="product_image">
												<img src="{{ $item->images[0]->url }}" class="img-responsive" alt=""/>
												<div class="product_container">
													<div class="cart-left">
													<p class="title">{{ $item->name }}</p>
												</div>
												<div class="mount item_price price">￥{{ $item->price }}</div>
												<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</a>
									<div class="cbp-vm-details">
										<p>销量：88</p>
									</div>
									<a class="button item_add cbp-vm-icon cbp-vm-add" href="javascript:">查看详情</a>
								</li>
							@endforeach
							{{-- END 一条商品 --}}
						</ul>
					</div>
					{!! $goods->appends(['id' => $id])->render() !!}
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