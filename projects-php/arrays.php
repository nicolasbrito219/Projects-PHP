<?php
echo "<pre>";

echo "######################";
echo "<br>";
echo "Arrays, Requisições e Formulários";
echo "<br>";
echo "######################";
echo "<br>";


$unitaria = 222 . "texto"; // O ponto significa CONCATENAR (JUNTAR)
echo $unitaria; // Aqui eu mando a variável para o Browser (cliente)

echo "<br>";

// O que sào Arrays em php
// https://www.php.net/manual/pt_BR/language.types.array.php
$conjunto = array(); // Declara a variável como array, embora seja "opcional"

$conjunto['matricula'] = 20200901;
$conjunto['nome'] = "Yuri Sá";

// Mostrando o conteúdo do array
echo "<br>";
echo "Array Associativo";
echo "<br>";
var_dump($conjunto);
echo "<br>";
echo "<br>";

// Printando a POSICAO DO ARRAY
echo $conjunto['nome'];

echo "<br>";
echo "Array indexado";
echo "<br>";
// Arrays indexados
$indexado = array(); // Declara a variável como array, embora seja "opcional"

$indexado[0] = 20200901;
$indexado[1] = "Nick";

var_dump($indexado);



echo "<br>";
echo "<br>";
echo "######################";
echo "<br>";
echo "Requisições";
echo "<br>";
echo "######################";
echo "<br>";

echo "<br>";
echo "Requisição GET";
echo "<br>";
//https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Methods/GET
// Tratando GET no PHP
//https://www.php.net/manual/pt_BR/reserved.variables.get.php

echo "<br>";
var_dump($_GET);
echo "<br>";

echo "Componente: " . $_GET['componente'];
echo "<br>";
echo "Unidade: " . $_GET['unidade_etec'];
echo "<br>";
echo "Código: " . $_GET['codigo_etec'];
echo "<br>";

echo '</pre>';

echo "<br>";
echo "<br>";
echo "######################";
echo "<br>";
echo "Formulários";
echo "<br>";
echo "######################";

echo "<br>";
echo "Formulário Método GET";
echo "<br>";
// Documentação HTML de <form>
echo '
  <form action="" method="get">
    <label for="componente">Componente</label>
    <input type="text" name="componente">
    <br>
    <label for="unidade_etec">Unidade</label>
    <input type="text" name="unidade_etec">
    <br>
    <label for="codigo_etec">Código (ETEC)</label>
    <input type="text" name="codigo_etec">

    <input type="submit" name="Envia" >

  </form>
';


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// soma usando <form>
echo '
  <form action="" method="get">
    <label for="numeroA">Numero A</label>
    <input type="text" name="numeroA">
    <br>
    <label for="numeroB">Numero B</label>
    <input type="text" name="numeroB">

    <input type="submit" name="Envia" >

  </form>
';

$soma_form = $_GET['numeroA'] + $_GET['numeroB'];

echo "<br>";
echo "<br>";

echo "A soma dos Numeros A + B é: " . $soma_form;


// Método POST
// https://www.php.net/manual/pt_BR/reserved.variables.post.php

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "Formulário Método POST";
echo "<br>";

// soma usando <form>
echo '
  <form action="" method="post">
    <label for="numeroA">Numero A</label>
    <input type="text" name="numeroA">
    <br>
    <label for="numeroB">Numero B</label>
    <input type="text" name="numeroB">

    <input type="submit" name="Envia" >

  </form>
';

$soma_form = $_POST['numeroA'] + $_POST['numeroB'];

echo "<br>";
echo "<br>";

echo "A soma dos Numeros A + B é: " . $soma_form;








echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



























 ?>
