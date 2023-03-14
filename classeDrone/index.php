<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <title>Classe Drone</title>
</head>
<body>
    <h1 class="title">Avaliação Mensal 2º Trimestre - POO </h1>
    <h2 class="title2">Henrique Kalil Nº 7 3º TI</h2>
    <div class="drones">
    <?php
        require_once 'drone.php';
        require_once 'dronePequeno.php';
        require_once 'droneMedio.php';
        require_once 'droneGrande.php';

        echo "<p>⇨ Drone padrão </p>";
        $d[0] = new Drone();
        $d[0] -> setCamera("GoPro Hero 9");
        $d[0] -> setCarga_bateria(100);
        $d[0] -> setAltura(1);
        $d[0] -> ligar();
        $d[0] -> subir();
        $d[0] -> subir();
        $d[0] -> direita();
        $d[0] -> status_bateria();
        $d[0] -> gravar();
        $d[0] -> aterrissar();
        echo "<p>⇨ Drone pequeno </p>";
        $d[1] = new DronePequeno();
        $d[1] -> darCambalhota();
        $d[1] -> girar();
        $d[1] -> visaoNoturna();
        echo "<p>⇨ Drone Reconhecimento </p>";
        $d[2] = new DroneReconhecimento();
        $d[2] -> recint();
        echo "<p>⇨ Drone médio </p>";
        $d[3] = new DroneMedio();
        $d[3] -> levantarCarga();
        $d[3] -> voltarInicio();
        $d[3] -> tirarFoto();
        echo "<p>⇨ Drone grande </p>";
        $d[4] = new DroneGrande();
        $d[4] -> statusHelice();
        $d[4] -> acelerar();
        $d[4] -> status_bateria();
        $d[4] -> gravar();
        echo "<p>⇨ Drone Análise de corrosão </p>";
        $d[5] = new DroneAnaliseDeCorrosao();
        $d[5] -> superInteligence();
        $d[5] -> superInteligenceArtificial();


    ?>
    </div>
</body>
</html>