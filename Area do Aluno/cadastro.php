<?php 
$servername = "127.0.0.1";
$database = "area_aluno";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);




$LOGIN1 = $_POST['LOGIN1'];
$SENHA = MD5($_POST['SENHA']);
$EMAIL = $_POST['EMAIL'];
$NOME = $_POST['NOME'];
$CPF = $_POST['CPF'];
$DDD = $_POST['DDD'];
$TELEFONE = $_POST['TELEFONE'];
//$ENDERECO = $_POST['ENDERECO'];
//$COMPLEMENTO = $_POST['COMPLEMENTO'];
//$BAIRRO = $_POST['BAIRRO'];
//$CEP = $_POST['CEP'];
$CIDADE = $_POST['CIDADE'];
$ESTADO = $_POST['ESTADO'];
//$query_select = "SELECT LOGIN FROM cad_aluno WHERE LOGIN = " .$LOGIN;
//$select = mysqli_query($query_select,$dbh);
//$array = mysqli_fetch_array($select);

$sql = "INSERT INTO cadastro (LOGIN1, SENHA, EMAIL, NOME, CPF, DDD, TELEFONE, CIDADE, ESTADO) 
VALUES ('$LOGIN1' , '$SENHA' , '$EMAIL' , '$NOME' , '$CPF' , '$DDD' , '$TELEFONE' , '$CIDADE' , '$ESTADO')";


mysqli_query($conn, $sql) ;

if (mysqli_query($conn, $sql)) {
  echo "<br>";
  echo "<P> CADASTRO EFETUADO COM SUCESSO </P>";

} else{
  echo "<br>";
  echo "ERRO, NÃO FOI POSSIVEL INSERIR NO BANCO DA DADOS";
}
?>
