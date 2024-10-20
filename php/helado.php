<?php
class Helado{
    private $sabor;
    private $temperaura;
    private $precio;
    private $cono;

    public function modificarSabor($sabor){
        $this->sabor = $sabor;
    }
    public function modificarTemperatura($temperaura){
        $this->temperaturaa = $temperaura;
    }
    public function modificarPrecio($precio){
        $this->precio = $precio;
    }
    public function modificarCono($cono){
        $this->cono = $cono;
    }
    
}
?>