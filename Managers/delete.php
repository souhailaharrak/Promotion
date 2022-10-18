<?php

include "PromotionMnager.php";

$PromoBLL = new PromotionMnager();

if(isset($_GET["id"])){
   $id = $_GET["id"];
    $PromoBLL->Delete($id);
    header("Location:index1.php");
}



?>