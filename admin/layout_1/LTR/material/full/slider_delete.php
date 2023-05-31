<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php
// $id =$_POST['id'];

// $sliderjason = file_get_contents($frontenddatasource . "slider.json");
// $slideritems = json_decode($sliderjason);
// foreach($slideritems as $key=>$slide){
//     if($slide->id == $id){
//         break;
//     }
// }

// unset($slideritems[$key]);
// $slideritems = array_values($slideritems);
// $data_slides = json_encode($slideritems);

// if(file_exists($frontenddatasource . "slider.json")){
//     $result = file_put_contents($frontenddatasource . "slider.json" ,$data_slides);
//     if($result){
//         redirect('slider_index.php');
//     }
//     }
//     else{
//         echo "file not found";
//     }
    
use \BITM\CUMPUS\Slider;
use \BITM\CUMPUS\Utility\Validator;
use \BITM\CUMPUS\Utility\Utility;
 
$id = Utility::sanitize($_POST['id']);
$oldImage = Utility::sanitize($_POST['old_image']);

$slide = new Slider();


if($slide->destroy($id)){
   
    if(isset($old_image) && file_exists($frontenddatasource . "slider.json") ){
        unlink($frontenddatasource.$oldImage);
    }
    else{
        echo "file not found";
    }
    set_session('success', 'Slider deleted');
    redirect('slider_index.php');
}
// if(!Validator::empty($id)){
//     dd($id);
//     $slider = new Slider();
//     $result = $slider->destroy($id);
    
// }else{ // REfactor using Session based message
//     d("Id cannot be null or empty");
// }

//  if($result = null){ // edge case is not handled. if it writes nothing. length = 0
//      redirect('slider_index.php');		
//  }
 ?>
