<?php require_once("php/encabezado.php") ?>
<?php
$longitud = mt_rand(8, 16);
$i = 0;
echo $longitud . '<br>';
$pass = '';
$digito = mt_rand(48, 122);
while ($i < $longitud) {
    if (($digito >= 48 && $digito <= 57) || ($digito >= 65 && $digito <= 90)) {
        $i = $i + 1;
    } else {
        while (($digito > 57 && $digito < 65) || ($digito > 90 && $digito < 97)) {
            $digito = mt_rand(48, 122);
        }
        $i = $i + 1;
    }
    $digito = chr($digito);
    echo $i . ') ' . $digito . '<br>';
    $pass = $pass . $digito;
    $digito = mt_rand(48, 122);
}
echo $pass;
?>


<main class="container my-5">
    <ul class="list-group">
        <li class="list-group-item">La longitud de la contrasenia es: <?php echo '<b>' . $longitud . '</b>'; ?></li>
        <li class="list-group-item">La contrasenia generada es: <?php echo '<b>' . $pass . '</b>'; ?></li>
    </ul>
</main>

<?php require_once("php/pie.php") ?>