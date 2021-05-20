<?php

echo "<pre>";

echo "######################";
echo "<br>";
echo "Aplicações de IF";
echo "<br>";
echo "######################";
echo "<br>";

// isset
// https://www.php.net/manual/pt_BR/function.isset


if(isset($_GET['teste'])) {
  echo "ok, variavel iniciada";
  echo "<br>";
  var_dump($_GET['teste']);
}
else echo "variavel não iniciada";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "######################";
echo "<br>";
echo "Estruturas de controle - Repeticao";
echo "<br>";
echo "######################";
echo "<br>";


// https://www.php.net/manual/pt_BR/control-structures.for.php


$arr = array();

for ($i=0; $i < 10; $i++) {

  echo "Adicionando um valor em um array <br>";

  $arr[] = ($i ** 2) + 128;
}


// var_dump($arr); Var dump retirado para evitar confusao

echo "<br>";
echo "######################";
echo "<br>";
echo "Lendo o array usando FOR";
echo "<br>";
echo "######################";
echo "<br>";

for ($i=0; $i < 10; $i++) {
  echo "O valor da posição $i do array é $arr[$i] <br>";
}

echo "<br>";
echo "######################";
echo "<br>";
echo "Lendo o array usando FOREACH";
echo "<br>";
echo "######################";
echo "<br>";

//https://www.php.net/manual/pt_BR/control-structures.foreach.php

foreach ($arr as $key => $value) {
  echo "O valor da posição $key do array é $value ATRAVES DO FOREACH <br>";
}

echo "<br>";
echo "######################";
echo "<br>";

foreach ($_GET as $key => $value) {
  echo "O valor da posição $key do array _GET é $value ATRAVES DO FOREACH <br>";
}

echo "<br>";
echo "######################";
echo "<br>";
echo "Manipulando uma sequencia Fibonacci";
echo "<br>";
echo "######################";
echo "<br>";

// https://pt.wikipedia.org/wiki/Sequ%C3%AAncia_de_Fibonacci

// Criando o ARRAY com a sequencia da paranoia
$fibo = array();
$fibo[0] = 0;
$fibo[1] = 1;

for ($i=2; $i < 50; $i++) {

  $fibo[$i] = $fibo[$i-1] + $fibo[$i-2];
}

var_dump($fibo);

// Verificando quais sao pares e quais sao imapres

$impar = array();
$par = array();

foreach ($fibo as $key => $value) {

  if($value % 2 == 0) {
    $par[] = $value;
  } else {
    $impar[] = $value;
  }
 // break; // QUEBRA O LACO https://www.php.net/manual/pt_BR/control-structures.break.php
}

var_dump($par);
var_dump($impar);


// https://www.php.net/manual/pt_BR/control-structures.while.php

// https://www.php.net/manual/pt_BR/control-structures.do.while.php


 ?>
