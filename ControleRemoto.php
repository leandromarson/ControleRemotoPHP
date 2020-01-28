<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    
    
    public function abrirMenu() {
        echo "<p>Abrindo Menu...</p>";
        echo "<table><tr><td><p>Ligado: </td><td>".($this->getLigado()?"SIM":"NÃO")."</p></td></tr>";
        echo "<tr><td><p>Volume: </td><td>".$this->getVolume()." ";
        for($x=0;$x<= $this->getVolume();$x+=10){
           echo "|"; 
        }
        echo "</p></td></tr>";
        echo "<tr><td><p>Tocando: </td><td>".($this->getTocando()?"SIM":"NÃO")."</p></td></tr></table>";
    }

    public function desligar() {
        if($this->getLigado()){            
            echo "<p>Desligando...</p>";
            $this->setLigado(false);
        }else{
            echo "<p>Já está desligado</p>";
        }
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume()==0){
            $this->setLigado(50);
            echo "<p>DESMUTADO</p>";
        }else{
            echo "<p>Já está desmutado</p>";
        }
    }

    public function fecharMenu() {
      echo "<p>Fechando menu...</p>";  
    }

    public function ligar() {
        if($this->getLigado()){
            echo "<p>Já está ligado</p>";
            
        }else{
            echo "<p>Ligando...</p>";
            $this->setLigado(true);
        }
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setLigado(0);
            echo "<p>MUDO</p>";
        }else{
            echo "<p>Já está mudo</p>";
        }
    }

    public function maisVolume() {
        if($this->getLigado()){
            if($this->getVolume()<100){
               $this->setVolume($this->getVolume()+10);  
            }else{
                echo "<p>Volume no máximo</p>";
            }            
        }else{
            echo "<p>Não pode aumentar o volume! Está desligado!</p>";
        }
        
    }

    public function menosVolume() {
        if($this->getLigado()){
            if($this->getVolume()>0){
               $this->setVolume($this->getVolume()-10);  
            }else{
                echo "<p>Volume no mínimo</p>";
            }  
             
        }else{
            echo "<p>Não pode diminuir o volume! Está desligado!</p>";
        }
    }

    public function pause() {
        if($this->getLigado()){
            if($this->getTocando()){
                echo "<p>Pause..</p>";
                $this->setTocando(false);
            }else{
                echo "<p>Já está pausado</p>";
            }
        }else{
           echo "<p>Está desligado</p>"; 
        }      
    }

    public function play() {
        if($this->getLigado()){
            if($this->getTocando()){
                echo "<p>Já está tocando</p>";
            }else{
                $this->setTocando(true);
                echo "<p>Play..</p>";
            }
        }else{
           echo "<p>Está desligado</p>"; 
        }    
    }
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }




}
