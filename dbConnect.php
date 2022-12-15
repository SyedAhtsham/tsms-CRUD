<?php
$con = new mysqli("localhost", "root", "root", "tsms",3308);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}
?>
