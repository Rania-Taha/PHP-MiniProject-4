<?php

session_start();
if (isset($_POST['submit'])){
    $name= $_POST['name'];
    $description= $_POST['description'];
    $price= $_POST['price'];
    $img= $_POST['img'];

  

$product = array(
    'name' => $name,
    'description' => $description,
    'price' => $price,
    'img' => $img
) ;
$_SESSION['products'][] = $product;
header ('Location:index.php');
}
else{$product = array();
$_SESSION['products'][] = $product;
// echo $_SESSION['products']['name']; 
}

// print_r($_SESSION ); 





