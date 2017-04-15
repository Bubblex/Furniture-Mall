@extends('master.mall')

@section('header')

<div class="header">
      <div class="container">
         <div class="header-top">
      		 <div class="logo">
				<a href="index.html"><h6>Online Furnish</h6><h2>Luxury</h2></a>
			 </div>
		   <div class="header_right">
			 <ul class="social">
				<li><a href=""> <i class="fb"> </i> </a></li>
				<li><a href=""><i class="tw"> </i> </a></li>
				<li><a href=""><i class="utube"> </i> </a></li>
				<li><a href=""><i class="pin"> </i> </a></li>
				<li><a href=""><i class="instagram"> </i> </a></li>
			 </ul>
		    <div class="lang_list">
			  <select tabindex="4" class="dropdown">
				<option value="" class="label" value="">En</option>
				<option value="1">English</option>
				<option value="2">French</option>
				<option value="3">German</option>
			  </select>
   			</div>
			<div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
		 </div>
		 <div class="banner_wrap">
			<div class="bannertop_box">
   		 		<ul class="login">
   		 			<li class="login_text"><a href="login.html">Login</a></li>
   		 			<li class="wish"><a href="checkout.html">Wish List</a></li>
   		 			<div class='clearfix'></div>
   		 		</ul>
   		 		<div class="cart_bg">
	   		 	  <ul class="cart">
	   		 		 <a href="checkout.html">
					    <h4><i class="cart_icon"> </i><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><div class="clearfix"> </div></h4>
					 </a>
				     <h5 class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></h5>
				     <div class="clearfix"> </div>
                  </ul>
	   		 	</div>
			  	<ul class="quick_access">
   		 			<li class="view_cart"><a href="checkout.html">View Cart</a></li>
   		 			<li class="check"><a href="checkout.html">Checkout</a></li>
   		 			<div class='clearfix'></div>
   		 		</ul>
   		 		<div class="search">
	  			   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
				   <input type="submit" value="">
	  			</div>
	  			<div class="welcome_box">
	  				<h3>Welcome to windsur</h3>
	  				<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
	  			</div>
   		 	</div>
   		 	<div class="banner_right">
   		 		<h1>Lorem Ipsum simply <br>dummy text</h1>
   		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
   		 		<a href="#" class="banner_btn">Buy Now</a>
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
				   	  	<h3 class="menu_head">Menu</h3>
				   	     <ul class="nav">
					   	  	<li><a href="about.html">About</a></li>
					   	  	<li><a href="about.html">Living Room</a></li>
					   	  	<li><a href="about.html">Office Furniture</a></li>
					   	  	<li><a href="about.html">Bean Bags</a></li>
					   	  	<li><a href="about.html">Tables</a></li>
					   	  	<li><a href="about.html">Sofas</a></li>
					   	  	<li><a href="about.html">Wardrobes</a></li>
					   	  	<li><a href="about.html">Beds</a></li>
					   	  	<li><a href="typo.html">Typo</a></li>
					   	  	<li><a href="about.html">Chairs</a></li>
					   	  	<li><a href="about.html">Kids Beds</a></li>
					   	 </ul>
			   	    </div>
			   	    <div class="side_banner">
					   <div class="banner_img"><img src="/resource/images/pic9.jpg" class="img-responsive" alt=""/></div>
					   <div class="banner_holder">
						  <h3>Now <br> is <br> Open!</h3>
					   </div>
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
						</ul>
						<a href="#" class="link1">View all tags</a>
				    </div>
				     <div class="tags">
				      	<h4 class="tag_head">Articles Experts</h4>
				      	 <ul class="article_links">
							<li><a href="#">Eleifend option congue nihil</a></li>
							<li><a href="#">Investigationes demonst</a></li>
							<li><a href="#">Qui sequitur mutationem</a></li>
							<li><a href="#">videntur parum clar sollemnes</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
							<li><a href="#">commodo consequat. Duis autem</a></li>
							<li><a href="#">Investigationes demonst</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
							<li><a href="#">Qui sequitur mutationem</a></li>
							<li><a href="#">videntur parum clar sollemnes</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
						  </ul>
						 <a href="#" class="link1">View all</a>
				      </div>
				</div>
			   <div class="col-md-9">
				<h3 class="m_1">New Products</h3>
				 <div class="content_grid">
				   <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic1.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								 <div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$2300.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic2.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$1500.00</span>
								   <div class="clearfix"></div>
							     </div>
							</div>
						</div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1">
				  	      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic3.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$2000.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				   </div>
				   <div class="clearfix"></div>
			  </div>
			  <div class="content_grid">
				  <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic4.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$1700.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
				  	      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic5.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$800.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1">
				  	      <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic6.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$199.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				       </div>
				  <div class="clearfix"></div>
			   </div>
			   <h3 class="m_2">Top Products</h3>
			   <div class="content_grid">
			   		<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic7.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
							    <div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$4500.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
				  	     <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic8.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
							    <div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$1050.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1">
				  	  <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic13.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								 <div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$2000.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="clearfix"></div>
			    </div>
			    <h3 class="m_2">Sale Products</h3>
			   <div class="content_grid">
			   		<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic10.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$99.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
				  	   <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic11.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$60.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1">
				  	    <a href="single.html">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="/resource/images/pic12.jpg" class="img-responsive" alt=""/>
								<a href="" class="button item_add item_1"> </a>
								<div class="product_container">
								   <div class="cart-left">
									 <p class="title">Lorem Ipsum 2015</p>
								   </div>
								   <span class="amount item_price">$900.00</span>
								   <div class="clearfix"></div>
							     </div>
							  </div>
		                    </div>
		                 </a>
				   </div>
				   <div class="clearfix"></div>
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