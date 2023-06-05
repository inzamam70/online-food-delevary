<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Home page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="../global_assets/css/style.css">
</head>

<body>

  <!-- nav -->
  <?php include_once($partialfrontend . 'navfrontend.php'); ?>

  <!-- cursol -->
  <?php include_once($partialfrontend . 'slider.php'); ?>

  <!-- about -->
  <?php include_once($partialfrontend.'about.php');?>
  

  <section id="productlist" class="productlist section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2> Product List</h2>
            <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Ipsum, sit officia? </p>


          </div>
        </div>
      </div>

      <div class="row">
      <?php include_once($partialfrontend . 'productlist.php'); ?>
      </div>
  </section>

  <section  class="productlist section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h1 style="color: red;">Trending Outdoor Places</h1>
            <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Ipsum, sit officia? </p>


          </div>
        </div>
      </div>

      <div class="row">
      <?php include_once($partialfrontend . 'outdoorlist.php'); ?>
      </div>
  </section>







  <?php include_once($partialfrontend . 'footer.php'); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>



</body>

</html>