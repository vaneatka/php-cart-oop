<?php

class Cart{
    public $id;
    public $client; 
    public $products;
    public $total_cost;

    public function __construct( $client ){
        $this->id = rand();
        $this->client = $client;
        $this->products = [];
        $this->total_cost = 0;
    }

    public function addProduct($product){
        $this->products[]=$product;
        $this->total_cost += $product->price; 
    }

    public function toHTML(){
        $count_products = count($this->products);
        
        return "
        <div>
            client: {$this->client->username} ({$count_products} products in cart.) Total cost: {$this->total_cost}
        </div>
        ";
    }


}

?>