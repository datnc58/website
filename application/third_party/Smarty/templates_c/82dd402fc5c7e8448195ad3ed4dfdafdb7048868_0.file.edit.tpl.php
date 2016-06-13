<?php
/* Smarty version 3.1.29, created on 2016-02-29 09:55:53
  from "C:\xampp\htdocs\ci\ci\application_admin\views\news\edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d40799adf5d6_43331158',
  'file_dependency' => 
  array (
    '82dd402fc5c7e8448195ad3ed4dfdafdb7048868' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\ci\\application_admin\\views\\news\\edit.tpl',
      1 => 1456666249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d40799adf5d6_43331158 ($_smarty_tpl) {
?>
<form action="" method="POST" enctype="multipart/form-data">

    <label>Name</label>
    <input  name="txtName" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->title;?>
" />


    <label>title</label>
    <input  name="txtTitle"  value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->content;?>
"/>


    <label>content</label>
    <input  name="txtContent" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->desc;?>
"/>


    <label>description</label>
    <input name="txtDesc" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->ts;?>
"/>



    <button type="submit" >Update</button>
    <button type="reset" >Reset</button>
    <form><?php }
}
