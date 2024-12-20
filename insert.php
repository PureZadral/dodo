<?php
    $connect = mysqli_connect("MySQL-8.2","root","","dodo");
    $query = "INSERT INTO cart ( name, ingredients, price, img) VALUES (
        '{$_GET["name"]}',
        '{$_GET["ingredients"]}',
        '{$_GET["price"]}',
        '{$_GET["img"]}'
    )";
    mysqli_query($connect, $query);
    header('Location: index.php');
?>