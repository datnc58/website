<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    //echo $a;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Products | MY-Sale</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/prettyPhoto.css" rel="stylesheet">
    <link href="asset/css/price-range.css" rel="stylesheet">
    <link href="asset/css/animate.css" rel="stylesheet">
    <link href="asset/css/main.css" rel="stylesheet">
    <link href="asset/css/responsive.css" rel="stylesheet">       
    <link rel="shortcut icon" href="asset/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="asset/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<?php if(!isset($username)){
	echo '<header id="header">
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="welcome"><img src="asset/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a data-target="#myModal" data-toggle="modal"><i class="fa fa-lock"></i> Sigin</a></li>
								<li><a data-target="#myModal1" data-toggle="modal"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
                                            <!--dang nhap-->
       
                        <div class="modal fade" id="myModal1" >
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Đăng Nhập</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="welcome/login">
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Tài Khoản:</label>
                                      <input type="text" class="form-control" id="recipient-name" name="username">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">PassWord:</label>
                                      <input type="password" class="form-control" id="recipient-name" name="password">
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-top: 17px;">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Login in" name="login"/>
                                        </div>
                                  </form>
                                </div>

                              </div>
                            </div>
                        </div><!--dang nhap-->
                        <!--dang ki-->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Đăng Kí</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="welcome/sigin">
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Tài Khoản:</label>
                                      <input type="text" class="form-control" id="recipient-name" name="taikhoan">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Name:</label>
                                      <input type="text" class="form-control" id="recipient-name" name="name">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Email:</label>
                                      <input type="email" class="form-control" id="recipient-name" name="email">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">Địa Chỉ Shop:</label>
                                      <input type="text" class="form-control" id="recipient-name" name="address">
                                    </div>
                                    <div class="form-group">
                                      <label for="recipient-name" class="control-label">PassWord:</label>
                                      <input type="password" class="form-control" id="recipient-name" name="password">
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-top: 17px;">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Sign in" name="ok"/>
                                        </div>
                                  </form>
                                </div>

                              </div>
                            </div>
                        </div><!--dang nhap-->
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="mainmenu pull-left">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li><a href="welcome" class="active">Home</a></li>
                                        <li><a data-target="#myModal1" data-toggle="modal">Đăng tin</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="search_box pull-right">
                                    <input type="text" placeholder="Search"/>
                                </div>
                            </div>
                        </div>
                    </div>
		</div><!--/header-bottom-->
    </header>';}
    else {
        echo '<header id="header">
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="welcome"><img src="asset/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                                                            <li><a href="welcome/logout"><i class="fa fa-user"></i> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="mainmenu pull-left">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li><a href="welcome" class="active">Home</a></li>
                                        <li><a href="welcome/news">Đăng tin</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="search_box pull-right">
                                    <input type="text" placeholder="Search"/>
                                </div>
                            </div>
                        </div>
                    </div>
		</div><!--/header-bottom-->
    </header>';
    }?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh Mục</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                                    <?php foreach ($k as $value):?>
                                                        <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="welcome/<?php echo $value->danhmuc_link ?>""><?php echo $value->danhmuc_name ?></a></h4>
								</div>
							</div>
                                                    <?php endforeach;?>
						</div><!--/category-products-->
						<div class="price-range"><!--price-range-->
							<h2>Vote Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="[1,2]" id="sl2" ><br />
								 <b class="pull-left">0</b> <b class="pull-right">5</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="asset/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Danh sach cac hang hoa giay dep</h2>
                                                <?php foreach ($key as $val1):?>
						<div class="single-blog-post">
                                                    <h3 style="text-align: center"><?php echo $val1->product_name?></h3>
                                                        <h4><?php echo $val1->product_title?></h4>
                                                        <h4>Price:  <?php echo $val1->product_price?>$</h4>
                                                        
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-calendar"></i> <?php echo $val1->product_date?></li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="uploads/<?php echo $val1->product_images?>" alt="">
							</a>
							<p><?php echo $val1->product_content?></p>
                                                        <h4>Address:<?php echo $val1->product_address?></h4>
						</div>
                                                <?php endforeach;?>
						
						<div class="pagination-area">
							
                                                    <ul class="pagination">
                    
                                                            <?php echo $pagination?>
                                                    </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
        
	
	<footer id="footer"><!--Footer-->
		
            <div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.facebook.com/congdatkute">Nguyen Cong Dat</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="asset/js/jquery.js"></script>
	<script src="asset/js/price-range.js"></script>
	<script src="asset/js/jquery.scrollUp.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.prettyPhoto.js"></script>
    <script src="asset/js/main.js"></script>
	<script type='text/javascript'>
		var onWebChat={ar:[], set: function(a,b){if (typeof onWebChat_==='undefined'){this.ar.
		push([a,b]);}else{onWebChat_.set(a,b);}},get:function(a){return(onWebChat_.get(a));},w
			:(function(){ var ga=document.createElement('script'); ga.type = 'text/javascript';ga.
			async=1;ga.src='//www.onwebchat.com/clientchat/3e3ce1fd20f7d254095f800fb2e0fab7/1/1';
			var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})()}
	</script>
</body>
</html>