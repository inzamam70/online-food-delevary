<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php
if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';
    } else {

        if ($pass != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
};
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
    <link rel="stylesheet" href="../global_assets/css/registration.css">
</head>

<body>

    <?php include_once($partialfrontend . 'navfrontend.php'); ?>

    <section class="form my-4 mx-5 pt-5 pb-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="../global_assets/img/login.jpg" class="" alt="" width="100%" height="100%">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3 text-danger">Online Food Delivary</h1>
                    <h4>Registration your account</h4>
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            echo '<span class="error-msg">' . $error . '</span>';
                        };
                    };
                    ?>
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" name="name" placeholder="Enter your name" class="form-control my-2 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="Email-Address" class="form-control my-2 p-2">
                            </div>
                        </div>
               
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="Enter password" class="form-control my-2 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="cpassword" placeholder="Confirm password" class="form-control my-2 p-2">
                            </div>
                        </div>
                        <select name="user_type">
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit" name="submit" value="Register now" class="btn1 mt-3 mb-5">
                            </div>
                        </div>
                        <p>already have an account? <a href="login_form.php">login now</a></p>
                </form>
            </div>
        </div>
        </div>
    </section>


    <?php include_once($partialfrontend . 'footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>



</body>

</html>