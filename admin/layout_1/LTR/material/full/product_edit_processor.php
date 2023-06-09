<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php

use \BITM\CUMPUS\Productlist;
use \BITM\CUMPUS\Utility\Utility;

$src = null;
$old_picture = null;
$new_picture = null;

$old_picture = $_POST['old_picture'];
if( array_key_exists('picture', $_FILES) && !empty($_FILES['picture']['name'])){
    $filename = $_FILES['picture']['name']; // if you want to keep the name as is
    $filename = uniqid()."_".$_FILES['picture']['name']; // if you want to keep the name as is
    $target = $_FILES['picture']['tmp_name'];
    $destination = $uploads.$filename;

    if(upload($target, $destination)){
        $new_picture = $filename ;
    }

    if(file_exists($uploads.$old_picture )){
        unlink( $uploads.$old_picture );
    }
    
}
$src = $new_picture ?? $old_picture;
$id = Utility::sanitize($_POST['id']);
$product = new Productlist();
$pro = $product->find($id);
$pro->alt = Utility::sanitize($_POST['alt']);
$pro->tittle = Utility::sanitize($_POST['title']);
$pro->caption = Utility::sanitize($_POST['caption']);
$pro->src = $src;

$result = $product->update($pro);
if($result){
    $message = "Data is updated Successfully";
    set_session('message',$message);
    // redirect("slider_index.php?message=".$message);
    redirect("product_index.php");
}
?>