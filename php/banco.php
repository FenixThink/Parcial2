<?php
class banco{
    private $name;
    private $description;
    private $colors;
    private $size;

    public function modificarName($name){
        $this->name = $name;
    }
    public function modificarDescription($description){
        $this->description = $description;
    }
    public function modificarColors($colors){
        $this->colors = $colors;
    }
    public function modificarSize($size){
        $this->size = $size;
    }

}
?>