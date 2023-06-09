<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php

use \BITM\CUMPUS\Productlist;
use \BITM\CUMPUS\Utility\Validator;
use \BITM\CUMPUS\Utility\Utility;

$id = Utility::sanitize($_POST['id']);
$oldImage = Utility::sanitize($_POST['old_image']);

$product = new Productlist();
if($product->destroy($id)){
   
    if(isset($old_image) && file_exists($frontenddatasource . "productlist.json") ){
        unlink($frontenddatasource.$oldImage);
    }
    else{
        echo "file not found";
    }
    set_session('success', 'product deleted');
    redirect('product_index.php');
}
?>