


<?php require_once('php/encabezado.php'); ?>

    <?php
    $firstCard=mt_rand(1,12);
    $first;
    $secondCard=mt_rand(1,12);
    $second;
    $score;

    if($firstCard>9){
        switch($firstCard){
            case 10:
                $first='Sota';
                break;
            case 11:
                $first='Caballo';
                break;
            case 12:
                $first='Rey';
                break;
        }
        $firstCard=0.5;
    }else{
        $first=$firstCard;
    }
    if($secondCard>9){
        switch($secondCard){
            case 10:
                $second='Sota';
                break;
            case 11:
                $second='Caballo';
                break;
            case 12:
                $second='Rey';
                break;
        }
        $secondCard=0.5;
    }else{
        $second=$secondCard;
    }
    $score=$firstCard+$secondCard;
    ?>


    <!-- Main Content -->
    <main class="container my-5" style='min-height:76vh'>
        <h1>JUEGO NUEVE Y MEDIO</h1>
        <!-- Aquí va el contenido principal -->
        <ul class="list-group">
            <li class="list-group-item">Primera carta: <?php echo '<b>'.$first.'</b>'; ?></li>
            <li class="list-group-item">Segunda carta: <?php echo '<b>'.$second.'</b>'; ?></li>
            <?php if($score==9.5){echo '<li class="list-group-item text-success"><b>GANADOR</b></li>'; }else{echo '<li class="list-group-item text-danger">PUNTAJE OBTENIDO: <b>'.$score.'</b></li>';} ?>
        </ul>
    </main>
<?php require_once('php/pie.php'); ?>
