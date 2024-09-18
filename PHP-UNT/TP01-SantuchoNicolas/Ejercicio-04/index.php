<?php

require_once('php/encabezado.php');
echo '<h1>Laboratorio II</h1>';

$empleado= 'Nicolas Elias Santucho';

const APORTE_JUBILATORIO=13;
const OBRA_SOCIAL=3.5;

$sueldoBasico=mt_rand(600000,790000);

$montoAJ=($sueldoBasico*APORTE_JUBILATORIO)/100;
$montoOS=($sueldoBasico*OBRA_SOCIAL)/100;
$sueldoNeto=$sueldoBasico-($montoAJ+$montoOS);

?>

<table>
    <caption><?php echo $empleado ?></caption>
    <thead>
        <tr>
            <th>Concepto</th>
            <th>Remuneracion</th>
            <th>Descuento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Sueldo Basico</td>
            <td><?php echo '$'. number_format($sueldoBasico,2,',','.'); ?></td>
            <td>-</td>
        </tr>
        <tr>
            <td>Aportes Jubilatorios</td>
            <td>-</td>
            <td><?php echo '$'. number_format($montoAJ,2,',','.'); ?></td>
        </tr>
        <tr>
            <td>Obra Social</td>
            <td>-</td>
            <td><?php echo '$'. number_format($montoOS,2,',','.'); ?></td>
        </tr>
        <tr>
            <th>Sueldo Neto</th>
            <td><?php echo '$'.number_format($sueldoNeto,2,',','.') ?></td>
        </tr>
    </tbody>
</table>

<?php
require_once('php/pie.php');
?>