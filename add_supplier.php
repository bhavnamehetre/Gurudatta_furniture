<?php
session_start();
if(!isset($_SESSION['log']) || $_SESSION['log'] !== true)
    {
    header("Location: /Gurudatta/index.php"); 
    exit;
}
include('C:xampp/htdocs/Gurudatta/config/db.php');
if(isset($_POST['add_supplier']))
    {
        $supplier_name=$_POST["supplier_name"];
        $mobile=$_POST["mobile"];
        $address=$_POST["address"];
        $created_at=$_POST["created_at"];
        $sql="insert into supplier(supplier_name,mobile,address,created_at)values('$supplier_name','$mobile','$address','$created_at')";
        
        if(mysqli_query($conn,$sql))
            {
                echo"<script>alert('✅Supplier Added Successfully...!');</script>";
            }
            else
            {
                echo"<script>alert('❌Supplier not Added !');</script>";
            }
    }
?>

<html>
    <head>
        <title>Gurudatta|Supplier</title>
        <style>
           
             body
             {
                background-image:url("/Gurudatta/assets/images/3.jpeg");
                background-size: cover;
                background-repeat:no-repeat;
                background-position:center center;
            }
            .container
            {
               height: 600px;
               width: 600px;
               background-color:white;
               padding:0px;
               margin-left: 600px;
               margin-top: 200px;
               border-radius:25px;
            }
            h1
            {
                padding-top:20px;
                font-size:40px;
                text-align:center;
                font-family:cursive;
                color:#a21818f1;
            }
            input
            {
                padding: 10px;
                margin:10px;
                border-radius:10px;
                width:500px;
            }
            input:hover
            {
                background-color:gainsboro;
            }
            form
            {
                font-size:25px;
                padding:30px;
                font-weight:bold;
                font-family:cursive;
            }
            button
            {
                margin-top:5px;
                background-color:#a21818a7;
                height: 50px;
                width:100%;
                border:none;
                color:#fff;
                font-weight:bold;
                font-size:20px;
                font-family:cursive;
                cursor: pointer;
            }
            button:hover
            {
                background-color:#a21818f1;
            }
            a
            {
                color:white;
                font-weight:bold;
                text-decoration:none;
                font-size:20px;
                font-family:cursive;
            }

        </style>    
    </head>    
    <body>
        
    <div class="container">
        <h1>🪑Add Supplier</h1>
        <form method="post">
            Enter name:<input type="text"name="supplier_name"placeholder="Enter Supplier Name"required><br>
            Enter Supplier Mno:<input type="tel"pattern="[0-9]{10}" name="mobile"placeholder="Enter Supplier Conatct Number"required><br>
            Enter Supplier Address:<input type="text"name="address"placeholder="Enter Supplier Address"required><br>
             Created At:<input type="date"name="created_at"placeholder="Enter Date"><br>
            <button type="submit"name="add_supplier">ADD SUPPLIER</button>
        </form>    
    </div>     
    </body>
</html>