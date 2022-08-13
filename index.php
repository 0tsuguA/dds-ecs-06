<?php

require_once 'modelo/producto.php';
require_once 'modelo/proveedores.php';

$prov = new Proveedores();
$prov->setId(2);
$prov->setNombre('Augusto');
$prov->setCuil(20654659);
$prov->setDireccion('Corrientes y Tucuman');
$prov->setTelefono(0341654321);

$prov2 = new Proveedores();
$prov2->setId(3);
$prov2->setNombre('Mariano');
$prov2->setCuil(20666899);
$prov2->setDireccion('Entre Rios y Tucuman');
$prov2->setTelefono(034133144);

$prov3 = new Proveedores();
$prov3->setId(4);
$prov3->setNombre('Laura');
$prov3->setCuil(193654656);
$prov3->setDireccion('Belgrano 2560');
$prov3->setTelefono('03418132');

$prod = new Producto();
$prod->setId(1);
$prod->setNombre('9 de oro');
$prod->setCodigo(6513254);
$prod->setPrecio('$200');
$prod->setMarca('Arcor');
$prod->setProveedor($prov);
$prod->setProveedor($prov2);
$prod->setProveedor($prov3);
$prod->MostrarInformacion();
