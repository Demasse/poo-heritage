<?php

 class  User{

    private $name;
    private $password;
 
     public function __construct($n, $p){
        $this->name = $n;
        $this->password = $p;
     }

    public function getname():mixed{
       return $this->name;        
     }

     public function getpassword():mixed{
        return $this->password;
     }


}
