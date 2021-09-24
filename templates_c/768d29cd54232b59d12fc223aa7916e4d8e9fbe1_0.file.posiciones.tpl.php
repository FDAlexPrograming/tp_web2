<?php
/* Smarty version 3.1.39, created on 2021-09-24 01:21:09
  from 'C:\xampp\htdocs\tp_web_1\templates\posiciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d0be5522865_99162994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '768d29cd54232b59d12fc223aa7916e4d8e9fbe1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_web_1\\templates\\posiciones.tpl',
      1 => 1632439080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614d0be5522865_99162994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="posiciones">
	
	<section class="contenido_posiciones">		
		<h1 class="local-champ">superliga argentina</h1>
		<table class="tabla-posiciones">
			<thead>
				<tr >
					<th>Posiciones</th>
					<th>Puntos</th>
					<th>GF</th>
					<th>GC</th>
					<th>PJ</th>
			  	</tr>
			</thead>
	   		<tbody>
				<tr >
					<td>Boca</td>
					<td>11</td>
					<td>9</td>
					<td>2</td>
					<td>4</td>
			  	</tr>
			  	<tr>
					<td>River</td>
					<td>10</td>
					<td>9</td>
					<td>5</td>
					<td>4</td>
				  </tr>
				  <tr>
					<td>Racing</td>
					<td>8</td>
					<td>6</td>
					<td>4</td>
					<td>4</td>
				  </tr>
				  <tr  >
					<td>Vélez Sarsfield</td>
					<td >8</td>
					<td >8</td>
					<td >5</td>
					<td >4</td>
				</tr>
				<tr  >
					<td >Argentinos Juniors</td>
					<td >7</td>
					<td >7</td>
					<td >3</td>
					<td >4</td>
				</tr>
				  <tr  >
					<td>Defensa y Justicia</td>
					<td>7</td>
					<td>4</td>
					<td>4</td>
					<td>4</td>
				</tr>
				  <tr>
					<td>Lanus</td>
					<td>6</td>
					<td>6</td>
					<td>5</td>
					<td>4</td>
				  </tr>
				  <tr>
					<td>Banfield</td>
					<td>5</td>
					<td>5</td>
					<td>4</td>
					<td>4</td>
				  </tr>
				  <tr>
					<td>Gimnasia Lp</td>
					<td>5</td>
					<td>6</td>
					<td>4</td>
					<td>4</td>
				  </tr>
		   </tbody>
	   </table>
	</section>   
    
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;<?php }
}
