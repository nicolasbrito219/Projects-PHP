<?php
echo "<pre>";

echo "######################";
echo "<br>";
echo "Estruturas de Controle - DECISÃO";
echo "<br>";
echo "######################";
echo "<br>";

// IF - a mais básica e onipresente entre todas as linguagens de programação
// https://www.php.net/manual/pt_BR/control-structures.if.php

// Geração de dados para os exemplo será time
// https://www.php.net/manual/pt_BR/function.time
$time = time();

// Para descobrirmos se é par ou impar devemos avaliar o RESTO da divisão de um numero por 2
// Portanto, utilizaremos o operador % que é o referente a esta operaçãoptimize
// https://www.php.net/manual/pt_BR/language.operators.arithmetic.php


// https://www.php.net/manual/pt_BR/language.operators.comparison.php
// Operadores de comparação

echo "<br>";
echo "Numero Gerado:";
echo "<br>";
var_dump($time);

echo "<br>";
echo "Resto da divisão por 2";
echo "<br>";

$resto = $time % 2;

var_dump($resto);

// Decisão se é par ou se é impar

if ($resto > 0) {
  echo "<br>";
  echo "o número $time é ímpar"; // Concatenação sem o .
  echo "<br>";
}

if ($resto == 0) {
  echo "<br>";
  echo "o número $time é PAR"; // Concatenação sem o .
  echo "<br>";
}

// Porém podemos facilitar nosso trabalho e utilizar o SENÃO = ELSE

echo "######################";
echo "<br>";
echo "SE SENAO";
echo "<br>";
echo "######################";
echo "<br>";

echo "<br>";
echo "Geracao de numero aleatorio";
echo "<br>";

$aleatorio = rand(1111,9999) - rand(1111,9999);

// $aleatorio = 0; // Para testes

var_dump($aleatorio);

if ($aleatorio > 0) {
  echo "<br>";
  echo "o número $aleatorio é POSITIVO"; // Concatenação sem o .
  echo "<br>";
} else {
  echo "<br>";
  echo "o número $aleatorio é NEGATIVO"; // Concatenação sem o .
  echo "<br>";
}

echo "######################";
echo "<br>";
echo "SE SENAO - SENAO ... (elseif)";
echo "<br>";
echo "######################";
echo "<br>";
// https://www.php.net/manual/pt_BR/control-structures.elseif.php


echo "<br>";
echo "Geracao de numero aleatorio";
echo "<br>";

if ($aleatorio == 0) {
  echo "<br>";
  echo "o número $aleatorio é NEUTRO"; // Concatenação sem o .
  echo "<br>";
} else if($aleatorio > 0) {
  echo "<br>";
  echo "o número $aleatorio é POSITIVO"; // Concatenação sem o .
  echo "<br>";
} else {
  echo "<br>";
  echo "o número $aleatorio é NEGATIVO"; // Concatenação sem o .
  echo "<br>";
}

echo "######################";
echo "<br>";
echo "Switch";
echo "<br>";
echo "######################";
echo "<br>";
// https://www.php.net/manual/pt_BR/control-structures.switch.php

switch ($aleatorio) {
  case ($aleatorio > 0):
  {
    echo "<br>";
    echo "o número $aleatorio é POSITIVO"; // Concatenação sem o .
    echo "<br>";
  }

  break;

  case ($aleatorio < 0):
  {
    echo "<br>";
    echo "o número $aleatorio é NEGATIVO"; // Concatenação sem o .
    echo "<br>";
  }

  break;

  case ($aleatorio == 0):
  {
    echo "<br>";
    echo "o número $aleatorio é NEUTRO"; // Concatenação sem o .
    echo "<br>";
  }

  break;

}

 ?>
