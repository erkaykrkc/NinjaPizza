<?php

    $conn=mysqli_connect('localhost:3306','shaun','','ninja_pizza');

    if(!$conn)
    {
        echo 'Connection Error: '. mysqli_connect_error();
    }

?>