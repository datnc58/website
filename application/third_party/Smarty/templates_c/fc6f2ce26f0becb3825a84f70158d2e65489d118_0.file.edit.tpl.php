<?php
/* Smarty version 3.1.29, created on 2016-03-06 13:54:26
  from "C:\xampp\htdocs\ci304\application_admin\views\news\edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc2882bb08d5_99960104',
  'file_dependency' => 
  array (
    'fc6f2ce26f0becb3825a84f70158d2e65489d118' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci304\\application_admin\\views\\news\\edit.tpl',
      1 => 1457268865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dc2882bb08d5_99960104 ($_smarty_tpl) {
?>
<html>
    <head>
        <title>Upload Form</title>
        <base href="<?php echo base_url();?>
" />
        <?php echo '<script'; ?>
 src="jquery.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <form action="" method="POST" id="frm-edit" style="border:1px solid #ccc;">
            <label>Title</label>
            <input name="txtTitle" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->title;?>
" />
            <label>Image</label>
            <a href="javascript:;" class="upload">Upload</a>
            <div id="photo-holder"></div>
            <input type="hidden" name="image" id="hid-image" />
            <label>Content</label>
            <input  name="txtContent"  value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->content;?>
" />
            <button type="submit">Update</button>
            <button type="reset">Reset</button>
        </form>
        <form id="upload_form" action="news/upload" method="post" enctype="multipart/form-data" target="iframe_upload">
            <input type="file" name="userfile" size="20" />
            <br /><br />
            <input type="submit" value="upload" name="sub" /> 
        </form>

        <iframe name="iframe_upload" id="iframe_upload" src="javascript:;"></iframe>
        <?php echo '<script'; ?>
>
            function finishUpload(url){
                $("#photo-holder").html('<img src="uploads/' + url + '" />');
                $("#hid-image").val(url);
            }
        <?php echo '</script'; ?>
>
    </body>
</html>

<?php }
}
