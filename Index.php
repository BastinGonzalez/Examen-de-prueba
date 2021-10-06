<?php
require_once 'Prueba.php';
$Consulta = new Persona;
$Consulta->nombre='Bastin';
$Consulta->peso=60;
$Consulta->estatura=1.53;
$Consulta->IMC=$Consulta->peso /($Consulta->estatura*$Consulta->estatura);

$Consulta->calcularIMC();

