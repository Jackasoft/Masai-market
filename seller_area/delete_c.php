



<?php 

  include("includes/db.php");
   
    if(isset($_GET['delete_c']))
     {

      $delete_id=$_GET['delete_c'];

     $delete_c="delete from customers where customer_id='$delete_id'";

     $run_delete=mysqli_query($con,$delete_c) or die("Query not working");
     
     if($run_delete)
     {
     	echo "<script>alert('A Customer has been deleted..!')</script>";
     	echo "<script>window.open('test.php?view_customers','_self')</script>";
     }


     }



?>

  


