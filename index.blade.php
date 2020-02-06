<?php  
	// echo "<pre>";
	// print_r($books);
	// print_r($cats);
	// print_r($gens);
	// print_r($langs);
	// print_r($videos);
	// exit;
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="{{ asset('public/favicon.ico')}}">
	<title>Hippo - Digital Library System</title>

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="{{ asset('public/assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{ asset('public/assets/css/starter-template.css') }}" >
	<link rel="stylesheet" href="{{ asset('public/assets/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap-datetimepicker.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/jquerysctipttop.css') }}"  type="text/css">
	<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrapValidator.min.css') }}">
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="{{ asset('public/pdf/css/animate.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('public/assets/css/flipclock.css')}}" type="text/css">
	<!-- Custom CSS -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.css" /> -->
	<!--<link rel="stylesheet" href="pdf/css/creative.css" type="text/css">-->
	<script src="{{ asset('public/assets/js/ie-emulation-modes-warning.js') }}"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
    <style>
		.wowbook-book-container {
			display:flex;
		}
		.flip-clock-wrapper ul li a div div.inn{
			font-size:16px !important;
			font-weight: 700;
			color: #fff !important;
		}
		.flip-clock-wrapper ul{
			padding: 0 !important;
		}
		.flip-clock-label{
			display: none !important;
		}
		.flip-clock-wrapper{
			position: absolute;
			left: 57%;
			transform: translate(-20%, 5%);
		}
		.flip-clock-dot.top{
			top: 8px !important;
		}
		.flip-clock-dot.bottom{
		bottom: 78px !important;
		}
		.flip-clock-wrapper{
			
		}
		.flip-clock-dot{
			width: 5px !important;
			height: 5px !important;
		}
		.flip-clock-wrapper ul{
			width: 20px !important;
			height: 25px !important;
			margin: 1px !important;
		}
		.flip-clock-wrapper ul li{
			line-height: 25px !important;
		}
		.flip-clock-wrapper{
			
		}
		/*.demo1 {
		    bottom: 0px;
		    top: 23px;
		    position: absolute;
		    height: fit-content;
		    text-align: center;
		    right: 46%;
		    background-color: #b91a1a !important; 
		    padding: 5px 10px;
		    font-size: 16px;
		    font-weight: 900;
		    letter-spacing: 2px;
		    color: #fff;
		    font-family: "Lato",sans-serif;
		    border-radius: 5px;
		    box-shadow: 0px 0px 5px #fff;
		    z-index: 99; 
		}*/
		/*.divColor {
			background-color: #b91a1a !important; 
		}*/
/*		.item:first-of-type{
			display: block;
		}*/
	</style>
