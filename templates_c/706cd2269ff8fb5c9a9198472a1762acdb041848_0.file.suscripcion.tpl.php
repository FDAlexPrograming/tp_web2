<?php
/* Smarty version 3.1.39, created on 2021-09-24 01:16:00
  from 'C:\xampp\htdocs\tp_web_1\templates\suscripcion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d0ab0868e77_65641490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '706cd2269ff8fb5c9a9198472a1762acdb041848' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_web_1\\templates\\suscripcion.tpl',
      1 => 1632438959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614d0ab0868e77_65641490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<section class="campo_medio">
		<form class="form_suscripcion">
			<h1 class="suscribete_title">Suscribete para no perderte los resultados</h1>
			<input class="form_input"  type="text" placeholder="Nombre" required>
			<input class="form_input" type="email" placeholder="Email" required>
		
			<select class="equipo_main" >
				<option>San Lorenzo</option>
				<option>Boca Junior</option>
				<option>River Plate</option>
				<option>Defensa y Justicia</option>
				<option>Racing Club</option>
				<option>Argentinos Juniors</option>
				<option>Estudiantes</option>
				<option>Olímpo</option>
				<option>Aldosivi</option>
				<option>Atlético Tucumán</option>
				<option>Banfield</option>
				<option>Colón</option>
				<option>Huracán</option>
				<option>Independiente</option>
				<option>Lanús</option>
				<option>Newell's Old Boys</option>
				<option>Talleres</option>
			</select>

			<div class="captcha-container">   
				<p id="captcha-main"></p>
				<input id="refresh" type="button" value="refrescar">
			</div>	
				
			<input id="captcha-usuario" type="text" >
			<input id="btn-captcha"  type="button" value="Confirmar Captcha">
				<p id="alert-captcha"></p>
			<input id="btn-enviar" class="incorrect_captcha" type="submit" value="Confirmar suscripción">
		</form>
	</section>

	<footer>
		<section >
			<p class="contact_footer"> Contacto</p>
			<p class="contacto_content"> +54 0 2923-518084</p>
			<p class="contacto_content"><i class="fas fa-envelope-square "></i>Email:  info@fichajes.com</p>
		</section>
 
   <?php echo '<script'; ?>
 src="js/suscripcion.js"><?php echo '</script'; ?>
>

   <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;<?php }
}
