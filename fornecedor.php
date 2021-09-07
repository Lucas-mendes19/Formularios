
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.form_forn{
			padding-top: 10px;
			background-color: red;
		}
		main{
			background-color: black;
		}
	</style>
</head>
<body>
	<main>
			<div style="width:760px; text-align: center; background-color: white; margin: auto; margin-top: 10%; ">
				<form method="POST" action="red_fornecedor.php">
				<fieldset id="form_forn">
					<div id="form">
						<label>Nome fornecedor</label>
						<input type="text" name="nome_forn" required>
						<label>CNPJ</label>
						<input type="text" name="cnpj_forn" required>
						<label>Endereço</label>
						<input type="text" name="end_forn">
					</div>
				</fieldset id="form_forn">
				<fieldset>
					<div id="form">
						<label>Numero</label>
						<input type="text" name="endnum_forn">
						<label>Bairro</label>
						<input type="text" name="bairro_forn">
						<label>CEP</label>
						<input type="text" name="cep_forn">
					</div>
				</fieldset>
				<fieldset class="form_forn">
					<div id="form">
						<label>Contato</label>
						<input type="text" name="contato_forn">
						<label>Telefone</label>
						<input type="text" name="tell_forn">
						<label>Inscrição</label>
						<input type="text" name="insc_forn" required>
					</div>
				</fieldset>
				<fieldset>
					<div style="text-align: right;">
						<input type="submit" name="" value="Cancelar" >
						<input type="submit" name="" value="Enviar">
					</div>
				</fieldset>
				</form>
			</div>


	</main>
	<footer></footer>
</body>
</html>