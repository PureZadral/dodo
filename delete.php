<?php
    $connect = mysqli_connect("MySQL-8.2","root","","dodo");
    $delete = 'DELETE FROM cart WHERE id="' . $_GET['id'] . '"';
    mysqli_query($connect, $delete);

    header('Location: index.php');
?>