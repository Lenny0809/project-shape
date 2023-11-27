<?php
include_once('shape.php');
class square extends shape{
    private $sideLength;
    public function __construct($a){
        $this->sideLength=$a;}
        public function calculateArea(){
        return $this->sideLength*$this->sideLength;    
        }
        
    }

?>