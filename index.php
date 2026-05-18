<?php
session_start();
include('config/db.php');

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM owner WHERE oname = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($owner = $result->fetch_assoc()) 
      {
        if ($password === $owner['opassword']) 
          {
            $_SESSION['oid'] = $owner['oid'];
            $_SESSION['oname'] = $owner['oname'];
             $_SESSION['log'] = true;
            header("Location:dashboard.php");
            exit();
          } 
         else 
        {
            $error = "Invalid password.";
        }
    } 
    else 
    {
        $error = "owner not found.";
    }
}
?>

<html>
    <head>
        <title>Gurudatta|Login</title>
        <style>
           
             body
             {
                background-image:url("assets/images/3.jpeg");
                background-size: cover;
            }
            .container
            {
               height: 410px;
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
        <h1>👤Gurudatta Login</h1>
        <form method="post">
            Enter name:<input type="text"name="name"placeholder="Enter Your Name"><br>
            Enter Password:<input type="text"name="password"placeholder="Enter Your password"><br>
            <button>Login</button>
        </form>    
    </div>     
    </body>
</html>