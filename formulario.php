<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Formulario.css">
</head>
<body> <h2>Formulario</h2>
	<div class="contenedor">
		<form action="incluir.php" method="post" name="formulario" id="formulario">
			<div class="contenedor-inputs">
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="email" name="correo" placeholder="Correo">
			
			<div class="sexo">
				<input type="radio" name="sexo" id="hombre" value="M">
				<label for="hombre">Hombre</label>
				<input type="radio" name="sexo" id="mujer" value="F">
				<label for="mujer">Mujer</label>
			</div>
			

			<div class="terminos">
				<input type="checkbox" name="terminos" id="terminos" value="Acep">
				<label for="terminos">Acepto los terminos</label>
					
			</div>
			
			<ul class="error" id="error"></ul>
			</div>
			<input type="submit" name="enviar">
		</form>
	</div>
	
	<script type="text/javascript">
		var formulario=document.getElementById('formulario')
			nombre=formulario.nombre
			correo=formulario.correo
			sexo=formulario.sexo
			terminos=formulario.terminos
			error=document.getElementById('error')

		function validarNombre(e) {
			if(nombre.value == '' || nombre.value == null){
				error.style.display = 'block';
				error.innerHTML += '<li>Por favor completa el nombre</li>';
				console.log('Por favor completa el nombre');

				e.preventDefault();
			}
			else{
				error.style.display = 'none';
			}
		}

		function validarCorreo(e) {
			if(correo.value == '' || correo.value == null){
				error.style.display = 'block';
				error.innerHTML += '<li>Por favor completa el correo</li>';
				console.log('Por favor completa el correo');

				e.preventDefault();
			}
			else{
				error.style.display = 'none';
			}
		}

		function validarSexo(e) {
			if(sexo.value == '' || sexo.value == null){
				error.style.display = 'block';
				error.innerHTML += '<li>Por favor selecciona el sexo</li>';
				console.log('Por favor selecciona el sexo');

				e.preventDefault();
			}
			else{
				error.style.display = 'none';
			}
			
		}

		function validarTerminos(e) {
			if(terminos.checked == false || terminos.checked ==null ){
				error.style.display = 'block';
				error.innerHTML += '<li>Por favor acepta los terminos y condiciones</li>';
				console.log('Por favor acepta los terminos y condiciones');

				e.preventDefault();
			}
			else{
				error.style.display = 'none';
			}
		}

		function validarForm(e){
			error.innerHTML = '';

			validarNombre(e);
			validarCorreo(e);
			validarSexo(e);
			validarTerminos(e);
		}
formulario.addEventListener("submit",validarForm);


	</script>
</body>
</html>