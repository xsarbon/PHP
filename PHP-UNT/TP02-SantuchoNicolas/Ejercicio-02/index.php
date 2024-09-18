


<?php require_once('php/encabezado.php'); ?>

    <?php
    const PRIMEROS='AG';
    $numbers=mt_rand(0,999);
    $firstAscii=chr(mt_rand(65,90));
    $secondAscii=chr(mt_rand(65,90));

    if($numbers<10)
    {
        $numbers='00'.$numbers.'';
        $patente=PRIMEROS.$numbers.$firstAscii.$secondAscii;
    }

    if($numbers<100 && $numbers>=10)
    {
        $numbers='0'.$numbers.'';
        $patente=PRIMEROS.$numbers.$firstAscii.$secondAscii;
    }
    if($numbers>100)
    {
        $numbers=$numbers;
        $patente=PRIMEROS.$numbers.$firstAscii.$secondAscii;
    }
    ?>
    <!-- Main Content -->
    <main class="container my-5" style='min-height:76vh'>
        <h1>GENERADOR DE PATENTES</h1>
        <!-- Aquí va el contenido principal -->
         <?php echo '<h2>Numero de Patente: '.$patente.'</h2>' ?>
    </main>
<?php require_once('php/pie.php'); ?>
