<?php
// solo agrego un comentario
$cola = new SplQueue;

$obj= new stdClass;
$obj->Fecha='01-01-2018';
$obj->Especie="AGRO";
$obj->Cantidad=100;
$obj->Cotizacion=15.30;
$cola->enqueue($obj);

$obj= new stdClass;
$obj->Fecha='02-01-2018';
$obj->Especie="AGRO";
$obj->Cantidad=110;
$obj->Cotizacion=14.30;
$cola->enqueue($obj);

$obj= new stdClass;
$obj->Fecha='03-01-2018';
$obj->Especie="AGRO";
$obj->Cantidad=105;
$obj->Cotizacion=16.30;
$cola->enqueue($obj);

foreach ($cola as $elem)  {
 echo json_encode($elem)."\n<br>";
}
echo "<br>";
var_dump($cola[0]);
echo "<br>";
$cola->dequeue();
$cola[0]->Cantidad-=50;
echo "<br>";
var_dump($cola[0]);