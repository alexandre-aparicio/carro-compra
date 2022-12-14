@extends ('layouts.base')
@section('content')

<div class="container">
<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id="carousel-custom" class="carousel slide" data-ride="carousel">
						<div class="carousel-outer">
							<!-- me art lab slider -->
							<div class="carousel-inner ">
								<div class="item">
									<img src="images/shop/single-products/product-1.jpg" alt="" data-zoom-image="images/shop/single-products/product-1.jpg">
								</div>
								<div class="item">
									<img src="images/shop/single-products/product-2.jpg" alt="" data-zoom-image="images/shop/single-products/product-2.jpg">
								</div>
								
								<div class="item active">
									<img src="images/shop/single-products/product-3.jpg" alt="" data-zoom-image="images/shop/single-products/product-3.jpg">
								</div>
								<div class="item">
									<img src="images/shop/single-products/product-4.jpg" alt="" data-zoom-image="images/shop/single-products/product-4.jpg">
								</div>
								<div class="item">
									<img src="images/shop/single-products/product-5.jpg" alt="" data-zoom-image="images/shop/single-products/product-5.jpg">
								</div>
								<div class="item">
									<img src="images/shop/single-products/product-6.jpg" alt="" data-zoom-image="images/shop/single-products/product-6.jpg">
								</div>
								
							</div>
							
							<!-- sag sol -->
							<a class="left carousel-control" href="#carousel-custom" data-slide="prev">
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class="right carousel-control" href="#carousel-custom" data-slide="next">
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class="carousel-indicators mCustomScrollbar meartlab">
							<li data-target="#carousel-custom" data-slide-to="0" class="">
								<img src="images/shop/single-products/product-1.jpg" alt="">
							</li>
							<li data-target="#carousel-custom" data-slide-to="1" class="">
								<img src="images/shop/single-products/product-2.jpg" alt="">
							</li>
							<li data-target="#carousel-custom" data-slide-to="2" class="active">
								<img src="images/shop/single-products/product-3.jpg" alt="">
							</li>
							<li data-target="#carousel-custom" data-slide-to="3" class="">
								<img src="images/shop/single-products/product-4.jpg" alt="">
							</li>
							<li data-target="#carousel-custom" data-slide-to="4" class="">
								<img src="images/shop/single-products/product-5.jpg" alt="">
							</li>
							<li data-target="#carousel-custom" data-slide-to="5" class="">
								<img src="images/shop/single-products/product-6.jpg" alt="">
							</li>
							<li data-target="#carousel-custom" data-slide-to="6">
								<img src="images/shop/single-products/product-7.jpg" alt="">
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2>Eclipse Crossbody</h2>
					<p class="product-price">$300</p>
					
					<p class="product-description mt-20">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsum dicta quod, quia doloremque aut deserunt commodi quis. Totam a consequatur beatae nostrum, earum consequuntur? Eveniet consequatur ipsum dicta recusandae.
					</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, velit, sunt temporibus, nulla accusamus similique sapiente tempora, at atque cumque assumenda minus asperiores est esse sequi dolore magnam. Debitis, explicabo.</p>
					<div class="color-swatches">
						<span>color:</span>
						<ul>
							<li>
								<a href="#!" class="swatch-violet"></a>
							</li>
							<li>
								<a href="#!" class="swatch-black"></a>
							</li>
							<li>
								<a href="#!" class="swatch-cream"></a>
							</li>
						</ul>
					</div>
					<div class="product-size">
						<span>Size:</span>
						<select class="form-control">
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
						</select>
					</div>
					<div class="product-quantity">
						<span>Quantity:</span>
						<div class="product-quantity-slider">
							<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="product-quantity" type="text" value="0" name="product-quantity" class="form-control" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
						</div>
					</div>
					<div class="product-category">
						<span>Categories:</span>
						<ul>
							<li><a href="product-single.html">Products</a></li>
							<li><a href="product-single.html">Soap</a></li>
						</ul>
					</div>
					<a href="cart.html" class="btn btn-main mt-20">Add To Cart</a>
				</div>
			</div>
		</div>
	</div>	
		@endsection