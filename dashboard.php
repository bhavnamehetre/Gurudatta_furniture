<?php
session_start();
if(!isset($_SESSION['oname']))
{
    header('Location:index.php');
    exit();
}
include('config/db.php');

$low_stock_threshold=5;
$sql_stock="select count(*) as low_stock_count from product where stock <= $low_stock_threshold";
$result_stock=mysqli_query($conn, $sql_stock);
$low_stock_count = 0;
if($result_stock)
{
    $row_stock = mysqli_fetch_assoc($result_stock);
    if($row_stock && isset($row_stock['low_stock_count']))
    {
        $low_stock_count = intval($row_stock['low_stock_count']);
    }
}

$today = date('Y-m-d');
$sql_sales = "select count(*) as total_bills, sum(total_amount) as total_sales from sales where sales_date='$today'";
$result_sales = mysqli_query($conn, $sql_sales);
$row_sales = mysqli_fetch_assoc($result_sales);
$total_bills = $row_sales['total_bills'];
$total_sales = $row_sales['total_sales'];
?>
<html>
<head>
    <title>Gurudatta | Dashboard</title>
    <style>
        body 
        {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image:url("/Gurudatta/assets/images/4.jpeg");
            background-size: cover;
            background-repeat:no-repeat;
            background-position:center center;
        }
        
        .nav-vertical 
        {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 220px;
            background-color: #8B4513;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 30px;
            padding: 50px ;
            box-shadow: 2px 0 10px rgba(0,0,0,0.3);
        }

        .nav-vertical select 
        {
            width: 115%;
            padding: 20px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            
        }

        .nav-vertical select:hover 
        {
            background-color: #a0522d;
            color: #fff;
        }

    
        .dashboard-header 
        {
            margin-left: 240px; 
            text-align: center;
            margin-top: 40px;
            margin-bottom: 30px;
        }

        .dashboard-header .shop-logo 
        {
            width: 130px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            margin-top:5px;
            padding:10px;
        
        }

        .dashboard-header .shop-name 
        {
            font-size: 80px;
            color: #8B4513;
            font-weight: bold;
            border: 2px solid #FFD700;
            padding: 5px 15px;
            border-radius: 8px;
            display: inline-block;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.59);
            font-family:cursive;
            background-color:white;
        }

       
        .dashboard-cards 
        {
            margin-left: 380px;
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
            padding-bottom: 50px;
        }

        .card 
        {
            background-color: #8B4513;
            color: #fff;
            width: 300px;
            height: 130px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
            font-weight: bold;
            font-size: 20px;
            transition: transform 0.3s, background-color 0.3s;
        }

        .card:hover 
        {
            transform: translateY(-5px);
            background-color: #a0522d;
        }

        .card a 
        {
            text-decoration: none;
            color: #fff;
            text-align: center;
              animation:urgent 1s infinite;
        }

         @keyframes urgent
        {
            0%{transform:scale(1);box-shadow:0 0 0 rgba(107,15,26,0.7);}
            30%{transform:scale(1.15);box-shadow:0 0 12px rgba(255, 234, 0, 0.76);}
            50%{transform:scale(1.1)translateX(-2px);}
            70%{transform:scale(1.15)translateX(2px);box-shadow:0 0 18px rgba(255, 230, 0, 0.51);}
            100%{transform:scale(1);box-shadow:0 0 0 rgba(107,15,26,0.7);}
        }
        .card span
         {
            display: block;
            margin-top: 8px;
        }

    </style>
</head>
<body>

 
    <div class="nav-vertical">
        <form method="POST">
            <select onchange="if(this.value) window.location.href=this.value;">
                <option value="">Product</option>
                <option value="product/add_product.php">Add Product</option>
                <option value="product/view_Product.php">View Product</option>
                <option value="product/delete_product.php">Delete Product</option>
                <option value="product/edit_Product.php">Edit Product</option>
                <option value="product/stock_alert.php">Stock Alert</option>
            </select>

            <select onchange="if(this.value) window.location.href=this.value;">
                <option value="">Customer</option>
                <option value="customer/add_customer.php">Add Customer</option>
                <option value="customer/view_customer.php">View Customer</option>
            </select>

            <select onchange="if(this.value) window.location.href=this.value;">
                <option value="">Report</option>
                <option value="report/daily_report.php">Daily Report</option>
                <option value="report/monthly_report.php">Monthly Report</option>
            </select>

            <select onchange="if(this.value) window.location.href=this.value;">
                <option value="">Sales</option>
                <option value="sales/add_sales.php">Add Sales</option>
                <option value="sales/sales_details.php">Sales Details</option>
                <option value="sales/view_sales.php">View Sales</option>
            </select>

            <select onchange="if(this.value) window.location.href=this.value;">
                <option value="">Supplier</option>
                <option value="supplier/add_supplier.php">Add Supplier</option>
                <option value="supplier/view_supplier.php">View Supplier</option>
            </select>
        </form>
    </div>

  
    <div class="dashboard-header">
        <img src="assets/images/logo.png" alt="Furniture Shop Logo" class="shop-logo">
        <h1 class="shop-name">Gurudatta Furniture Shop</h1>
    </div>

   
    <div class="dashboard-cards">
        <div class="card">
            <a href="product/stock_alert.php">
                ⚠️ Stock Running Out
                <span><?php echo $low_stock_count; ?></span>
            </a>
        </div>

        <div class="card">
            <a href="report/daily_report.php">
                Today's Sales: ₨<?php echo $total_sales; ?>
                <span>Total Bills: <?php echo $total_bills; ?></span>
            </a>
        </div>
    </div>

</body>
</html>