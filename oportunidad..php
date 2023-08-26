<?php

require_once 'modelo/datosoperacion.php';
require_once  'modelo/oportunidad.php';
require_once  'modelo/persona.php';
require_once  'modelo/RespuestaOportunidad.php';

header('Content-Type: application/json');

$d = new datosoperacion();
$d->montosolicitado = 500000;
$d->linea = 504;
$d->cantidaddecuotas = 12;
$d->tasaefectivamensual = 2.9589;
$d->cuotapromedio = 53503.08;
$d->tasanominalanual = 36;
$d->costofinancierototal = 56.55;


$p = new persona();
$p->nombres = 'pedro rodriguez';
$p->sexo = 'f';
$p->documento = 123123;
$p->email ='aaaa@aaaa.com.ar';
$p->celular = 123456;
$p->telefonoalternativo = 123456;

$o = new oportunidad();
$o->persona =$p;
$o->datosoperacion = $d;
$o->smsconsultaid =17654293-27258197726;
$o->idvalidatorid = 893;
$o->motorsolofirmaid = 8870;

$ro = new RespuestaOportunidad();
$ro-> oportunidad = $o;
$ro-> IsOk = true;

echo json_encode($ro);