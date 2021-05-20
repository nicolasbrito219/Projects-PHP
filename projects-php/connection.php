<?php
define('HOST', "localhost");
define('USER', "test");
define('PASS', "");
define('DB', "project");
define('PORTA', "3333");

$con = mysqli_connect(HOST, USER, PASS, DB, PORTA)
or die('Não foi possivel conectar');

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$sql = "insert into cliente values (default,'$nome',$idade)";

$resultado = mysqli_query($con, $sql);

mysqli_close($con);
?>