<?php require_once("db_connect.php"); ?>

<?php
if (isset($_POST['save'])) {
    //process the form


} else {
    //most likely a GET request
    redirect_to("new_subject.php");
}

?>

<?php require_once("db_close.php"); ?>
