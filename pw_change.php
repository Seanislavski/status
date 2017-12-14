<?php
session_start();
require_once './db_connect.php';
global $conn;
if ($_SESSION){
$user = mysqli_real_escape_string($conn, $_SESSION['username']);
if (isset($_POST['submit'])){
    //start changing password
    //check fields
    $oldpw = $_POST['oldpw'];
    $oldpwE = mysqli_real_escape_string($conn, $oldpw);
    $newpw = $_POST['newpw'];
    $newpwT = trim($newpw);
    $newpwE = mysqli_real_escape_string($conn, $newpwT);
    $rnewpw = $_POST['rnewpw'];
    $rnewpwT = trim($rnewpw);
    $rnewpwE = mysqli_real_escape_string($conn, $rnewpwT);
    // check pw against db
    // connect to db
    include('db_connect.php');
    $sql = "SELECT password FROM users WHERE username = '$user'"; //getting FROM the db does not need to be escaped. Only entering info to the db.
    mysqli_free_result($result);
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $oldpwdb = $row['password'];
    if (password_verify($oldpwE, $oldpwdb)){
        if (strlen($newpw) >= 8){
            if ($newpwE == $rnewpwE){
                $pw = password_hash($newpwE, PASSWORD_DEFAULT);
                $q2 = "UPDATE users SET password = '$pw' WHERE username = '$user'";
                $query2 = mysqli_query($conn, $q2);
                if (!$result){
                echo mysqli_error($conn);
                }
                session_destroy();
                die("<div class=\"pull-right status_check panel panel-danger pwbox\"><h3>Your password has been changed <a href='admin.php'>Log in</a>.</h3></div>");
            } else {
            echo '<div class="pull-right status_check panel panel-danger pwbox">New passwords don\'t match</div>';
            }
        } else {
            echo '<div class="pull-right status_check panel panel-danger pwbox">New password must be at least 8 characters.</div>';
        }
    } else {
        echo '<div class="pull-rig  ht status_check panel panel-danger pwbox">Current password was incorrect </div>';
    }
} else {
    echo '<div class="pull-right status_check panel panel-warning pwbox">Password hasn\'t been set</div>';
}
//user is logged in
echo "<div class=\"pull-right status_check panel panel-success pwbox\">Logged in as: <b>" . $_SESSION['username'] . "</b></div>";
echo "
<html>
<head>
<title>Change Your Password</title>
<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" />
<link href=\"style/style.css\" rel=\"stylesheet\" />
</head>
<body>
<div class=\"container col-sm-6 col-sm-offset-3 box\">
<div class='panel panel-default inside'>
<header id=\"header\" class=\"header\">
    Change Your Password
</header><!-- /header -->
<br>
    <form action='pw_change.php' method='POST'>
        Old password: <input type='password' name='oldpw' class='pull-right'>
        <br><br>
        New password: <input type='password' name='newpw' class='pull-right'>
        <br><br>
        Repeat new password: <input type='password' name='rnewpw' class='pull-right'>
        <p><br>
    <input type='submit' name='submit' value='Change Password' class=\"pull-right chpw_btn\">
</div>
</div>
</body>
</html>
";
} else {
    $user = '';
    echo '
    <html>
    <head>
    <title>Not logged in</title>
    <link href=\"style/style.css\" rel=\"stylesheet\" />
    </head>
    <body>
        <h3>
        Not logged in. <a href="login.php">Click here</a> to log in before proceeding.
        </h3>
    </body>
    </html>
    ';
}


    // echo "<div class='message'>You must be logged in to change your password</div>";
    // echo "<br><a href=\"login.php\" class=\"login\">Back</a>";
// }

?>
