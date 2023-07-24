<?php
$con=mysqli_connect("localhost","root","","dbexpensemanager");
if(!$con)
{
    echo "Database not connected";
    die(0);
}
?>