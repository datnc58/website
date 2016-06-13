<?php
/* Smarty version 3.1.29, created on 2016-02-21 14:25:55
  from "C:\xampp\htdocs\ci\ci\application\views\admin\add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c9bae3afa7a7_48290237',
  'file_dependency' => 
  array (
    '45750e1c64d0058697bbe36b9b791f732d53e904' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\ci\\application\\views\\admin\\add.tpl',
      1 => 1456061153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c9bae3afa7a7_48290237 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <base href="<?php echo base_url();?>
">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>

        <link href="asset/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="asset/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="asset/admin/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="asset/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- DataTables CSS -->
        <link href="asset/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="asset/admin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Admin Area</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">List Category</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Category</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">List Product</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Product</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">List User</a>
                                    </li>
                                    <li>
                                        <a href="#">Add User</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Category
                                <small>Add</small>
                            </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        <div class="col-lg-7" style="padding-bottom:120px">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="txtName" placeholder="Please Enter  Name" />
                                </div>
                                <div class="form-group">
                                    <label>title</label>
                                    <input class="form-control" name="txtTitle" placeholder="Please Enter title" />
                                </div>
                                <div class="form-group">
                                    <label>content</label>
                                    <input class="form-control" name="txtContent" placeholder="Please Enter Content" />
                                </div>
                              <div class="form-group">
                                    <label>description</label>
                                    <input class="form-control" name="txtDesc" placeholder="Please Enter Description" />
                                </div>
                           
                                <button type="submit" class="btn btn-default">Category Add</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                                <form>
                                    </div>
                                    </div>
                                    <!-- /.row -->
                                    </div>
                                    <!-- /.container-fluid -->
                                    </div>
                                    <!-- /#page-wrapper -->

                                    </div>
                                    <!-- /#wrapper -->

                                    <!-- jQuery -->
                                    <?php echo '<script'; ?>
 src="asset/admin/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

                                    <!-- Bootstrap Core JavaScript -->
                                    <?php echo '<script'; ?>
 src="asset/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

                                    <!-- Metis Menu Plugin JavaScript -->
                                    <?php echo '<script'; ?>
 src="asset/admin/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

                                    <!-- Custom Theme JavaScript -->
                                    <?php echo '<script'; ?>
 src="asset/admin/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

                                    <!-- DataTables JavaScript -->
                                    <?php echo '<script'; ?>
 src="asset/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 src="asset/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

                                    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
                                    
                                        <?php echo '<script'; ?>
>
                                            $(document).ready(function () {
                                                $('#dataTables-example').DataTable({
                                                    responsive: true
                                                });
                                            });
                                        <?php echo '</script'; ?>
>
                                        
</body>

</html>
<?php }
}
