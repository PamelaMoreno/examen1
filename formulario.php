<!DOCTYPE html>
 <html>
	<head> 
		<meta charset="utf-8">
	</head>
	<body>
		<a href="index.php">Página principal</a>
		<p>Para realizar una conversión 
		favor de ingresar los siguientes datos: </p>
		<form name="formulario" action="converter.php" method="post">
			<label for="unidad">Unidad a convertir:</label>
			<input type="text" name="unidad"><br />
			<label for="opciones">Convertir de:</label>
			<select name="opciones" id="opciones">
			<option selected>Seleccione una opción</option>
			 <option value="var1">mililitros a onzas fluidas</option>
			 <option value="var2">metros a yardas</option>
			 <option value="var3">gramos a libras</option>
			 <option value="var4">celcius a farenheit</option>
			 <option value="var5">kilómetros a millas</option>
			 <option value="var6">pesos a libras esterlinas</option>
			</select>
			<br />
			<input type="submit" value="Convertir">
		 	<br /> 
			<br />
			<label for="resultado">Resultado: </label>
		</form>
	</body>
 </html>
