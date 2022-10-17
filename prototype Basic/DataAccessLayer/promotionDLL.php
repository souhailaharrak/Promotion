<?php 

require_once 'conexion.php';
require_once 'promotion.php';

class PromotionDLL extends Conexion{

       public function ajouterPromotion($promotion){

             $name=$promotion ->getName();

             $insert="INSERT INTO promotion(name) VALUES ('$name')";

            mysqli_query($this ->connect(),$insert);
                  

       }




       public function getALLprmotion(){


        $GetData="select * from promotion";
        $result =mysqli_query($this -> connect(),$GetData);
        $promotionArray=mysqli_fetch_all($result, MYSQLI_ASSOC);
      
         $promotionArray=array();
          
        foreach($promotionArray as $promotionArray){

            $promotionArray =new Promotion();
            $promotionArray ->setId($promotionArray['id']);
            $promotionArray ->setName($promotionArray['name']);

          array_push($promotions,$promotionArray);
        }
        return  $promotions;
       }
}
