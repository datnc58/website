<?php
/* Smarty version 3.1.29, created on 2016-02-28 14:01:26
  from "C:\xampp\htdocs\ci\ci\application_admin\views\news\news.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d2efa6365ca6_01917194',
  'file_dependency' => 
  array (
    'c3e55eb7de29adc104b7af67baa0c90f118998fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\ci\\application_admin\\views\\news\\news.tpl',
      1 => 1456664203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d2efa6365ca6_01917194 ($_smarty_tpl) {
?>
<table border="1px">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>title</th>
            <th>Desc</th>
            <th>Content</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->desc;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->content;?>
</td>
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
    <i><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</i><?php }
}
