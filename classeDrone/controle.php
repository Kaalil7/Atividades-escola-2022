<?php

interface Controle
{
    public function subir(); 
    public function descer();
    public function esquerda();
    public function direita();
    public function ligar();
    public function desligar();
    public function status_bateria();
    public function aterrissar();  
    public function gravar();
}

?>