<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="dash.css">
</head>
<nav class="topnav">
 <h2 class="logo">BANKING SYSTEM</h2>
  <a href="transaction.php" class="transaction">TRANSACTION HISTORY</a>
  <a href="transfer.php" class="transfer">TRANSFER MONEY</a>
   <a href="customer.php" class="customer">CUSTOMERS</a>
  <a href="index.php" class="dash">HOME</a>
 
 
</nav>
<style>
body {font-family: Arial, Helvetica, sans-serif;
             background-repeat: no-repeat;
              font-family: "Times New Roman";
            

           
  background-size: cover;}
* {box-sizing: border-box;


}

html{ background-image: url(b.jpg);}
.topnav {
  overflow: hidden;
  background-color: black;

}
.logo{
  float: left;
  font-size: 0.6cm;
  padding-left: 0.5cm;
  padding-top: 0.4cm;
  padding-bottom: 0.4cm;
  color:  white;
  font-style: sans-serif;
}
.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 0.8cm 0.8cm;
  padding-left: 0.6cm;
  padding-right: 0.6cm;
  text-decoration: none;
  font-size: 17px;

 }

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.tp{
  padding: 0.5cm;
  background-color: #9ee6d8;
  color: #455ca8;
  margin-top: 2cm;
}
.tp:hover {
  background-color: #5F9EA0;
  color: black;
}

.tp.active {
  background-color: #5F9EA0;
  color: white;
}

.to{
  padding: 0.5cm;
  background-color: #9ee6d8;
  color: #455ca8;
  margin-top: 2cm;
}
.to:hover {
  background-color: #5F9EA0;
  color: black;
}

.to.active {
  background-color: #5F9EA0;
  color: white;
}
.tr{
  padding: 0.5cm;
  background-color: #9ee6d8;
  color: #455ca8;
  margin-top: 2cm;
}
.tr:hover {
  background-color: #5F9EA0;
  color: black;
}

.tr.active {
  background-color: #5F9EA0;
  color: black;
}

tbody tr:nth-child(odd) {
  background-color: #707070;

}

tbody tr:nth-child(even) {
  background-color: #303030;
  
}

tbody tr {
  background-image: url(b.png);

}

table {
  background-color: black;
  width: 30cm;
  background: transparent;
   color: white;
   font-weight: 500;
   font-size: larger;

}
tbody tr:nth-child(even):hover {background-color: black;}
tbody tr:nth-child(odd):hover {background-color: black;}
.btn1 {
  background-color: #FFA500;
  color: white;
  padding: 16px 20px;
  text-align: center;
  border: none;
  cursor: pointer;
  width: 7.5cm;
  margin-bottom:2px;
  opacity: 0.8;
 
  margin-top: 0.2cm;
}
</style>
<body>
  <center>

 <form method="POST" action=" transfer.php">
       <button type="submit"  class="btn1">Close</button>
     </form>
 <form method="POST" action="" enctype="multipart/form-data">

<table>
  <thead>
    <tr>
     <th>FROM CUSTOMER</th>
     <th>TO CUSTOMER</th>
     <th>AMOUNT</th>
</tr>
  </thead>
<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "dashboard";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

  $query= "SELECT * from transfer";
  $query_run=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($query_run))
  {
      ?>
      <tr>
      <td><?php echo $row['customer_name1']?></td>
      <td><?php echo $row['customer_name2']?></td>
      <td><?php echo $row['amount']?></td>
      </tr>
      <?php
  }
  ?>
</table>
</form></center>
</body>