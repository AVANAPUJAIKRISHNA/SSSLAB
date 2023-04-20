<?php
    $server="localhost";
    $uname="root";
    $pwd="";
    $db="20761A0514";
    $con=mysqli_connect($server,$uname,$pwd,$db);
    if(!$con)
    {
        die("connection Failed");
    }
    $sql="update developers set address='Rattakanna' where id=3";
    if(mysqli_query($con,$sql)) 
    {
        echo "record Update successfully";
    }
    else
    {
        echo "Unable to update record";
    }
    mysqli_close($con);
?>