<?php

    require_once 'dronePequeno.php';
    require_once 'controle.php';

    class DroneReconhecimento extends DronePequeno
    {
        public function recint()
        {
            echo "</br> Identificando as espécies de árvores da região!";
            $this -> setCarga_bateria($this -> getCarga_bateria() - 2);

        }
    }
?>