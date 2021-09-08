<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="fornecedor.css" media="screen">
	<title></title>
	<style type="text/css">
		.in_mar{
	background: #bdbebd;
	margin-left: 1px;
	margin-right: 3px;
	border: 0px;
	border-radius: 2px;
}
	</style>
</head>
<body>
	<main>
			<div class="principal" style="width:75%; text-align: center; background-color: #d3d3d3; margin: auto; margin-top: 10%; padding: 40px; border-radius: 10px;">
				<form method="POST" action="red_fornecedor.php">
				<fieldset class="form_forn">
					<div id="form">
						<label>Fornecedor</label>
						<input class="in_mar" type="text" name="nome_forn" required>
						<label>CNPJ</label>
						<input class="in_mar" type="text" name="cnpj_forn" required>
						<label>Endereço</label>
						<input class="in_mar" type="text" name="end_forn">
					</div>
				</fieldset id="form_forn">
			</br>
				<fieldset class="form_forn">
					<div id="form">
						<label>Numero</label>
						<input class="in_mar" type="text" name="endnum_forn">
						<label>Bairro</label>
						<input class="in_mar" type="text" name="bairro_forn">
						<label>CEP</label>
						<input class="in_mar" type="text" name="cep_forn">
					</div>
				</fieldset>
			</br>
				<fieldset class="form_forn">
					<div id="form">
						<label>Contato</label>
						<input class="in_mar" type="text" name="contato_forn">
						<label>Telefone</label>
						<input class="in_mar" type="text" name="tell_forn">
						<label>Inscrição</label>
						<input class="in_mar" type="text" name="insc_forn" required>
					</div>
				</fieldset>
			</br>
				<fieldset>
					<div id="button" style="text-align: right; ">
						<input style="background: #808080;" type="submit" name="" value="Cancelar" >
						<input style="background: #808080;" type="submit" name="" value="Enviar">
					</div>
				</fieldset>
				</form>
			</div>
	</main>
	<footer></footer>
</body>
</html>
