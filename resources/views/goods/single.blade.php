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
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="typo.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	  	<li><a href="about.html">沙发巴拉巴拉巴拉</a></li>
					   	 </ul>
			   	    </div>
			   	    <div class="side_banner">
					   <div class="banner_img"><img src="/resource/images/pic9.jpg" class="img-responsive" alt=""/></div>
					   <div class="banner_holder">
						  <h3>Now <br> is <br> Open!</h3>
					   </div>
				    </div>
				</div>
			  <div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">主页</a>&nbsp;
                       <span>&gt;</span>
                    </li>
					<li class="home">
                       <a href="about.html" title="Go to Home Page">产品所属分类</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                       家具名称
                        <span>&gt;</span>&nbsp;
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="about.html">返回上一页</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="singel_right">
			     <div class="labout span_1_of_a1">
				   <div class="flexslider">
					 <ul class="slides">
						<li data-thumb="/resource/images/s1.jpg">
							<img src="/resource/images/s1.jpg" />
						</li>
						<li data-thumb="/resource/images/s2.jpg">
							<img src="/resource/images/s2.jpg" />
						</li>
						<li data-thumb="/resource/images/s3.jpg">
							<img src="/resource/images/s3.jpg" />
						</li>
						<li data-thumb="/resource/images/s4.jpg">
							<img src="/resource/images/s4.jpg" />
						</li>
					 </ul>
				  </div>
			  </div>
			  <div class="cont1 span_2_of_a1 simpleCart_shelfItem">
				<h1>家具名称</h1>
				<ul class="rating">
				   <!--<li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>-->
				   <!--<li><a href="#">1 Review(s) Add Review</a></li>-->
				   <div class="clearfix"></div>
			    </ul>
			    <div class="price_single">
				  <span class="reducedfrom">RMB140.00</span>
				  <span class="amount item_price actual">RMB120.00</span><a href="#">优惠价</a>
				</div>
				<h3 class="quick">产品简介</h3>
				<p class="quick_desc"> 好好好好好好好好好好好好好好好好好好好好好好好好好好好</p>
			    <ul class="size">
					<h3>产品规格</h3>
					<li><a href="#">6 x 7</a></li>
					<li><a href="#">6.5 x 7</a></li>
					<li><a href="#">7 x 7</a></li>
					<li><a href="#">7.7 x 9</a></li>
					<li><a href="#">11 x 8</a></li>
					<li><a href="#">12 x 7</a></li>
				</ul>
				<ul class="product-qty">
				   <span>数量:</span>
				   <select>
					 <option>1</option>
					 <option>2</option>
					 <option>3</option>
					 <option>4</option>
					 <option>5</option>
					 <option>6</option>
				   </select>
			    </ul>
			    <div class="btn_form button item_add item_1">
				   <form>
					 <input type="submit" value="加入购物车" title="">
				  </form>
				</div>
			</div>
			<div class="clearfix"></div>
		   </div>
		   <div class="sap_tabs">
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>产品简介</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>产品简介</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>产品简介</span></li>
							  <div class="clear"></div>
						  </ul>
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <ul class="tab_list">
									  	<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
									  	<li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>
							        </div>
							     </div>
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <ul class="tab_list">
									    <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>
							        </div>
							     </div>
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_list">
									  	<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
									  	<li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores leg</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>
							     </div>
							 </div>
					      </div>
					 </div>
					 <h3 class="like">猜您喜欢</h3>
				     <ul id="flexiselDemo3">
						<li><img src="/resource/images/pic11.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Syenergy 2mm</a><p>Rs 850</p></div></li>
						<li><img src="/resource/images/pic10.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Surf Yoke</a><p>Rs 1050</p></div></li>
						<li><img src="/resource/images/pic4.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Salty Daiz</a><p>Rs 990</p></div></li>
						<li><img src="/resource/images/pic8.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Cheeky Zane</a><p>Rs 850</p></div></li>
						<li><img src="/resource/images/pic7.jpg" class="img-responsive" /><div class="grid-flex"><a href="#">Synergy</a><p>Rs 870</p></div></li>
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