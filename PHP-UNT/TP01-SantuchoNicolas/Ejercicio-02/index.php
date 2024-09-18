<?php
    require_once('php/encabezado.php');
    echo '<h1>Pendrive de 16GB</h1>';

    $penDrive=16;
    $archivo1=mt_rand(2500,4000);
    $archivo2=mt_rand(2500,4000);
    $archivo3=mt_rand(2500,4000);
    echo 'Archivo 1 (MB): ' .$archivo1. '<br><br>';
    echo 'Archivo 2 (MB): ' .$archivo2. '<br><br>';
    echo 'Archivo 3 (MB): ' .$archivo3. '<hr>';

    const FACTOR=1000;

    $a1GB=$archivo1/FACTOR;
    $a2GB=$archivo1/FACTOR;
    $a3GB=$archivo1/FACTOR;
    echo 'Archivo 1 (GB): ' .number_format($a1GB,2,',','.'). '<br><br>';
    echo 'Archivo 2 (GB): ' .number_format($a2GB,2,',','.'). '<br><br>';
    echo 'Archivo 3 (GB): ' .number_format($a3GB,2,',','.'). '<hr>';

    $penDrive=$penDrive-($a1GB+$a2GB+$a3GB);
    echo ' ' .number_format($penDrive,2,',','.');

    require_once('php/pie.php');
?>