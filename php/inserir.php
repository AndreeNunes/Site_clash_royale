<?php
include_once( "../db/conexao.php");

$_nome = $_POST['nome'];
$_sobrenome = $_POST['sobrenome'];
$_data = $_POST['data'];
$_email = $_POST['email'];
$_password = $_POST['password'];

echo $_nome;
echo $_sobrenome;
echo $_data;
echo $_email;
echo $_password;

$_sql = "INSERT INTO usuario (nome , sobrenome , date , email , senha) VALUES ('$_nome' , '$_sobrenome' , '$_data' , '$_email' , '$_password')";

$_query = mysqli_query($_conexao , $_sql) or die (mysqli_error());

if( $_query )
{
    header("location:../html/sucesso.html");
}
else
{
    header("location:../html/falhou.html");
}
?>