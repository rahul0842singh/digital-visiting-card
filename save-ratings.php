<?php


  $product_id = $_POST["product_id"];
    $ratings = $_POST["ratings"];
    $comments = $_POST["comments"];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $conn = mysqli_connect("localhost", "root", "", "visitingcard");

    mysqli_query($conn, "INSERT INTO ratings (product_id, ratings,comments,name,address,mobile) VALUES ('$product_id', '$ratings','$comments','$name','$address','$mobile')");

    echo 'successful';
    

?>

