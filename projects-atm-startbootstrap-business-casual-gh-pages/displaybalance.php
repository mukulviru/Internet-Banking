<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Balance enquiry</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    
</head>
<style>
input[type=submit]
 {
    width: 20%;
    background-color: green;
    color: white;
    padding: 20px 40px;
    margin: 12px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover
 {
    background-color: #45a049;
}
</style>
<?php
	if(isset($_POST['submit1']))
{
		header('location:../index.php');
}
?>
<body>

    <div class="brand">WELCOME TO THE ATM</div>
    

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
          

   

       
    <!-- /.container -->

  <center> <form action="" method="post">
  <h1>YOUR CURRENT BALANCE IS:</h1></br>
  <?php
  include('balancelink.php');
  if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("select * from balanceenq where id='$id'");
$query2=mysql_fetch_array($query1);
}
$query1=mysql_query("select id,balance from balanceenq");
?>
<h2>
<?php
while($query2=mysql_fetch_array($query1))
{
	
	echo "<tr><td>".$query2['balance']."</td>";
}
 ?>
 </h2>
 </br>
   <input type="submit" name="submit1" value="EXIT" /> </br>
   </center>
   </form>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
