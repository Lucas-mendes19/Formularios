<?php
include("conexao_bd.php");
$nome_forn = $mysqli->real_escape_string(isset($_POST['nome_forn'])?$_POST['nome_forn']:null);
$cnpj_forn = $mysqli->real_escape_string(isset($_POST["cnpj_forn"])?$_POST["cnpj_forn"]:null);
$end_forn = $mysqli->real_escape_string(isset($_POST["end_forn"])?$_POST["end_forn"]:null);
$endnum_forn = $mysqli->real_escape_string(isset($_POST["endnum_forn"])?$_POST["endnum_forn"]:null);
$bairro_forn = $mysqli->real_escape_string(isset($_POST["bairro_forn"])?$_POST["bairro_forn"]:null);
$cep_forn = $mysqli->real_escape_string(isset($_POST["cep_forn"])?$_POST["cep_forn"]:null);
$contato_forn = $mysqli->real_escape_string(isset($_POST["contato_forn"])?$_POST["contato_forn"]:null);
$tell_forn = $mysqli->real_escape_string(isset($_POST["tell_forn"])?$_POST["tell_forn"]:null);
$insc_forn = $mysqli->real_escape_string(isset($_POST["insc_forn"])?$_POST["insc_forn"]:null);
$posts = array($nome_forn,$cnpj_forn,$end_forn,$endnum_forn,$bairro_forn,$cep_forn,$contato_forn,$tell_forn,$insc_forn);

$sql = "INSERT INTO Fornecedor(fornecedor, endereco, numendereco,bairro,cep,contato,cnpj,insc,tel) VALUES ('$nome_forn', '$cnpj_forn', '$end_forn', '$endnum_forn','$bairro_forn','$cep_forn','$contato_forn','$tell_forn','$insc_forn')";
$result = $mysqli->query($sql);	
if ($result === TRUE) {?>
	<script>alert("Criado com sucesso") </script>
<?php unset($_POST['nome_forn']);
	header('location: fornecedor.php');
}else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
