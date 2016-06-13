<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Detial sale | My-Sale</title>
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
<header id="header">
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
                        <a href="index.html"><img src="asset/images/home/logo.png" alt="" /></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="admin/logout"><i class="fa fa-lock"></i> <?php echo $username?></a></li>
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
                            <li><a href="admin" class="active">Home</a></li>
                            <li><a href="admin/news2">Đăng tin</a></li>
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
</header>
	
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
					<div class="product-details"><!--product-details-->
                                            <form id="demo-form2" action="admin/add" data-parsley-validate class="form-horizontal form-label-left" name="ok" enctype="multipart/form-data" method="post">
                                                <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên Sản Phẩm <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="name">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiêu Đề <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="title">
                                                  </div>
                                                </div>

                                                <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại Hàng</label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                          <input type="radio" name="product_pid" value="1"> &nbsp; Giầy Dép &nbsp;
                                                        </label>
                                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                          <input type="radio" name="product_pid" value="2" checked="">Quần Áo &nbsp;
                                                        </label>
                                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                          <input type="radio" name="product_pid" value="3"> Phụ Kiện &nbsp;
                                                        </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Giá Sản Phẩm <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="price">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Địa Chỉ Shop <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="address">
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Thông Tin Sản Phẩm <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <textarea type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="content" style="height: 200px"></textarea>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Images</label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input id="middle-name"  type="file" name="images" required="required">
                                                  </div>
                                                </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success" name="ok">Submit</button>
                                              </div>
                                            </div>

                                          </form>
					</div><!--/product-details-->
					<div id="fb-root"></div>
                                            <script>(function(d, s, id) {
                                              var js, fjs = d.getElementsByTagName(s)[0];
                                              if (d.getElementById(id)) return;
                                              js = d.createElement(s); js.id = id;
                                              js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6";
                                              fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                            </script>
                                        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="840" data-numposts="1">
                                        
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
					<p class="pull-right">Designed by <span><a target="_blank" href="welcome">Nguyen Cong Dat</a></span></p>
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
    <script type="text/javascript">
        $(
            function () {
              $('li').on('click', function() {
                var selectedCssClass = 'selected';
                var $this = $(this);
                $this.siblings('.' + selectedCssClass).removeClass(selectedCssClass);
                $this
                  .addClass(selectedCssClass)
                  .parent().addClass('vote-cast');
              });
            }
        );

    </script>
<script type='text/javascript'>
    var onWebChat={ar:[], set: function(a,b){if (typeof onWebChat_==='undefined'){this.ar.
    push([a,b]);}else{onWebChat_.set(a,b);}},get:function(a){return(onWebChat_.get(a));},w
        :(function(){ var ga=document.createElement('script'); ga.type = 'text/javascript';ga.
        async=1;ga.src='//www.onwebchat.com/clientchat/3e3ce1fd20f7d254095f800fb2e0fab7/1/1';
        var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})()}
</script>
</body>
</html>/

