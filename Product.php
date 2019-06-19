<?php

class Product{
    public $id;
    public $name;
    public $photo;
    public $description;
    public $price;

    public function __construct( $name, $photo, $description, $price ){
        $this->id = rand();
        $this-> name= $name;
        $this-> photo= $photo;
        $this-> description=$description ;
        $this-> price= $price;
    }
    public function __toString(){
        return json_encode($this);
    }
    public function toHTML(){
        return "
        <div>
            <h2>{$this->name}({$this->price})</h2>
            <p>{$this->description}</p>
        </div>        
        ";
    }
}



?>