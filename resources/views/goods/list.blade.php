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
			   	    {{-- <div class="category">
			   	    	<h3 class="menu_head">Category Options</h3>
			   	    	<ul class="category_nav">
					   	  	<li><a href="#">Dining & Serving</a></li>
					   	  	<li><a href="#">Storage</a></li>
					   	  	<li><a href="#">Wall Decors</a></li>
					   	  	<li><a href="#">Bed & living</a></li>
					   	  	<li><a href="#">Office Use</a></li>
					   	</ul>
			   	    </div>
			   	    <div class="category">
			   	    	<h3 class="menu_head">Brand Options</h3>
			   	    	<ul class="category_nav">
					   	  	<li><a href="#">Century</a></li>
					   	  	<li><a href="#">Henredon</a></li>
					   	  	<li><a href="#">Marge Carson</a></li>
					   	  	<li><a href="#">Schnadig</a></li>
					   	  	<li><a href="#">Hillsdale</a></li>
					   	  	<li><a href="#">Emerald Home</a></li>
					   	  	<li><a href="#">Broyhill</a></li>
					   	  	<li><a href="#">Hillsdale</a></li>
					   	</ul>
			   	    </div>
			   	     <div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Office</a></li>
							<li><a href="#">Chairs</a></li>
							<li><a href="#">Wood</a></li>
							<li><a href="#">Metal</a></li>
							<li><a href="#">Sizes</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Wardrobes</a></li>
							<li><a href="#">Latest</a></li>
							<li><a href="#">Kitchen</a></li>
							<li><a href="#">Tables</a></li>
							<li><a href="#">Modern</a></li>
							<li><a href="#">Colors</a></li>
							<li><a href="#">Shelves</a></li>
							<li><a href="#">Stools</a></li>
							<li><a href="#">Pouffes</a></li>
					        <li><a href="#">Women</a></li>
							<li><a href="#">Bedroom</a></li>
						</ul> --}}
						{{-- <a href="#" class="link1">View all tags</a>
				     </div>
				     <div class="side_banner">
					   <div class="banner_img"><img src="/resource/images/pic9.jpg" class="img-responsive" alt=""/></div>
					   <div class="banner_holder">
						  <h3>Now <br> is <br> Open!</h3>
					   </div> --}}
				     {{-- </div> --}}
			  </div>
			  <div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        About&nbsp;
                        <span>&gt;</span>&nbsp;
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="mens-toolbar">
                 <div class="sort">
               	   <div class="sort-by">
		            <label>Sort By</label>
		            <select>
		                            <option value="">
		                    Position                </option>
		                            <option value="">
		                    Name                </option>
		                            <option value="">
		                    Price                </option>
		            </select>
		            <a href=""><img src="/resource/images/arrow2.gif" alt="" class="v-middle"></a>
                   </div>
    		     </div>
    	         <ul class="women_pagenation dc_paginationA dc_paginationA06">
			       <li><a href="#" class="previous">Page:</a></li>
			       <li class="active"><a href="#">1</a></li>
			       <li><a href="#">2</a></li>
		  	     </ul>
                <div class="clearfix"></div>
		        </div>
				<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
					</div>
					<div class="pages">
        	 <div class="limiter visible-desktop">
               <label>Show</label>
                  <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                  </select> per page
               </div>
       	   </div>
					<div class="clearfix"></div>
					<ul>
					  <li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
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
							<a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
							 <div class="inner_content clearfix">
								<div class="product_image">
									<img src="/resource/images/pic11.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">商品名称</p>
									   </div>
									   <div class="price">￥99.00</div>
									   <div class="clearfix"></div>
								     </div>
								  </div>
			                     </div>
		                    </a>
							<div class="cbp-vm-details">
								商品简介商品简介商品简介商品简介商品简介商品简介商品简介商品简介
							</div>
							<a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
							  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="/resource/images/pic10.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">商品名称</p>
									   </div>
									   <div class="price">￥99.00</div>
									   <div class="clearfix"></div>
								     </div>
								  </div>
			                     </div>
		                    </a>
							<div class="cbp-vm-details">
								商品简介商品简介商品简介商品简介商品简介商品简介商品简介商品简介
							</div>
							<a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
							   <div class="inner_content clearfix">
								<div class="product_image">
									<img src="/resource/images/pic4.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">商品名称</p>
									   </div>
									   <div class="price">￥99.00</div>
									   <div class="clearfix"></div>
								     </div>
								  </div>
			                   </div>
							</a>
							<div class="cbp-vm-details">
								商品简介商品简介商品简介商品简介商品简介商品简介商品简介商品简介
							</div>
							<a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
							  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="/resource/images/pic8.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">商品名称</p>
									   </div>
									   <div class="price">￥99.00</div>
									   <div class="clearfix"></div>
								     </div>
								  </div>
			                     </div>
							</a>
							<div class="cbp-vm-details">
								商品简介商品简介商品简介商品简介商品简介商品简介商品简介商品简介
							</div>
							<a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
								<div class="inner_content clearfix">
								<div class="product_image">
									<img src="/resource/images/pic7.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">商品名称</p>
									   </div>
									   <div class="price">￥99.00</div>
									   <div class="clearfix"></div>
								     </div>
								  </div>
			                     </div>
		                    </a>
							<div class="cbp-vm-details">
								商品简介商品简介商品简介商品简介商品简介商品简介商品简介商品简介
							</div>
							<a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
								<div class="inner_content clearfix">
								<div class="product_image">
									<img src="/resource/images/pic6.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">商品名称</p>
									   </div>
									   <div class="price">￥99.00</div>
									   <div class="clearfix"></div>
								     </div>
								  </div>
			                     </div>
							</a>
							<div class="cbp-vm-details">
								商品简介商品简介商品简介商品简介商品简介商品简介商品简介商品简介
							</div>
							<a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
								<div class="inner_content clearfix">
								<div class="product_image">
									<img src="/resource/images/pic5.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">商品名称</p>
									   </div>
									   <div class="price">￥99.00</div>
									   <div class="clearfix"></div>
								     </div>
								  </div>
			                    </div>
							</a>
							<div class="cbp-vm-details">
								商品简介商品简介商品简介商品简介商品简介商品简介商品简介商品简介
							</div>
							<a class="cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
						</li>
						<li class="simpleCart_shelfItem">
							<a class="cbp-vm-image" href="single.html">
								<div class="inner_content clearfix">
								<div class="product_image">
									<img src="/resource/images/pic4.jpg" class="img-responsive" alt=""/>
									<div class="product_container">
									   <div class="cart-left">
										 <p class="title">商品名称</p>
									   </div>
									   <div class="price">￥99.00</div>
									   <div class="clearfix"></div>
								     </div>
								  </div>
			                    </div>
							</a>
							<div class="cbp-vm-details">
								商品简介商品简介商品简介商品简介商品简介商品简介商品简介商品简介
							</div>
							<a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
						</li>
					</ul>
				</div>
				<script src=/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src=/classie.js" type="text/javascript"></script>
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
	    <div class="container">
	      <div class="instagram_top">
	      	<div class="instagram text-center">
				<h3>Our Collections</h3>
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
					<h4>A Sample Photo Stream</h4>
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
	    </div>
@endsection