<?php

require_once 'droneGrande.php';
require_once 'controle.php';

class DroneAnaliseDeCorrosao extends DroneGrande
    {
        public function superInteligence(){
            echo "</br> Rastreando corrosões! Cuidado com a bateria!";
            $this -> setCarga_bateria($this -> getCarga_bateria() - 2);
        }
        public function superInteligenceArtificial(){
            echo "</br> Rastreando corrosões automáticamente! Cuidado com a bateria!";
            $this -> setCarga_bateria($this -> getCarga_bateria() - 2);
        }
    }

?>