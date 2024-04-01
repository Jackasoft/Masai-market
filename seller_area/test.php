<?php 
session_start();
if(!isset($_SESSION['user_email']))
{

echo "<script> window.open('sell_interface_login.php?not_admin=You are not a admin !','_self') </script>";


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Div Layout</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    #main_container {
        display: flex;
        justify-content: space-between;
        align-items: stretch; /* Allow items to stretch to fill container vertically */
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
        background-color: #f0f0f0;
    }
    #left {
        background-color: #3498db;
        color: white;
        padding: 20px;
        flex-grow: 1; /* Allow the left div to grow to fill available space */
    }
    #right {
        background-color: rgba(231, 76, 60, 0.7); /* Reduce opacity to make it semi-transparent */
        color: white;
        padding: 20px;
        width: calc(33.33% - 20px); /* Set the width to one-third of the container's width, accounting for padding */
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    #right h2 {
        color: yellow;
        margin-bottom: 20px;
    }
    #right a {
        color: white;
        text-decoration: none;
        margin-bottom: 10px;
        padding: 5px 10px; /* Add padding to create space between elements */
        transition: background-color 0.3s; /* Add transition for smooth effect */
    }
    #right a:hover {
        background-color: rgba(255, 255, 255, 0.3); /* Change background color on hover */
    }
</style>
</head>
<body>

<div id="main_container">
    <div id="left">
        <h2 style="color: red; text-align: center; color:white;"> <?php echo @$_GET['logged_in'];   ?> </h2>
     	<?php
               if(isset($_GET['insert_product']))
               {
               	include("insert_product.php");
               }

               if(isset($_GET['view_products']))
               {
               	include("view_products.php");
                }

                if(isset($_GET['edit_pro']))
               {
               	include("edit_pro.php");
               }

                if(isset($_GET['insert_cat']))
               {
                include("insert_cat.php");
               }

                if(isset($_GET['view_cats']))
               {
                include("view_cats.php");
               }

                if(isset($_GET['edit_cat']))
               {
                include("edit_cat.php");
               }

                if(isset($_GET['insert_brand']))
               {
                include("insert_brand.php");
               }

               if(isset($_GET['view_brands']))
               {
                include("view_brands.php");
               }
                
                if(isset($_GET['edit_brand']))
               {
                include("edit_brand.php");
               }

               if(isset($_GET['view_customers']))
               {
                include("view_customers.php");
               }

     	?>
    </div>
    <div id="right">
        <h2>Manage Content</h2>
        <a href="test.php?insert_product">Insert Product</a>
     	     <a href="test.php?view_products">View Product</a>
     	      <a href="test.php?insert_cat">Insert New Category</a>
     	       <a href="test.php?view_cats">View All Categories</a>
     	        <a href="test.php?insert_brand">Insert New Brand</a>
     	         <a href="test.php?view_brands">View All Brands</a>
     	          <a href="test.php?view_customers">View Customers</a>
     	           <a href="test.php?view_orders">View Orders</a>
     	            <a href="test.php?view_payments">View Payments</a>
                  <a href="../index.php">Seller Logout</a>

    </div>
</div>

</body>
</html>
