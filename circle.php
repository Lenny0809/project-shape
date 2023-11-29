<?php
include_once('shape.php');
class circle extends shape{
private $radius;
public function __construct($r){
        $this->radius=$r;
    }
    public function calculateArea(){
return pi()*$this->radius*$this->radius;
    }
}
?>