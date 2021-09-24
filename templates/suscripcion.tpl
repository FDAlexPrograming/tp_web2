{include file="templates/header.tpl"}

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
 
   <script src="js/suscripcion.js"></script>

   {include file="templates/footer.tpl"};