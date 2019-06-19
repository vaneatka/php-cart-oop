<?php

class Client {
    public $id;
    public $username;
    public $avatar;
    public $email;
    private $password;

    public function __construct($username, $email, $password, $avatar){
        $this->id = rand();
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
    }

    public function __toString(){
        return json_encode($this);
        }
    
    public function showCart(){
        return "
        <div>
        <h2>{$this->username}</h2>
        <img src = \"{$this->avatar}\"></img>
        <p> {$this->email} </p>       
        </div>    
        
        ";
    }




}

?>