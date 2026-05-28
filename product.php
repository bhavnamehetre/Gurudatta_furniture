<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="product.css">
</head>
<body>

<h2>Add New Product</h2>

<form action="product.php" method="post">
    <label>Product Name</label>
    <input type="text" name="product_name" required>

    <label>Category</label>
    <select name="category">
        <option>Chair</option>
        <option>Table</option>
        <option>Sofa</option>
        <option>Bed</option>
    </select>

    <label>Price</label>
    <input type="number" name="price" required>

    <label>Quantity</label>
    <input type="number" name="quantity" required>

    <label>Supplier</label>
    <input type="text" name="supplier">

    <label>Description</label>
    <textarea name="description"></textarea>

    <button type="submit">Save Product</button>
</form>

</body>
</html>

<?php
 $a=$_POST["price"];
 $b=$_POST["quantity"];
 $c=$_POST["supplier"];
 $d=$_POST["product_name"];
 $e=$_POST["description"];

 
    $db=new mysqli("localhost","root","","project")or die("not");
    echo "connected";
    // $sql="create table product(pname varchar(20),price int primary key ,quantity int ,supplier varchar(20),desp varchar(20))";
    
    $sql="insert into product(price,quantity,supplier,pname,desp)values($a,$b,$c,'$d','$e')";
    
    if($db->query($sql)===TRUE)
    {
        echo "successfully";
    }
    else 
    {
        echo "error";
    }
    $db->close();
?>