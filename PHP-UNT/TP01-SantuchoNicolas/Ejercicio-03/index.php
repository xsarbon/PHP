<?php

require_once('php/encabezado.php');
echo '<h1>Laboratorio II</h1>';

// Declaro el valor porcentual de las retenciones
const ALICUOTA=2.5;

// Declaracion de transferencias entrantes
$entrante1 = mt_rand(220000,350000);
$entrante2 = mt_rand(220000,350000);

//Cálculo de los valores de las retenciones a las transferencias entrantes
$IIBB1=($entrante1*ALICUOTA)/100;
$IIBB2=($entrante2*ALICUOTA)/100;

//Declaracion de las transferencias salientes
$saliente1=mt_rand(80000,130000);
$saliente2=mt_rand(80000,130000);

// Cálculo del total de las transferencias y alicuota por IIBB
$total=($entrante1+$entrante2)-($IIBB1+$IIBB2+$saliente1+$saliente2);

?>
<table>
    <caption>Estado de cuenta</caption>
    <thead>
        <tr>
            <th>Concepto</th>
            <th>Monto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>transferencia entrante</td>
            <td>+$ <?php echo number_format($entrante1,2,',','.'); ?> </td><br>
        </tr>
        <tr>
            <td>Retencion IIBB</td>
            <td>-$ <?php echo number_format($IIBB1,2,',','.'); ?> </td><br>
        </tr>
        <tr>
            <td>transferencia entrante</td>
            <td>+$ <?php echo number_format($entrante2,2,',','.'); ?> </td><br>
        </tr>
        <tr>
            <td>Retencion IIBB</td>
            <td>-$ <?php echo number_format($IIBB2,2,',','.'); ?> </td><br>
        </tr>
        <tr>
            <td>transferencia saliente</td>
            <td>-$ <?php echo number_format($saliente1,2,',','.'); ?> </td><br>
        </tr>
        <tr>
            <td>transferencia saliente</td>
            <td>-$ <?php echo number_format($saliente2,2,',','.'); ?> </td><br>
        </tr>
        <tr>
            <td>Saldo actual</td>
            <td>$ <?php echo number_format($total,2,',','.'); ?> </td><br>
        </tr>
    </tbody>
</table>
;

<?php 
require_once('php/pie.php');
?>