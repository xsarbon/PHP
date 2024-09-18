


<?php require_once('php/encabezado.php'); ?>

    <?php
        const VALORCRIPTO=1322.74;
        $bruto=mt_rand(200000,400000);
        $neto;
        $comision;
        if($bruto<300000)
        {
            $neto=$bruto*0.99;
            $comision=1;
        }else{
            $neto=$bruto*0.995;
            $comision=0.5;
        }
    ?>


    <!-- Main Content -->
    <main class="container my-5" style='min-height:76vh'>
        <!-- Aquí va el contenido principal -->
         <h1>CALCULADORA CRYPTO</h1>
         <section>
            <ul class="list-group">
                <li class="list-group-item">
                    Dinero disponible: $
                    <?php echo '<b>'.number_format($bruto,0,',','.').'</b>'; ?>
                </li>
                <li class="list-group-item">
                    Comision: %
                    <?php echo '<b>'.$comision.'</b>';?>
                </li>
                <li class="list-group-item">
                    Dinero restante: $
                    <?php echo '<b>'.number_format($neto,2,',','.').'</b>'?>
                </li>
                <li class="list-group-item">
                    Cotizacion de USDT: $
                    <?php echo number_format(VALORCRIPTO,2,',','.')?>
                </li>
                <li class="list-group-item text-danger">
                    USDT Adquiridos: 
                    <?php echo number_format($neto/VALORCRIPTO,2,',','.');?>
                </li>
            </ul>
         </section>
    </main>
<?php require_once('php/pie.php'); ?>
