


<?php require_once('php/encabezado.php'); ?>

    <?php
        $catAscii=chr(mt_rand(65,71));
        
        
    ?>


    <!-- Main Content -->
    <main class="container my-5" style='min-height:76vh'>
        <h1>CATEGORIAS DE CONDUCTORES</h1>
        <!-- Aquí va el contenido principal -->  
         <?php
            switch($catAscii){
                case 'A':
                    echo '<h2>Categoria: '.$catAscii.'</h2><br><p><b>Tipos de transporte autorizados: </b>Ciclomotores, motocicletas y triciclo motorizados</p>';
                    break;
                case 'B':
                    echo '<h2>Categoria: '.$catAscii.'</h2><br><p><b>Tipos de transporte autorizados: </b>Automóviles y camionetas con acoplado de hasta 720kg de peso
    o casa rodante, y las comprendidas en la clase A</p>';
                    break;
                case 'C':
                    echo '<h2>Categoria: '.$catAscii.'</h2><br><p><b>Tipos de transporte autorizados: </b>Camiones sin acoplados y los comprendidos en la clase B</p>';
                    break;
                case 'D':
                    echo '<h2>Categoria: '.$catAscii.'</h2><br><p><b>Tipos de transporte autorizados: </b>Los destinados al servicio de transporte de pasajeros,
    emergencias o seguridad y los comprendidos en las clases B o C,
    según el caso</p>';
                    break;
                case 'E':
                    echo '<h2>Categoria: '.$catAscii.'</h2><br><p><b>Tipos de transporte autorizados: </b>Camiones articulados o con acoplado, maquinaria especial no
    agrícola y los comprendidos en las clases B o C</p>';
                    break;
                case 'F':
                    echo '<h2>Categoria: '.$catAscii.'</h2><br><p><b>Tipos de transporte autorizados: </b>Automotores especialmente adaptados para discapacitados,
    Comprende los automotores incluidos en las clases B y
    profesionales, según el caso, con la descripción de la adaptación
    que corresponda a la discapacidad de su titular</p>';
                    break;
                case 'G':
                    echo '<h2>Categoria: '.$catAscii.'</h2><br><p><b>Tipos de transporte autorizados: </b>Tractores y maquinarias agrícolas</p>';
                    break;
                    
            }
         ?>
    </main>
<?php require_once('php/pie.php'); ?>
