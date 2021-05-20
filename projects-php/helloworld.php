<?php

// Objetivo - Printar HELLO WORLD no browser CLIENTE!
// echo() https://www.php.net/manual/pt_BR/function.echo.php

echo "######################";
echo "<br>";
echo "EXEMPLO PHP HELLO WORLD";
echo "<br>";
echo "######################";
echo "<br>";

echo "hello world";
echo "<br>";
echo "SEGUNDO ECHO";


echo "<br>";
echo "<br>";
echo "<br>";

echo "######################";
echo "<br>";
echo "Exemplo de conteúdo ativo em PHP";
echo "<br>";
echo "######################";
echo "<br>";
echo "<br>";


// Escolhendo um numero aletaório usando rand()
// https://www.php.net/manual/pt_BR/function.rand

$variavel_num1 = rand();
$variavel_num2 = rand();

echo "<br>";
echo "var1: " . $variavel_num1;
echo "<br>";
echo "var2: " . $variavel_num2;
echo "<br>";
echo "As duas na mesma linha | var1: " . $variavel_num1 . " | var2: " . $variavel_num2;
echo "<br>";
echo "<br>";
echo "<br>";

echo "Soma dos dois: ";
echo "<br>";
$soma = $variavel_num1 + $variavel_num2;
echo $soma;

//CONTINUE DAQUI SE QUISER OU FACA UM ARQUIVO NOVO


session_start();

var_dump($_SESSION);



 ?>