</head>
<body>
	<header>
		<div class="clearfix">

			<div class="container">
				<div class="pull-left"><img src="{{ asset('public/assets/img/Hippologo.png') }}" height="50"></div>
				<div class="pull-right">
					<div class="btn-group" style="margin-top: 9px;">
						<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle-o" style="padding: 0px 10px 0px 0px;" ></i>Sreedhar Mylavarapu 
						</button>
						<div class="dropdown-menu drop-menu-name" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform; width:100%;"> 
							<a class="dropdown-item" href="{{asset('/users')}}">Admin</a> <a class="dropdown-item" href="#">Profile</a> <a class="dropdown-item" href="#">Logout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand hidden-lg hidden-md hidden-sm hidden-xs" href="#">Project name</a> 
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li> <a href="{{asset('index')}}">Home</a> </li>
						<li> <a href="#">Smart Tutor</a> </li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Menu 1</a></li>
						<li><a href="#">Menu 2</a></li>
						<li><a href="#">Menu 3</a></li>
						<li><a href="#">Menu 4</a></li>
						<li><a href="#">Menu 5</a></li>
					</ul>
				</div>
				<!--/.nav-collapse --> 
			</div>
		</nav>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="banner-box" style="padding-top:18%; padding-bottom:12%;">
				<div class="col-md-11 col-md-offset-1">
					<h2 class="col-md-12 col-lg-12" style="color:#fff; padding-bottom:10px;"><span style="font-size:34px; color:#fff;"><strong>HIPPO - Smart way of utilizing digital assets </strong></span> <br>
				 	for the smart people</h2>
				</div>
				<form action="{{asset('/searchItems')}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="col-md-offset-1">
						<div class="infbox">
							<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 master-pad">
								<div class="form-group">
									<select class="form-control input-lg" name="language" id="language">
										<option selected="selected" value="1" >Language</option>
										<option value="2" selected>English </option>
										<option value="3">Telugu </option>
										<option value="4">Hindi </option>
									</select>
								</div>
							</div>
							<div class="col-md-2 col-sm-6 col-xs-6 master-pad">
								<div class="form-group">
									<select class="form-control input-lg" name="searchType" id="searchType">
										<option selected="" value="1">Type </option>
										<option value="2" selected>All </option>
										<option value="3">Books </option>
										<option value="4">Videos </option>
									</select>
								</div>
							</div>
							<div class="col-md-2 col-sm-6 col-xs-6 master-pad">
								<div class="form-group">
									<select class="form-control input-lg" name="subject" id="subject">
										<option selected="" value="1">Math </option>
										<option value="2" selected>Physics</option>
										<option value="3">Chemistry </option>
									</select>
								</div>
							</div>
							<div class="col-md-2 col-sm-6 col-xs-6 master-pad">
								<div class="form-group">
									<div style="position:relative; overflow:hidden;">
										<select class="form-control input-lg" name="subject1" id="subject1">
											<option selected="" value="1">Math </option>
											<option value="2" selected>Physics</option>
											<option value="3">Chemistry </option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-1 col-sm-6 col-xs-6 master-pad">
								<div class="form-group">
									<div style="position:relative; overflow:hidden;">
										<input id="startDate" name="startDate" Placeholder="From" type="text" class="form-control input-lg" />
										<div class="line-box1"></div>
									</div>
									<!--<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control input-lg" /><div class="line-box"></div>
									<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>--> 
								</div>
							</div>
							<div class="col-md-1 col-sm-6 col-xs-6 master-pad">
								<div class="form-group">
									<div style="position:relative; overflow:hidden;">
										<input class="form-control input-lg" id="endDate" Placeholder="To" name="endDate" type="text" />
										<div class="line-box1"></div>
									</div>
								</div>
								<!--<div class='input-group date' id='datetimepicker2'>
								<input type='text' class="form-control input-lg" /><div class="line-box"></div>
								<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>--> 
							</div>
						</div>
						<div class="col-md-12">
							<div class="search-box-banner master-pad">
								<div class="col-md-6 master-pad">
									<div class="form-group" style="margin-bottom: 5px !important;">
										<div class="jQueryInputTags defaultOptions">
											<input class="form-control input-lg" type="text" placeholder="Keywords" name="keywords" id="keywords">
											<input type="hidden" name="keyValue" id="keyValue">
										</div>
									</div>
								</div>
								<div class="col-md-3 master-pad">
									<div class="form-group" style="margin-bottom: 5px !important;">
										<div style="position:relative; overflow:hidden;">
											<input class="form-control input-lg" type="text" placeholder="Author" name="author" id="author">
											<div class="line-box"></div>
										</div>
									</div>
								</div>
								<div class="col-md-1 col-sm-12 col-xs-12 master-pad">
									<div class="form-group"> <input class="btn btn-block input-lg btn-color" style="font-weight:bold;" type="button" value="Search" onclick="get_search_data()"> </div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		function get_search_data(){
			alert('ajax search');
			// var new_request = new XMLHttpRequest();
			// new_request.open('GET','/ajaxSearching');
			// new_request.onreadystatechange = function(){
			// 	if(this.status == 200 && this.readyState == 4){
			// 		console.log(this.responseText);
			// 	}
			// }
			// new_request.send();

			$.ajax({url: "{{asset('/ajax')}}", success: function(result){
			  // $("#div1").html(result);
			  // console.log(result);
			  alert(result);
			}});
		}
	</script>
	<!-- /.container -->
			<!-- Mobile Version Start -->
	<div class="container-fluid">
				<div class="col-md-12 hidden-md hidden-lg hidden-sm" style="padding-top:10px;">
					<div class="clearfix">
						<div class="clearfix">
							<h2>Books</h2>
						</div>
						<div id="myCarousel-mobile" class="carousel slide" data-ride="carousel"> 
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<!-- Main foreach start -->
										

								<div class="item">
									<div class="row">
										<div class="col-lg-2">
											<div class="single_product">
												<div class="product_thumb"> 
													<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a>
													<div class="product_action">
														<div class="hover_action"> 
															<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
															<div class="action_button">
																<ul>
																	<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="quick_button"> 
														<a class="btn btn-block btn-quick book2-trigger" id="book2-trigger" href="#">Read Now</a> 
													</div>
													<div class="product_sale"> <span>-7%</span> </div>
												</div>
												<div class="product_content">
													<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
													<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Main foreach stop -->
								<div class="item">
									<div class="row">
										<div class="col-lg-2">
											<div class="single_product">
												<div class="product_thumb"> 
													<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_2.jpeg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a>
													<div class="product_action">
														<div class="hover_action"> 
															<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
															<div class="action_button">
																<ul>
																	<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="quick_button"> 
														<a class="btn btn-block btn-quick book2-trigger" id="book2-trigger" href="#" tabindex="-1">Read Now</a>
													</div>
													<div class="product_sale"> <span>-7%</span> </div>
												</div>
												<div class="product_content">
													<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
													<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row">
										<div class="col-lg-2">
											<div class="single_product">
												<div class="product_thumb"> 
													<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_3.jpg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_4.jpg')}}" alt=""></a>
													<div class="product_action">
														<div class="hover_action"> 
															<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
															<div class="action_button">
																<ul>
																	<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="quick_button"> 
														<button class="btn btn-block btn-quick" id="book2-trigger" value="" href="#" tabindex="-1">Read Now</button> 
													</div>
													<div class="product_sale"> <span>-7%</span> </div>
												</div>
												<div class="product_content">
													<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
													<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Left and right controls --> 
							<a class="left carousel-control" href="#myCarousel-mobile" data-slide="prev"> <img src="{{ asset('public/assets/img/arrow-left.png')}}" width="45" height="91"></a> <a class="right carousel-control" href="#myCarousel-mobile" data-slide="next"> <img src="{{ asset('public/assets/img/arrow-right.png')}}" width="45" height="91"> </a> 
						</div>
					</div>
					<div class="clearfix">
						<div class="clearfix">
							<h2>Videos</h2>
						</div>
						<div id="myCarousel-mobile1" class="carousel slide" data-ride="carousel"> 
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item">
									<div class="row">
										<div class="col-lg-2">
											<div class="single_product">
												<div class="product_thumb"> 
													<a class="primary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/video1.jpg')}}" alt=""></a> <a class="secondary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/video11.jpg')}}" alt=""></a>
													<div class="product_action">
														<div class="hover_action"> 
															<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
															<div class="action_button">
																<ul>
																	<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="quick_button"> 
														<a class="btn btn-block btn-quick" data-toggle="modal" data-target="#videoModal" href="#" tabindex="-1">View Now</a> 
													</div>
													<div class="product_sale"> <span>-7%</span> </div>
												</div>
												<div class="product_content">
													<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
													<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row">
										<div class="col-lg-2">
											<div class="single_product">
												<div class="product_thumb"> 
													<a class="primary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/video2.jpg')}}" alt=""></a> <a class="secondary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/video22.jpg')}}" alt=""></a>
													<div class="product_action">
														<div class="hover_action"> 
															<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
															<div class="action_button">
																<ul>
																	<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="quick_button"> 
														<a class="btn btn-block btn-quick" data-toggle="modal" data-target="#videoModal" tabindex="-1">View Now</a>
													</div>
													<div class="product_sale"> <span>-7%</span> </div>
												</div>
												<div class="product_content">
													<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
													<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row">
										<div class="col-lg-2">
											<div class="single_product">
												<div class="product_thumb"> 
													<a class="primary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/video3.jpg')}}" alt=""></a> <a class="secondary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/video33.jpg')}}" alt=""></a>
													<div class="product_action">
														<div class="hover_action"> 
															<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
															<div class="action_button">
																<ul>
																	<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																	<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="quick_button"> 
														<a class="btn btn-block btn-quick" data-toggle="modal" data-target="#videoModal" href="#" tabindex="-1">View Now</a> 
													</div>
													<div class="product_sale"> <span>-7%</span> </div>
												</div>
												<div class="product_content">
													<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
													<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Left and right controls --> 
							<a class="left carousel-control" href="#myCarousel-mobile1" data-slide="prev"> <img src="{{ asset('public/assets/img/arrow-left.png')}}" width="45" height="91"></a> <a class="right carousel-control" href="#myCarousel-mobile1" data-slide="next"> <img src="{{ asset('public/assets/img/arrow-right.png')}}" width="45" height="91"></a> 
						</div>
					</div>
				</div>
		<!-- Mobile Version End -->
		<!-- Desktop Version Start -->
		<div class="col-md-12 hidden-xs hidden-sm" style="padding-top:10px;">
			<div class="clearfix">
				<h2 class="col-md-12">Books</h2>
				<div class="col-md-12">
					<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
						<!-- Wrapper for slides -->
						<div class="carousel-inner">

							<!-- Foreach Start -->
							<?php 
								$i=0;
						        $per_div = 6;
						        $len = sizeof($books);
						        $dummy_len = 0;
						        $limit = ($len/$per_div);
						        while($i < $limit){ 
						    ?>
							<div class="item" id="item{{$dummy_len}}">
								<div class="row">
									<?php $j=0; ?>
									<?php while(($j < $per_div) && ($dummy_len < $len)){ ?>
									<div class="col-lg-2">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/'.$books[$dummy_len]->book_primary_image)}}" alt=""></a> <a class="secondary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/'.$books[$dummy_len]->book_secondary_img)}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> 
														<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> <button class="btn btn-block btn-quick book2-trigger" id="book2-trigger" href="#" value="<?php echo $books[$dummy_len]->book_file; ?> " tabindex="-1">Read Now</button> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
											<h4><a href="#" tabindex="-1">{{$books[$dummy_len]->book_title}}</a></h4>
											<span class="current_price">{{$books[$dummy_len]->book_description}}</span> </div>
										</div>
									</div>
									<?php $dummy_len++;
									$j++;} ?>
								</div>
							</div>
							 <?php  
							    ++$i;
							} ?>
							<!-- end foreach -->
						</div>
						<!-- Left and right controls --> 
						<a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="{{ asset('public/assets/img/arrow-left.png')}}" width="45" height="91"></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <img src="{{ asset('public/assets/img/arrow-right.png')}}" width="45" height="91"></a> 
					</div>
				</div>
			</div>
			<div class="clearfix">
				<h2 class="col-md-12">Videos</h2>
				<div class="col-md-12">
					<div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
								<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<!-- Main Desktop While Start -->
								<?php 
									$i=0;
							        $per_div = 6;
							        $len = sizeof($videos);
							        $dummy_len = 0;
							        $limit = ($len/$per_div);
							        while($i < $limit){ 
							    ?>
							<div class="item" id="videoitem{{$dummy_len}}">
								<div class="row">
									<?php $j=0; ?>
									<?php while(($j < $per_div) && ($dummy_len < $len)){ ?>
									<div class="col-lg-2">
										<div class="single_product">
											<div class="product_thumb">
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/'.$videos[$dummy_len]->video_primary_image)}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/'.$videos[$dummy_len]->video_secondary_image)}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action">
														<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> <button class="btn btn-block btn-quick"  data-toggle="modal" data-target="#videoModal" onclick="get_dynamic_video(this.value)" href="#" tabindex="-1" value="<?php echo $videos[$dummy_len]->video_file.','.$videos[$dummy_len]->video_ogg_file; ?>">View Now</button> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">{{$videos[$dummy_len]->video_title}}</a></h4>
												<span class="current_price">{{$videos[$dummy_len]->video_description}}</span> 
											</div>
										</div>
									</div>
									<?php $dummy_len++;
									$j++;} ?>
								</div>
							</div>
							 <?php  
							    ++$i;
							} ?>
							<!-- Main While Desktop End -->
						</div>
						<!-- Left and right controls --> 
						<a class="left carousel-control" href="#myCarousel1" data-slide="prev"><img src="{{ asset('public/assets/img/arrow-left.png')}}" width="45" height="91"></a> <a class="right carousel-control" href="#myCarousel1" data-slide="next"> <img src="{{ asset('public/assets/img/arrow-right.png')}}" width="45" height="91"></a> 
					</div>
				</div>
			</div>
		</div>
		<!-- Desktop Version End -->
		<!-- Tablet Version Start -->
		<div class="col-md-12 hidden-lg hidden-md hidden-xs" style="padding-top:10px;">
			<div class="clearfix">
				<div class="clearfix">
					<h2 class="col-md-12">Books</h2>
				</div>
				<div class="col-md-12">
					<div id="myCarousel-tablet" class="carousel slide" data-ride="carousel"> 
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> <a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick book2-trigger book2-trigger" id="book2-trigger" href="#" tabindex="-1">Read Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> <a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_2.jpeg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> <a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> <a class="btn btn-block btn-quick book2-trigger" id="book2-trigger" href="#" tabindex="-1">Read Now</a> </div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> <a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> <a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick book2-trigger" id="book2-trigger" href="#" tabindex="-1">Read Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> <a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick book2-trigger" id="book2-trigger" href="#" tabindex="-1">Read Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> 
												</div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> <a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick book2-trigger" id="book2-trigger" href="#" tabindex="-1">Read Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
										<div class="product_content">
										<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
										<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> </div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> <a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick book2-trigger" id="book2-trigger" href="#" tabindex="-1">Read Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Left and right controls --> 
						<a class="left carousel-control" href="#myCarousel-tablet" data-slide="prev"><img src="{{ asset('public/assets/img/arrow-left.png')}}" width="45" height="91"></a> <a class="right carousel-control" href="#myCarousel-tablet" data-slide="next"> <img src="{{ asset('public/assets/img/arrow-right.png')}}" width="45" height="91"></a> 
					</div>
				</div>
			</div>
			<div class="clearfix">
				<div class="clearfix">
					<h2 class="col-md-12">Videos</h2>
				</div>
				<div class="col-md-12">
					<div id="myCarousel-tablet1" class="carousel slide" data-ride="carousel"> 
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a> <a class="secondary_img" href="#" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> 
														<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick" data-toggle="modal" data-target="#videoModal" href="#" tabindex="-1">View Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_2.jpeg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> 
														<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick" data-toggle="modal" data-target="#videoModal" href="#" tabindex="-1">View Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> 
														<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick" data-toggle="modal" data-target="#videoModal" href="#" tabindex="-1">View Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> 
														<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick" data-toggle="modal" data-target="#videoModal" href="#" tabindex="-1">View Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> 
														<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick" data-toggle="modal" data-target="#videoModal" href="javascript:void(0)" tabindex="-1">View Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="single_product">
											<div class="product_thumb"> 
												<a class="primary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_1.jpeg')}}" alt=""></a> <a class="secondary_img" href="javascript:void(0)" tabindex="-1"><img src="{{ asset('public/assets/img/book_7.jpg')}}" alt=""></a>
												<div class="product_action">
													<div class="hover_action"> 
														<a href="#" tabindex="-1"><i class="fa fa-plus"></i></a>
														<div class="action_button">
															<ul>
																<li><a title="add to cart" href="#" tabindex="-1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Wishlist" tabindex="-1"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
																<li><a href="#" title="Add to Compare" tabindex="-1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="quick_button"> 
													<a class="btn btn-block btn-quick" data-toggle="modal" data-target="#videoModal" href="javascript:void(0)" tabindex="-1">View Now</a> 
												</div>
												<div class="product_sale"> <span>-7%</span> </div>
											</div>
											<div class="product_content">
												<h4><a href="#" tabindex="-1">Beats Solo Wireless</a></h4>
												<span class="current_price">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Left and right controls --> 
						<a class="left carousel-control" href="#myCarousel-tablet1" data-slide="prev"><img src="{{ asset('public/assets/img/arrow-left.png')}}" width="45" height="91"></a> <a class="right carousel-control" href="#myCarousel-tablet1" data-slide="next"> <img src="{{ asset('public/assets/img/arrow-right.png')}}" width="45" height="91"></a> 
					</div>
				</div>
			</div>
		</div>
	<!-- Tablet Version End -->
	</div>
	<input type="button" id="testBuu" value="test" style="display: none">
 	<input type="button" id="testBuu1" value="test1" style="display: none">
	<footer>
		<p>Copyright © 2018 Hippo All Right Reserved.</p>
	</footer>
	<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
	<!-- Modal Popup  Start Here-->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
					<h4 class="modal-title" id="myModalLabel">Login</h4>
				</div>
				<div class="modal-body" style="padding-top:40px;padding-bottom:40px; padding-left:40px; padding-right:40px;">
					<form role="form" class="form-horizontal">
						<div class="form-group-lg" style="margin-bottom:20px; float: left;width: 100%;">
							<label for="email" class="col-sm-3 control-label lg"> Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control input-lg" id="email1" placeholder="Your Email" />
							</div>
						</div>
						<div class="form-group-lg" style="margin-bottom:20px; float: left;
						    width: 100%;">
							<label for="exampleInputPassword1" class="col-sm-3 control-label "> Password</label>
							<div class="col-sm-9">
								<input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Enter Password" />
							</div>
						</div>
						<div class="clearfix">
							<div class="col-sm-3"> </div>
							<div class="col-sm-5 col-xs-6" style="line-height:50px;"> 
								<a href="javascript:;">Forgot Password?</a> 
							</div>
							<div class="col-sm-4 col-xs-6">
								<button type="submit" class="btn btn-primary btn-sm pull-right input-lg btn-color"> Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Popup  End Here-->

	<!--Video Modal popup Start here-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<video id="" width="100%" controls poster="video/thumb.jpg">
						<source src="video/Login_via_Lynda_dot_com.mp4" type="video/mp4">
						<source src="video/Login_via_Lynda_dot_com.ogg" type="video/ogg">
						Your browser does not support the video tag.
					</video>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
    </div>
	<div id="videoModal" class="modal fade" role="dialog">
	  	<div class="modal-dialog">
	    <!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Video</h4>
				</div>
				<div class="modal-body">
					<!--<video id="videoPlayer" width="100%" controls ontimeupdate="getCurrentTime(this)" poster="video/thumb.jpg">
						<source id="mp4Vid" src="" type="video/mp4">
						 <source id="oggVid" src="http://localhost/crest/public/assets/videos/t1.ogg" type="video/ogg"> --
					  	Your browser does not support the video tag.
					</video>

					<div><span id="videoCurrentTime"></span></div>-->
					<iframe width="100%" height="300px" id="videoPlayer" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
		    </div>
		</div>
	</div>
	<script>
		
	    function get_dynamic_video(videoFile){
	    	alert(videoFile);
	    	files_names_array = videoFile.split(',');
	    	alert(files_names_array);
	    	var path_info1 = "{{asset('public/assets/videos')}}"+"/"+files_names_array[0];
	    	// var path_info2 = "{{asset('public/assets/videos')}}"+"/"+files_names_array[1];
	    	// $('#mp4Vid').attr('src',path_info1);
	    	// $('#oggVid').attr('src',path_info2);
	    	document.getElementById("videoPlayer").src = path_info1;
	    	// document.getElementById("oggVid").src = path_info2;
	    	// document.getElementById("videoFile").load();

	    }
	</script>
	<!--Video Modal popup Start here-->
	<!-- PDF Start Here-->
	<div style='display: block'>
		<div id='book2'></div>        
	</div>
	<style>
		.demo {
		    margin-bottom: 10px;
		    width: 150px;
		    border-bottom-left-radius: 4px 4px;
		    border-bottom-right-radius: 4px 4px;
		    border-top-left-radius: 4px 4px;
		    border-top-right-radius: 4px 4px;
		    border: 2px solid #EEE;
		    float: left;
		    padding: 0px 8px;
		}
		
		.wowbook {
			font-family: "Open Sans","Helvetica Neue",Arial,sans-serif;
		}
		.wowbook-page-content {
			padding: 1.5em;
		}
		.wowbook ul {
			padding-left: 1em;
		}
        .book-thumb {
            height: 150px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.5)
        }

		#book1-trigger, #book2-trigger, #book3-trigger {
			cursor: pointer;
		}
		#book1-trigger:hover, #book2-trigger:hover, #book3-trigger:hover {
			background: #f8f8f8;
		}

        .wowbook-lightbox > .wowbook-close {
            background: transparent !important;
            border: none !important;
            color: #222 !important;
            font-size: 2.5em;
        }
        .wowbook-lightbox > .wowbook-close:hover {
            background: #444 !important;
            color: white !important;
            border-radius: 3px;
        }


        .lightbox-images1 .wowbook-book-container {
            background: #6d6b92; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, #ffffff 0%, #6d6b92 100%); /* FF3.6-15 */
            background: -webkit-radial-gradient(center, ellipse cover, #ffffff 0%,#6d6b92 100%); /* Chrome10-25,Safari5.1-6 */
            background: radial-gradient(ellipse at center, #ffffff 0%,#6d6b92 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        }
        .lightbox-images1 > .wowbook-close,
        .lightbox-images2 > .wowbook-close {
            color: #ccc !important;
        }
        .lightbox-images2 .wowbook-book-container {
            background: #1E2831; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, #ffffff 0%, #1E2831 100%); /* FF3.6-15 */
            background: -webkit-radial-gradient(center, ellipse cover, #ffffff 0%,#1E2831 100%); /* Chrome10-25,Safari5.1-6 */
            background: radial-gradient(ellipse at center, #ffffff 0%,#1E2831 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        }

		.lightbox-pdf  .wowbook-book-container {
			background: #e5e5e5 url(https://previews.envatousercontent.com/files/251648489/img/bg-lightbox-pdf.png); /* Old browsers */
			background: #e5e5e5 -moz-radial-gradient(center, ellipse cover, #ffffff 20%, #bbbbbb 100%); /* FF3.6-15 */
			background: #e5e5e5 -webkit-radial-gradient(center, ellipse cover, #ffffff 20%,#bbbbbb 100%); /* Chrome10-25,Safari5.1-6 */
			background: #e5e5e5 radial-gradient(ellipse at center, #ffffff 20%,#bbbbbb 100%); /* W3C, IE10+, FF16+, Chrome26+,Opera12+, Safari7+*/
		}

		.lightbox-html  .wowbook-book-container {
			background: url(img/book_html/wood.jpg);
		}
		.lightbox-html .wowbook-toolbar {
			margin-top: 1em; /* FIXME */
			box-sizing: content-box !important;
		}

		.lightbox-html .wowbook-controls {
			border-radius: 6px;
			width: auto;
		}

		.lightbox-html.wowbook-mobile .wowbook-toolbar {
			margin: 0;
		}

		.lightbox-html.wowbook-mobile .wowbook-controls {
			border-radius: 0;
			width: 100%;
		}

		/*	.lightbox-html .wowbook-controls {
				border-radius: 6px;
				width: auto;
				background: none;
				color: rgba(60, 20, 20, 0.8);
				text-shadow: 0 1px 0 #fff;
				box-shadow: none;
			}
			.lightbox-html .wowbook-control:hover {
				background: none;
				color: white;
				text-shadow: 0 1px 0 #fff, 0 0px 5px rgba(60, 20, 20, 1);
				text-shadow: 0 1px 0 #fff, 0 0px 3px #fff;
			}
		*/
		hr {
			max-width: 450px;
		}
	</style>
	<!-- PDF End Here-->
	<!-- Bootstrap core JavaScript
	    ================================================== --> 
	<!-- Placed at the end of the document so the pages load faster --> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
	<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
	<!-- PDF Js Start Here-->
	<!-- Plugin JavaScript -->
    <script src="{{ asset('public/pdf/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('public/pdf/js/jquery.fittext.js')}}"></script>
    <script src="{{ asset('public/pdf/js/wow.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/flipclock.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/pdf/js/creative.js')}}"></script>

    <script src="https://cdn.rawgit.com/robcowie/jquery-stopwatch/master/jquery.stopwatch.js"></script>

    <link rel="stylesheet" href="{{ asset('public/pdf/wow_book/wow_book.css')}}" type="text/css" />
	<style>
		.wowbook-right .wowbook-gutter-shadow {
			background-image: url("{{ asset('public/pdf/img/page_right_background.png')}}");
			background-position: 0 0;
			width: 75px;
		}
		.wowbook-left .wowbook-gutter-shadow {
			background-image: url("{{ asset('public/pdf/img/page_left_background.png')}}");
			opacity: 0.5;
			width: 60px;
		}
        .wowbook-control-currentPage {
            font-family: "Segoe UI",Helvetica,Arial,sans-serif;
        }
	</style>
    <script type="text/javascript" src="{{ asset('public/pdf/wow_book/pdf.combined.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/pdf/wow_book/wow_book.min.js')}}"></script>
    <!-- <script type="text/javascript">
    	$(document).ready(function(){
    		$('.wowbook-close').click(function(){
            	alert('sessionRemoved');
	    	});	
    	})
    </script> -->
    <script>
    	// var book_name_var;
		function my_fun(myVal) {
	    		// alert(myVal);
	            window.value = myVal;
	      //       sessionStorage.removeItem("bookName");
	      //       sessionStorage.clear();
	    		// sessionStorage.setItem("bookName", myVal);
	    		// wowbook1(myVal);
	    		// alert('Session_book is: '+sessionStorage.getItem("bookName"));
    		}
    	
        $(function(){
            function fullscreenErrorHandler(){
                if (self!=top) return "The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
            }

            // imageBook = ["1", "8"][ Math.floor(Math.random()*2)];
            // imageBookPath = "./img/magazine_template_0"+imageBook+"/";
            // $("#book1-trigger .book-thumb").attr("src", imageBookPath+"image_000.jpg")

   //         	var tableOfContents = [
			//   ["The Cock and the Pearl", 1],
			//   ["The Wolf and the Lamb", 2],
			//   ["The Lion's share", 3],
			//   ["The Wolf and the Crane", 4],
			// ];
				
			//====================================================================

    		// var optionsBook2 = {};
    		// function wowbook1(pdffile){

	            var optionsBook2 = {
	                 height   : 1024
	                ,width    : 725*2
	                // ,maxWidth : 800
	                // ,maxHeight : 400
	                ,pageNumbers: false

	                ,pdf: ""
	                // ,pdf: "http://localhost/crest/public/pdf/img/aesop_fables/"+pdffile
	                ,pdfFind: true
	                ,pdfTextSelectable: true

	                ,lightbox : ".book2-trigger"
	                ,lightboxClass : "lightbox-pdf"
	                ,centeredWhenClosed : true
	                ,hardcovers : true
	                ,curl: false
	                ,toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, flipsound, fullscreen, thumbnails"
					//,toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails"
	                ,thumbnailsPosition : 'bottom'
	                ,responsiveHandleWidth : 50
	                ,onFullscreenError: fullscreenErrorHandler
	                // ,toc: tableOfContents
	                ,controls : {
					    next      : '#next',     // goto next page
					    back      : '#back',     // back page
					    first     : '#first',    // goto first page
					    last      : '#last',     // goto last page
					    zoomIn    : '#zoomIn',   // zoom in
					    zoomOut   : '#zoomOut'  // zoom out
					    // slideShow : '#slideShow' // starts/stop slideshow 
					}
            	};
            // }
			//============================================================================

            var books = {
                "#book2" : optionsBook2,
            };


            $(".book2-trigger").on("click",function(){
            	// console.log("1");
            	// $(".wowbook-book-container").append('<div id="demo_1" class="demo1"></div>');
            	optionsBook2['pdf'] = "http://localhost/crest/public/pdf/img/aesop_fables/"+this.value;
            	buildBook( "#"+this.id.replace("-trigger", "") );
            	// alert(this.value);
            	// console.log(optionsBook2);
                /*$(".demo1").stopwatch().stopwatch('reset');
                $(".demo1").remove();*/
            })

            function buildBook( elem ){
            	// console.log("2");
            	// $(".wowbook-book-container").append('<div id="demo_1" class="demo1"></div>');
            	var book=$.wowBook(elem);
                if (!book) {
                	$(elem).wowBook( books[elem] );
                    book=$.wowBook(elem);
                }

                // C:\Program Files\Sublime Text 3

                book.opts.onHideLightbox = function(){
                    // setTimeout( function(){ book.destroy(); }, 1000); 
                    window.location.assign("{{ asset('/index') }}");
                }
                //var page = book.pages[4];
                book.showLightbox();
                var arr = new Array();
                var timeVal = '';
                book.onShowPage = function(book, page, pageIndex) {
                	var totalPages = book.pages.length;
                	var backpage = book.pages[pageIndex];
                	// console.log("total pages "+totalPages);
                	arr.push(page.pageIndex);
                	// console.log("current page Index"+page.pageIndex);
                	/*if(page.pageIndex == totalPages-1){
                		arr.length = 0;
                		$('.demo1').html('');
            			console.log("in 1");
                	}
                	else*/ if(arr.length == 2){
                		// console.log("in 2");
                		//$(".demo1").remove();
                		if( ($(".demo1").length !== 0)){
                			//console.log("current time"+$('.demo1').html());
                			$(this).html('');
                			$("#testBuu1").trigger('click');
                		}
                		else{
                			// $(".wowbook-book-container").append("<div class='row' style='position:absolute;text-align:center;'><div class='col-md-12'><div data-clock id='demo_1' class='demo1'></div></div></div>");
                			$(".wowbook-pdf").append("<div class='container'><div class='row'><div class='col-md-12'><div data-clock id='demo_1' class='demo1'></div></div></div></div>");
                			// $(".wowbook-book-container").append("<div data-clock></div>");
                			// console.log(book.pages.length);
                		} 
                		$("#testBuu").trigger('click');
                		arr.length = 0;
                		// timetrack(page.pageIndex, arr, arr[0]);
                	}
                	/*var id = $(".wowbook-current-page").text();
                	console.log("current page id " +id);
                	console.log(book.currentPage);*/
                	// timetrack(page.pageIndex, i);                	
                }
                
                book.onReleasePage = function(book, pageIndex, page, backpage){
	            	console.log("on hold");
	            	$("#testBuu1").trigger('click');
            	}
        	}
            
            
        });
    </script>
	<!-- PDF Js End Here-->
	<!-- Search Key words Start Here-->
	<script src="{{ asset('public/assets/js/main.js')}}"></script> 
	<!--<script src="assets/js/plugins.js"></script>--> 
	<script src="{{ asset('public/assets/js/vendor.js.js')}}"></script> 
	<script type="text/javascript">$('.defaultOptions').jQueryInputTags();
	    $('.customOptions').jQueryInputTags({
	      maxTotalSize: 100,
	      maxTagSize: 15,
	      minTagSize: 1,
	      chars: /[!:,]/,
	    });
    	
	</script> 
	<script>
	// $('#myModal').modal('show');
		/*$("#myModal").modal({
		  escapeClose: false,
		  clickClose: false,
		  showClose: false
		});*/
	
	</script> 
	<script type="text/javascript">
		// $(clocks).FlipClock();
		// console.log(3600 * (Math.random()*10));
		// var clocks = $('.demo1').FlipClock();
		
		function timetrack(pageIndex, arr, firstitem){
			/*var clocks = $('.demo1').FlipClock({
				autoStart: true,
		        callbacks: {
		        	start: function() {
		        		// console.log(clocks.getTime().time);
		        		console.log('The clock has started!');		        		
		        	},
		        	stop: function() {
		        		// $('.message').html('The clock has stopped!');
		        		timeVal = this.factory.getTime().time;
		        		console.log("in stop");
		        	}
		        }
			});*/
			
			//console.log(clocks.face.factory.time.time);
			// clocks.reset();
			//clocks.start();
			
			// console.log(arr);
			// $(".demo1").addClass('divColor');
			//------------- working butfaster ----------
			/*$(".demo1").stopwatch().stopwatch('reset');
			$(".demo1").stopwatch().stopwatch('start');*/
			//console.log(clocks.getTime());			
			arr.length = 0;		
		}
		$(document).ready(function(){
			var clocks = '';
			function testt(){
				clocks = $('.demo1').FlipClock({
				autoStart: false,
		        callbacks: {
			        	start: function() {
			        		// console.log(clocks.getTime().time);
			        		console.log('The clock has started!');		        		
			        	},
			        	reset: function() {
			        		// $('.message').html('The clock has stopped!');
			        		timeVal = this.factory.getTime().time;
			        		console.log("in stop");
			        	}
		        	}
				});
			}			
			$("#testBuu").click(function(){
				testt();
				clocks.start();
			});
			$("#testBuu1").click(function(){
				console.log("in stop");
				console.log(clocks.face.factory.time.time);
				clocks.reset();
			});
			$(".wowbook-find-next").click(function(){
				alert("next");
			});
		});
		
	</script>
	<!-- Search Key words End Here-->
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
	<script src="{{ asset('public/assets/js/ie10-viewport-bug-workaround.js')}}"></script> 
	<script type="text/javascript">
		$(function () {                
		    $('#datetimepicker1').datetimepicker();
		    
		    $('#datetimepicker2').datetimepicker({
		      useCurrent: false //Important! See issue #1075
		    });
		    
		    $("#datetimepicker1").on("dp.change", function (e) {
		      $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
		    });      
		    
		    $("#datetimepicker2").on("dp.change", function (e) {
		        $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
		    });
		});
	</script> 
	<script>
		var bindDateRangeValidation = function (f, s, e) {
		    if(!(f instanceof jQuery)){
					console.log("Not passing a jQuery object");
		    }

		    var jqForm = f,
		        startDateId = s,
		        endDateId = e;
		  
		    var checkDateRange = function (startDate, endDate) {
		        var isValid = (startDate != "" && endDate != "") ? startDate <= endDate : true;
		        return isValid;
		    }

	    	var bindValidator = function () {
		        var bstpValidate = jqForm.data('bootstrapValidator');
		        var validateFields = {
		            startDate: {
		                validators: {
		                    notEmpty: { message: 'This field is required.' },
		                    callback: {
		                        message: 'Start Date must less than or equal to End Date.',
		                        callback: function (startDate, validator, $field) {
		                            return checkDateRange(startDate, $('#' + endDateId).val())
		                        }
		                    }
		                }
		            },
		            endDate: {
		                validators: {
		                    notEmpty: { message: 'This field is required.' },
		                    callback: {
		                        message: 'End Date must greater than or equal to Start Date.',
		                        callback: function (endDate, validator, $field) {
		                            return checkDateRange($('#' + startDateId).val(), endDate);
		                        }
		                    }
		                }
		            },
		          	customize: {
		                validators: {
		                    customize: { message: 'customize.' }
		                }
		            }
		        }
		        if (!bstpValidate) {
		            jqForm.bootstrapValidator({
		                excluded: [':disabled'], 
		            })
		        }
		      
		        jqForm.bootstrapValidator('addField', startDateId, validateFields.startDate);
		        jqForm.bootstrapValidator('addField', endDateId, validateFields.endDate);	      
	    	};

		    var hookValidatorEvt = function () {
		        var dateBlur = function (e, bundleDateId, action) {
		            jqForm.bootstrapValidator('revalidateField', e.target.id);
		        }

		        $('#' + startDateId).on("dp.change dp.update blur", function (e) {
		            $('#' + endDateId).data("DateTimePicker").setMinDate(e.date);
		            dateBlur(e, endDateId);
		        });

		        $('#' + endDateId).on("dp.change dp.update blur", function (e) {
		            $('#' + startDateId).data("DateTimePicker").setMaxDate(e.date);
		            dateBlur(e, startDateId);
		        });
		    }

	    	bindValidator();
	    	hookValidatorEvt();
		};

		$(function () {
		    var sd = new Date(), ed = new Date();
		  
		    $('#startDate').datetimepicker({ 
		      pickTime: false, 
		      format: "DD/MM/YYYY", 
		    });
		  
		    $('#endDate').datetimepicker({ 
		      pickTime: false, 
		      format: "DD/MM/YYYY", 
		    });
		    bindDateRangeValidation($("#form"), 'startDate', 'endDate');
		});

		function getCurrentTime(e){
			$("#videoCurrentTime").html(e.currentTime+" also full time "+e.duration);
		}
	</script>
	<script src="{{ asset('public/assets/js/bootstrapValidator.min.js')}}"></script> 
	<script src="{{ asset('public/assets/js/moment.min.js')}}"></script> 
	<script src="{{ asset('public/assets/js/bootstrap-datetimepicker.min.js')}}"></script> 

	<script>
		$('.carousel').carousel({
		  interval: false
		});
	</script>
	<script>
		if ($('#back-to-top').length) {
		    var scrollTrigger = 100, // px
		        backToTop = function () {
		            var scrollTop = $(window).scrollTop();
		            if (scrollTop > scrollTrigger) {
		                $('#back-to-top').addClass('show');
		            } else {
		                $('#back-to-top').removeClass('show');
		            }
		        };
		    backToTop();
		    $(window).on('scroll', function () {
		        backToTop();
		    });
		    $('#back-to-top').on('click', function (e) {
		        e.preventDefault();
		        $('html,body').animate({
		            scrollTop: 0
		        }, 700);
		    });
		}
	</script>
	<script type="text/javascript">

		
		$(document).ready(function(){
			$('#videoModal').modal({
			show: false
			}).on('hidden.bs.modal', function(){
			$(this).find('video')[0].pause();
			/*console.log("video duration "+$(this).find('video')[0].duration);
			console.log("video watched "+$(this).find('video')[0].currentTime);*/
			});
		});
		
		$(document).ready(function () {
		   $("body").on("contextmenu",function(e){
		     return true;
		   });

		   $("#item0").addClass('active');	   
		   $("#videoitem0").addClass('active');	   
		});

	</script>    
</body>
