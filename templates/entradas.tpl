
{include file="templates/header.tpl"}
<body class="entradas">
	<section class="campo_medio">
		<form class="form_boletos" name="form">
			<h1 class="suscribete_title">adquiera su entrada aqui</h1>
			<select class="form_input" name="equipo">
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

			<input class="form_input cantidad" name="cantidad" type="number" placeholder="Cantidad">

			<div class="info-pago">
				<p  id="total_pagar_y_alert"></p>
				<a href="#tabla"><i class="fas fa-cart-plus"></i></a>
			</div>

			<div class="container-spiner">
				<div class="spiner"></div>
			</div>
			
			<div class="buttons_container" >
				<button name="btn-comprar" type="submit" class="btns"> Agregar</button>
				<button id="btn-comprar-3" type="button"  class="btns"> Comprar x3</button>
			</div>
		</form>
	</section>

	<section>
		<div class="actualizar-tabla">
		<a href="#tabla"<button  class="btn-tabla"><i class="fas fa-table"></i></button></a>
		</div>

		<div class="container-spiner">
				<div id="multiuso">	</div>
		</div>
	</section>
              
	<section  id="tabla"class="tabla_section">
		<table >
			<thead>
				<tr>
					<th> equipo </th>
					<th> cantidad </th>
					<th> precio </th>
				</tr>
			</thead>
			<tbody class="filas">
			
			</tbody>
		</table>
	</section>

	<section class="btn_avanzar_retroceder">
		<button id="btn-anterior" class="btns"> <i class="fas fa-angle-left"></i></button>
		<button id="btn-siguiente" class="btns"> <i class="fas fa-angle-right"></i></button>
	</section>
    <script src="js/entradas.js"></script>
    {include file="templates/footer.tpl"};