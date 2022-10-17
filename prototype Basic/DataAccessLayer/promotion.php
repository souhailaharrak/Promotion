<?php

class Promotion{

   private $id;
   private $name;

   public function getId(){

    return $this ->id;
   }
   
   public function setId($id){

        $this ->id=$id;
   }


   public function getname(){

    return $this ->name;
   }

   public function  setName($name){

         $this ->name=$name;
   }

}

?>