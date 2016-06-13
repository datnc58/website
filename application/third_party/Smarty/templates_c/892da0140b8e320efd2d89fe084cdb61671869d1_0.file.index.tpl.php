<?php
/* Smarty version 3.1.29, created on 2016-03-27 05:12:01
  from "C:\xampp\htdocs\cuoiky\application\views\admin\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f74f819fbed3_11271257',
  'file_dependency' => 
  array (
    '892da0140b8e320efd2d89fe084cdb61671869d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cuoiky\\application\\views\\admin\\index.tpl',
      1 => 1459048317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f74f819fbed3_11271257 ($_smarty_tpl) {
?>
<html>
    <title></title>
    <body>
        <h1>abc</h1>
        <div id="fb-root"></div>
        
            <?php echo '<script'; ?>
>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        <?php echo '</script'; ?>
>
            
            <div class="fb-comments" data-href="<?php echo base_url('welcome');?>
" data-numposts="5">
            
            </div>
    </body>
</html><?php }
}
