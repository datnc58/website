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
    <title>Home | My-Sales</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/prettyPhoto.css" rel="stylesheet">
    <link href="asset/css/price-range.css" rel="stylesheet">
    <link href="asset/css/animate.css" rel="stylesheet">
	<link href="asset/css/main.css" rel="stylesheet">
	<link href="asset/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="asset/js/html5shiv.js"></script>
    <script src="asset/js/respond.min.js"></script>
    <![endif]-->       
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
                                        <li><a href="admin/detail">Danh sách các bài đã đăng</a></li>
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
            <div class="col-sm-12" id="manins">
                <table id="example" class="table table-striped responsive-utilities jambo_table bulk_action" style="background-color: #f9f9f9">
                    <thead style="background-color: #FE980F">
                      <tr class="headings">
                        <th>
                          <input type="checkbox" id="check-all" class="flat">
                        </th>
                        <th class="column-title"> ID danh muc </th>
                        <th class="column-title"> Tên Sản Phẩm </th>
                        <th class="column-title"> Giá Sản Phẩm </th>
                        <th class="column-title"> Images </th>
                        <th class="column-title"> Date </th>
                        <th class="column-title" style="width: 80px"> tieu de </th>
                        <th class="column-title"> Noi dung </th>
                        <th class="column-title no-link last"><span class="nobr">Thao Tác</span>
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($key as $val):?>
                        <tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                            </td>
                        <td class="column-title"> <?php echo $val->product_pid?></td>
                        <td class="column-title"> <?php echo $val->product_name?> </td>
                        <td class="column-title"> <?php echo $val->product_price?> </td>
                        <td class="column-title"> <img src="uploads/<?php echo $val->product_images?>" style="width: 100px; height: 100px;"/></td>
                        <td class="column-title"> <?php echo $val->product_date?> </td>
                        <td class="column-title"> <?php echo $val->product_title?> </td>
                        <td class="column-title"> <?php echo $val->product_content?> </td>
                        <td>
                          <a href="admin/pheduyet/<?php echo $val->product_id?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> phe duyet </a>
                          <a href="admin/delete/<?php echo $val->product_id?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>

                        </tr>
                        <?php endforeach;?>
                    </tbody>
                  </table>
            </div><!--features_items-->
        </div>
        <div class="pagination-area">

            <ul class="pagination">

                <?php echo $pagination?>
            </ul>
        </div>
    </section>

    <footer id="footer"><!--Footer-->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 My-SALE Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.facebook.com/congdatkute">Nguyen Cong Dat</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->

  
    <script src="asset/js/jquery.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/jquery.scrollUp.min.js"></script>
	<script src="asset/js/price-range.js"></script>
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

