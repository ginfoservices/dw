<?php
/* Smarty version 3.1.33, created on 2019-03-10 11:43:10
  from 'C:\xampp\htdocs\dw\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c84ea3e51d430_99240015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3039cd1c2d01e5c7772285c698ce4fee4e67a722' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dw\\templates\\index.tpl',
      1 => 1552214589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c84ea3e51d430_99240015 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container" id='index'>
<div class="row">
<div class="col-4">

<?php if ($_smarty_tpl->tpl_vars['error']->value != false) {?>
<div class="alert alert-danger" role="alert" id="display_error"><?php echo $_smarty_tpl->tpl_vars['er_desc']->value;?>
</div>


<?php }?>
		<form id="login">
			<label for="username">Username</label><input name="username" class="form-control" type="text">
			<label for="password">Password</label><input name="password" class="form-control" type="password">
			<button type="submit" class="btn btn-secondary">Login</button>
		</form>	
</div></div>


</div>





<?php }
}
