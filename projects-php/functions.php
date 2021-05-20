<?php

echo "<pre>";

echo "######################";
echo "<br>";
echo "Função, procedimento e tudo o mais";
echo "<br>";
echo "######################";
echo "<br>";


// Função completa, com entrada e saída
function par_impar($num_entrada) {

  if($num_entrada % 2 == 0) {
    return "PAR";
  } else {
    return "IMPAR";
  }

  // Assim que a função encontra um RETURN ela retorna esse valor e SAI
  echo "ISSO NUNCA SERA EXECUTADO";

}


echo par_impar(3); // Chamando a função declarada acima

echo "<br>";
echo "######################";
echo "<br>";
echo "Exemplo com um for";
echo "<br>";


for ($i=0; $i < 10; $i++) {
  $aleatorio = rand();
  echo "O numero $aleatorio é " . par_impar($aleatorio);
  echo "<br>";
}

echo "<br>";
echo "######################";
echo "<br>";
echo "Exemplo com um for - PRIMO";
echo "<br>";


function eh_primo($entrada) {

  for ($i=2; $i < $entrada; $i++) { // Busca de todos os valores com inicio definido, até o valor iterado $entrada

    if($entrada % $i == 0) return "NAO PRIMO";

  }

  return "PRIMO";

}

for ($i=0; $i < 3; $i++) {
  $aleatorio = rand(10,20);
  echo "O numero $aleatorio é " . eh_primo($aleatorio);
  echo "<br>";
}






echo "<br>";
echo "######################";
echo "<br>";
echo "Exemplo com um for - PRIMO e PAR";
echo "<br>";

for ($i=0; $i < 3; $i++) {
  $aleatorio = rand();
  echo "O numero $aleatorio é " . eh_primo($aleatorio) . " e " . par_impar($aleatorio);
  echo "<br>";
}


// Procedimento, sem entrada nem saida nem nada

function separador() {

  echo "<br>";
  echo "######################";
  echo "<br>";

}

separador();

// Valores padrão - Só colocar um = na entrada

function separador_adv($texto = "") {

  echo "<br>";
  echo "######################";
  echo "<br>";
  echo $texto;
  echo "<br>";
  echo "######################";
  echo "<br>";

}

separador_adv();

// Valores Multiplos

function separador_masterBLASTER($texto = "", $texto2 = "") {

  echo "<br>";
  echo "######################";
  echo "<br>";
  echo $texto;
  echo "<br>";
  echo "######################";
  echo "<br>";
  echo $texto2;

}

separador_masterBLASTER("Texto 2");
separador_masterBLASTER();


 ?>
