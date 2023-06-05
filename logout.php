
<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php



session_start();
session_unset();
session_destroy();

header('location:login_form.php');

?>