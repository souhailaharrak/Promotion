<?php

require_once 'conixion.php';
require_once '../entity/promotion.php';

class PromotionMnager extends Conexion{


  

 public function PromotionMnager($promotion){


      $name=$promotion->getName();
   $insert ="INSERT INTO promotion  (name) VALUES ('$name')";
   
//   //execute query

  mysqli_query($this->connect(),$insert);
  }
              
 public function getAllPromotion(){

        $sqlGetData='SELECT *  FROM  promotion';

        $result=mysqli_query($this->connect(),$sqlGetData);


        $promotions=mysqli_fetch_all($result,MYSQLI_ASSOC);


           $array=array();
      foreach( $promotions as $promotionList){

         $promotion=new Premotion();
         $promotion->setId($promotionList['id']);
          $promotion->setName($promotionList['name']);
          array_push($array,$promotion);


    }
 return $array;
  }

 public function getPromotionById($id){

    $sqlGetData="SELECT * from promotion where id=$id";
    $result =mysqli_query($this->connect(),$sqlGetData);

    $premotionList=mysqli_fetch_assoc($result);
    $premotion=new Premotion();
    $premotion->setId($premotionList['id']);
   $premotion->setName($premotionList['name']);

   return $premotion;

 }
 public function Delete($id){

  $DeleteRow="DELETE  FROM promotion WHERE id=$id";
  mysqli_query($this->connect(),$DeleteRow);
 }

}



?>