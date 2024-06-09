<?php
class Train {
    public $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        echo $this -> name;
    }
}
?>