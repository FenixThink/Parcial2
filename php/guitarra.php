<?php
class guitarra{
    private $manejable;
    private $tipo;
    private $color;
    private $textura;

    public function modificarName($manejable){
        $this->manejable = $manejable;
    }
    public function modificarDescription($tipo){
        $this->tipo = $tipo;
    }
    public function modificarColors($color){
        $this->color = $color;
    }
    public function modificarSize($textura){
        $this->textura = $textura;
    }
    
}
?>