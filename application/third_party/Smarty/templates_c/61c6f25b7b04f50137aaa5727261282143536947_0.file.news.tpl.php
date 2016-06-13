<?php
/* Smarty version 3.1.29, created on 2016-03-17 04:46:41
  from "C:\xampp\htdocs\ci304\application_admin\views\news\news.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ea28a1694f05_10474492',
  'file_dependency' => 
  array (
    '61c6f25b7b04f50137aaa5727261282143536947' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci304\\application_admin\\views\\news\\news.tpl',
      1 => 1458151194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ea28a1694f05_10474492 ($_smarty_tpl) {
?>

<html>
    <head>
        <base href="<?php echo base_url();?>
" />
        <?php echo '<script'; ?>
 src="jquery.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <form action="" method="get" id="filter_form">
            <table>
                <tr>
                    <td>Tiêu đề</td>
                    <td><input type="text" name="filter_title"  value="<?php echo $_smarty_tpl->tpl_vars['filter_title']->value;?>
"/></td>
                    <td>Trạng thái</td>
                    <td>
                        <select name="filter_status">
                            <option value="">--Chọn--</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value === 0) {?>selected="selected"<?php }?>>Ẩn</option>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value == 1) {?>selected="selected"<?php }?>>Hiện</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Từ</td>
                    <td><input type="text" name="filter_start"  value="<?php echo $_smarty_tpl->tpl_vars['filter_start']->value;?>
" /></td>
                    <td>Đến</td>
                    <td><input type="text" name="filter_end" value="<?php echo $_smarty_tpl->tpl_vars['filter_end']->value;?>
"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Lọc" /></td>
                </tr>
            </table>
        </form>


        <table border="1px">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['content']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->content;?>
</td>
                        <td><img  style="width: 250px;" src="admin/uploads/<?php echo $_smarty_tpl->tpl_vars['item']->value->image;?>
" /></td>
                        <td><a href="<?php echo base_url('news/edit');?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"> Edit</a></td>
                        <td> <a href="<?php echo base_url('news/delete');?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">Delete</a></td>
                    </tr> 
                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
            </tbody>
        </table>
        <i class="pagination"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</i>
        
        <?php echo '<script'; ?>
>
        $(function(){
            $(".pagination a").each(function(){
                $(this).attr('href', $(this).attr('href') + "?" + $("#filter_form").serialize());
            });
        });
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
