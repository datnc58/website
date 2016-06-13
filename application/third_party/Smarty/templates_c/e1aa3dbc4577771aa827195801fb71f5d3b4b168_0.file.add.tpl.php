<?php
/* Smarty version 3.1.29, created on 2016-03-01 09:08:09
  from "C:\xampp\htdocs\ci\ci\application_admin\views\news\add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d54de94c71c4_33390142',
  'file_dependency' => 
  array (
    'e1aa3dbc4577771aa827195801fb71f5d3b4b168' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\ci\\application_admin\\views\\news\\add.tpl',
      1 => 1456819687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d54de94c71c4_33390142 ($_smarty_tpl) {
?>
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
                    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
" />
                    <?php echo validation_errors();?>

                    <table>
                        <tr>
                            <td>     
                                <label>Name</label>
                            </td>
                            <td>
                                <input class="form-control" name="txtName" placeholder="Please Enter  Name" />
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label>title</label>
                            </td>
                            <td>
                                <input class="form-control" name="txtTitle" placeholder="Please Enter title" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>content</label>
                            </td>
                            <td>
                                <input class="form-control" name="txtContent" placeholder="Please Enter Content" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>description</label>
                            </td>
                            <td>
                                <input class="form-control" name="txtDesc" placeholder="Please Enter Description" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <button type="submit" class="btn btn-default">Category Add</button>
                            </td>
                            <td>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </td>
                        </tr>
                    </table>
                    <form>
<?php }
}
