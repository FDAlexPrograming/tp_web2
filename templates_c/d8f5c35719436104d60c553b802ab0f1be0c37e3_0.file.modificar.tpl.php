<?php
/* Smarty version 3.1.39, created on 2021-09-24 02:19:49
  from 'C:\xampp\htdocs\tp_web_1\templates\modificar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d19a5438d72_14020895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8f5c35719436104d60c553b802ab0f1be0c37e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_web_1\\templates\\modificar.tpl',
      1 => 1632442420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d19a5438d72_14020895 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>modificar</title>
</head>
<body>
	<form class="form-modificar">
		<select class="form_input input_equipo" id="editar-equipo" >
			<option > Elegir Equipo</option>
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
			<option>Huracán</option>
			<option>Independiente</option>
			<option>Newell's Old Boys</option>
			<option>Talleres</option>
		</select>
		<input id="editar-cantidad" class="form_input input_cantidad" type="number" placeholder="Cantidad">
		<button class="btn-modificar btns	"></button>
	</form>
</body>
</html>
<?php }
}
