
<?php
  class Animal {
    public $name;
    public $legs = 4;
    public $cold_blooded = 'no';
    public function __construct($name) {
        $this->name =$name;
    }
    public function getname() {
        return $this -> name;
    }
    public function getlegs() {
        return $this->legs;
    }
    public function getcold_blooded() {
        return $this->cold_blooded; 
    }
  }

  //$sheep = new animal("shaun");

  //echo $sheep-> name;
  //echo $sheep-> legs;
  //echo $sheep-> cold_blooded;
?>