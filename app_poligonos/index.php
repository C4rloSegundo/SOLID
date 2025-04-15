<?php 

require __DIR__.'/vendor/autoload.php';

use App\Poligono;
use App\poligonos\Retangulo;
use App\poligonos\Quadrado;

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setLargura(10);
$poligono->getForma()->setAltura(5);


echo '<pre>';
print_r($poligono);
echo '</pre>';
echo "<h3> A área do retângulo é: ".$poligono->getArea()."\n </h3>";


$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);
$poligono->getForma()->setAltura(5);


echo '<pre>';
print_r($poligono);
echo '</pre>';
echo "<h3> A área do quadrado é: ".$poligono->getArea()."\n </h3>";

// $retangulo = new Retangulo();
// $retangulo->setLargura(10);
// $retangulo->setAltura(5);
// echo "<h3> A área do retângulo é: ".$retangulo->getArea()."\n </h3>";


// $quadrado = new Quadrado();
// $quadrado->setLargura(10);
// // $quadrado->setAltura(5);
// echo "<h3> A área do quadrado é: ".$quadrado->getArea()."\n </h3>";


// $retangulo = new Quadrado();
// $retangulo->setLargura(10);
// $retangulo->setAltura(5);
// echo "<h3>LSP - A área do retângulo é: ".$retangulo->getArea()."\n </h3>";