<?php

$connect = mysqli_connect('localhost','root','','bazadannyx');

if(!$connect){
    echo 'ytn';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <table>
        <tr>
        <th>id</th>
        <th>title</th>
        <th>price</th>
        <th>description</th>
        </tr>
        <?php  $products = mysqli_query($connect,"SELECT * FROM `products`");
            $products = mysqli_fetch_all($products);
       foreach($products as $product){
        echo 
       }
        ?>
        <tr>
            <td>1</td>
            <td>product</td>
            <td>book1</td>
            <td>1000</td>
        <tr>
        

    </table>
</body>
</html>