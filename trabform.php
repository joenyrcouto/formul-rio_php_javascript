<!DOCTYPE html>
<html>
<head>
	<title>Trabalho de Joenyr</title>
</head>
<body>
	<div>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<fieldset>
				<legend style="text-align: center;"><h2>Recebe</h2></legend>
			<label for="texto1">Texto 1:</label>
			<input type="text" id="texto1" name="texto1"><br>

			<label for="texto2">Texto 2:</label>
			<input type="text" id="texto2" name="texto2"><br>

			<label for="texto3">Texto 3:</label>
			<input type="text" id="texto3" name="texto3"><br>

			<label for="texto4">Texto 4:</label>
			<input type="text" id="texto4" name="texto4"><br>

			<label for="busca">Busca:</label>
			<input type="text" id="busca" name="busca"><br>

			<label for="troca">Troca:</label>
			<input type="text" id="troca" name="troca"><br>

			<label for="mes">Mês:</label>
			<select id="mes" name="mes">
				<option value=""></option>
				<option value="Janeiro">Janeiro</option>
				<option value="Fevereiro">Fevereiro</option>
				<option value="Março">Março</option>
				<option value="Abril">Abril</option>
				<option value="Maio">Maio</option>
				<option value="Junho">Junho</option>
				<option value="Julho">Julho</option>
				<option value="Agosto">Agosto</option>
				<option value="select">Setembro</option>
				<option value="Outubro">Outubro</option>
				<option value="Novembro">Novembro</option>
				<option value="Dezembro">Dezembro</option>
			</select>

			<label for="ano">Ano:</label>
			<select name="ano" id="ano">
				<option value=""></option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
			</select><br>

			<fieldset>
				<legend>Período:</legend>
				<label><input type="radio" name="periodo" value="1">1°</label>
				<label><input type="radio" name="periodo" value="2">2°</label>
				<label><input type="radio" name="periodo" value="3">3°</label>
				<label><input type="radio" name="periodo" value="4">4°</label>
				<label><input type="radio" name="periodo" value="5">5°</label>
			</fieldset>

			<fieldset>
				<legend>Gosta de:</legend>
				<label><input type="checkbox" name="gostaDe[]" value="livros">Livros</label>
				<label><input type="checkbox" name="gostaDe[]" value="revista">Revistas</label>
				<label><input type="checkbox" name="gostaDe[]" value="jogos">Jogos</label>
			</fieldset>

		</fieldset>
			<fieldset>
				<legend style="text-align: center;"><h2>Resultados</h2></legend>
				<?php
if (isset($_POST['submit'])) {
    $texto1 = $_POST['texto1'];
		$texto2 = $_POST['texto2'];
		$texto3 = $_POST['texto3'];
		$texto4 = $_POST['texto4'];
		$busca = $_POST['busca'];
		$troca = $_POST['troca'];
		$ano = $_POST['ano'];
		$mes = $_POST['mes'];
		if (isset($_POST['periodo'])) {
			$periodo = $_POST['periodo'];
		} else {
			$periodo = "não selecionado";
		}
		
		if (isset($_POST['gostaDe'])) {
			$gosto = $_POST['gostaDe'];
		} else {
			$gosto = array("não selecionado");
		}
		$textos = [$texto1, $texto2, $texto3, $texto4];

		$resultados = "Join: " . join(" ", $textos) . "<br>" . "Texto1_MAISC: " . strtoupper($texto1) . "<br>" . "QTD caracter(textos): " . strlen($texto1)+strlen($texto2)+strlen($texto3)+strlen($texto4) . "<br>" . "TEXTO1_substituída: " . str_replace($busca, $troca, $texto1) . "<br>" . "<br>" . "Ano selecionado: " . $ano . "<br>" . "Mês selecionado: " . $mes . "<br>" . "Período selecionado: " . $periodo . "<br>" . "Gosta de: " . implode(", ", $gosto);

		// Imprime o HTML com o resultado
		echo "<p id='resultado'>" . $resultados . "</p>";
}
?>
		<br>
		<button name="submit" type="submit">Atualizar</button>
		<button name="voltar" type="reset">Voltar</button>
			</fieldset>
		</form>
	</div>
</body>
</html>