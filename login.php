<?php
    require "conn.php";
    $username = $_POST["username"];*/
    $userpass = $_POST["password"];*/
    //$username = "taylor";
    //$userpass = "knight";

    $mysql_qry = "SELECT * FROM users WHERE username like '$username' and password like '$userpass';";
    $result = mysqli_query($conn , $mysql_qry);
    if(mysqli_num_rows($result) > 0) {
      echo "login success! Welcome $username";
    }
    else {
      echo "login not success";
    }
?>
