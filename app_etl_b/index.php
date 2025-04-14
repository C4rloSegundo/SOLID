<?php

require __DIR__ . '/vendor/autoload.php';

use AppEtl\Leitor;

//--txt--
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');
$array_txt = $leitorTXT->lerArquivo();



//--csv--
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$array_csv = $leitorCSV->lerArquivo();


// --merge--
echo "<pre>";
print_r(array_merge($array_txt, $array_csv));
echo "<pre>";