<?php

require_once 'controle.php';

class DroneMedio implements Controle
{
    private $carga_bateria;
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

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

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
        echo "O drone está se movendo para a direita!";
    }

    public function ligar(){
        $this -> setLigado(true);
        if ($this -> getLigado == true){
            echo "Erro! O drone já está ligado!";
        }
        else{
            echo "O drone ligou!";
        }

    }

    public function desligar(){
        $this -> setLigado(false);
        if ($this -> getLigado == false){
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
        if ($this -> getAltura <= 0){
            echo "Erro! O drone já está aterrissado!";
        }
        else{
            echo "O drone aterrissou!";
        }

    }
    public function gravar()
    {
        echo "O drone começou a gravar! Cuidado com a bateria!";
        $this -> setCarga_bateria($this -> getCarga_bateria() - 2);
    }

    public function levantarCarga(){
        echo "</br> O drone está levantando uma carga! Cuidado!";
        $this -> setCarga_bateria($this -> getCarga_bateria() - 5);

    }
    
    public function voltarInicio(){
        echo "</br> O drone está voltando ao seu local de inicio!";
        $this -> setCarga_bateria($this -> getCarga_bateria() - 1);
    }

    public function tirarFoto(){
        echo "</br> Foto tirada! Está no cartão de memória!";
        $this -> setCarga_bateria($this -> getCarga_bateria() - 2);
    }
}

?>