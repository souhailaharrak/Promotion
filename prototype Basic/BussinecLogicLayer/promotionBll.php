<?php 

require_once "../DataAccessLayer/promotionDLL.php";

class PromotionBll{

   public function getALLprmotion(){

     $promotionBll= new PromotionDLL;

     return $promotionBll -> getALLprmotion();
   }

   public function ajouterPromotion($promotion){
     
    $promotionBll= new PromotionDLL;
    return $promotionBll -> ajouterPromotion($promotion);


}
}
?>