<?php
include_once("../db/conexao.php");
error_reporting(0);
session_start();

$_login = $_SESSION['email'];
$_password = $_SESSION['password']; 



$_nome = $_POST['nome'];
$_sobrenome = $_POST['sobrenome'];
$_data = $_POST['data'];
$_senha = $_POST['password'];


$_sql = "UPDATE usuario SET nome ='$_nome' , senha = '$_senha' , date = '$_data' , Sobrenome = '$_sobrenome' WHERE email = '$_login'";

$_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());

if($_query)
{
    header("location:../html/sucesso.html");
}
else
{
    header("location:../html/falhou.html");
}
?>