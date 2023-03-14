<?php

require_once 'controle.php';

class Drone implements Controle
{
    private $carga_bateria;
    private $camera;
    private $altura;
    private $ligado;
    private $desligado;
    
    public function getCarga_bateria()
    {
        return $this->carga_bateria;
    }

    public function setCarga_bateria($carga_bateria)
    {
        $this->carga_bateria = $carga_bateria;

        return $this;
    }

    public function getCamera()
    {
        return $this->camera;
    }

    public function setCamera($camera)
    {
        $this->camera = $camera;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    public function getDesligado()
    {
        return $this->desligado;
    }

    public function setDesligado($desligado)
    {
        $this->desligado = $desligado;

        return $this;
    }

    // Métodos especiais

    public function subir(){
        $this -> setAltura($this -> getAltura() + 1);
        $this -> setCarga_bateria($this -> getCarga_bateria() - 1);
        echo "</br> O drone subiu e sua altura atual é: ".$this -> getAltura();
    }

    public function descer(){
        $this -> setAltura($this -> getAltura() - 1);
        $this -> setCarga_bateria($this -> getCarga_bateria() - 1);
        echo "</br> O drone desceu e sua altura atual é: ".$this -> getAltura();
        if ($this -> getAltura <= 0){
            echo "Erro! O drone está aterrissado!";
        }
    }
    
    public function esquerda(){
        $this -> setCarga_bateria($this -> getCarga_bateria() - 1);
        echo "O drone está se movendo para a esquerda!";
      
    }

    public function direita(){
        $this -> setCarga_bateria($this -> getCarga_bateria() - 1);
        echo "</br> O drone está se movendo para a direita!";
  
    }

    public function ligar(){
        if ($this -> getLigado() == true){
            echo "Erro! O drone já está ligado!";
        }
        else{
            echo "O drone ligou!";
        }

    }

    public function desligar(){
        if ($this -> getLigado() == false){
            echo "Erro! O drone já está desligado!";
        }
        else{
            echo "O drone desligou!";
        }

    }
    public function status_bateria(){
        echo "</br>Sua bateria está em: " .$this -> getCarga_bateria();
    }
    public function aterrissar()
    {
        $this -> setCarga_bateria($this -> getCarga_bateria() - 1);
        $this -> setAltura = 0;
        if ($this -> getAltura() <= 0){
            echo "</br> Erro! O drone já está aterrissado!";
        }
        else{
            echo "</br> O drone aterrissou!";
        }

    }
    public function gravar()
    {
        echo "</br> O drone começou a gravar! Cuidado com a bateria!";
        $this -> setCarga_bateria($this -> getCarga_bateria() - 2);
    }

}

?>