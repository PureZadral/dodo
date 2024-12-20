<?php
    $connect = mysqli_connect("MySQL-8.2","root","","dodo");
    $deleteall = 'DELETE FROM cart';
    mysqli_query($connect, $deleteall);

    header('Location: index.php');
?>