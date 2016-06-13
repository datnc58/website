<?php
/* Smarty version 3.1.29, created on 2016-03-06 12:30:12
  from "C:\xampp\htdocs\ci304\application_admin\views\news\add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc14c4276434_25046900',
  'file_dependency' => 
  array (
    'c413d789c5c72cbefc376ded9adc807305eb383c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci304\\application_admin\\views\\news\\add.tpl',
      1 => 1457263809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dc14c4276434_25046900 ($_smarty_tpl) {
?>
<html>
    <head>
        <title>Upload Form</title>
    </head>
    <body>

        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?>

        <form method="post" enctype="multipart/form-data">

            <input type="file" name="userfile" size="20" />

            <br /><br />

            <input type="submit" value="upload" name="sub" />

        </form>

    </body>
</html><?php }
}
