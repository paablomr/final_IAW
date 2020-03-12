<?php
include_once ('C:\Users\thu-p\Desktop\Informatica\IAW\Proyecto\prueba\trabajo_final2\politecnico\modelo\ecuacionGrado2.php');

$datosrecibidos = file_get_contents("php://input");
$datos = json_decode($datosrecibidos,true);

require "vendor/autoload.php";

$ecuaciongrado2 = new politecnico\modelo\ecuacionGrado2($datos['a'],$datos['b'], $datos['c']);

$html ="<tr><th>x</th><th>y</th></tr>";

for ($i=0; $i < 11; $i++) {
    $resultado = $ecuaciongrado2->calcular($i);
    $html = "<tr><td>".$i."</td><td>".$resultado."</td></tr>";
    echo $html;
}