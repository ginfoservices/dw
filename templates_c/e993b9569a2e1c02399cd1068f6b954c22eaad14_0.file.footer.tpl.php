<?php
/* Smarty version 3.1.33, created on 2019-03-10 11:38:39
  from 'C:\xampp\htdocs\dw\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c84e92f5dfd08_23800664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e993b9569a2e1c02399cd1068f6b954c22eaad14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dw\\templates\\footer.tpl',
      1 => 1552214318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c84e92f5dfd08_23800664 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 
 
 
 <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
$(document).ready(function(){

	$('#display_error').hide();


	$("#login").submit(function(e){
		e.preventDefault();

$.ajax({
		type: "post",
		url: "<?php echo $_smarty_tpl->tpl_vars['process']->value;?>
",
		data: $('#login').serialize(),
		dataType: "text",
		success: function (response) {
			
	
	if(response == 'true'){

				window.location.replace('admin.php');

			} 
			else 
			{
												window.location.replace('index.php');

									$('#display_error').alert();

					window.setTimeout(function(){
					$('#display_error').hide();
					}, 2000);


				

			} 
		}
	});


	});
	
	



});
	<?php echo '</script'; ?>
>
	
  </body>
</html><?php }
}
