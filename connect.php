<?php
    $con = new mysqli('localhost','root','Omar@0674','commerce');

    if(!$con){
        die(mysqli_error($con));
    }
?>