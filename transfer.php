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
  font-family: "Times New Roman";
  float: left;
  font-size: 0.6cm;
  padding-left: 0.5cm;
  padding-top: 0.4cm;
  padding-bottom: 0.4cm;
  color:  white;
  
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
   font-family: "Times New Roman";

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
  color: white;
}
.open-button {
    background-color: #FFA500;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 4cm;
  left: 14cm;
  width: 8.5cm;
  top:115px;
}

.form-popup {
  display: none;
  position: fixed;
 
  top: 2.7cm;
  left: 25cm;
  border: 3px solid #f1f1f1;
  z-index: 9;

}


.form-container {
  max-width: 350px;
 
  padding: 10px;
  background-color: white;

}


.form-container input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}



.form-container input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}



.form-container input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  margin-top: 1.5cm;
}
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
  margin-left: 16cm;
  margin-top: 0.2cm;
}
.form-container .cancel {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  margin-top: 0cm;
}

table

{

border-style:solid;

border-width:2px;
margin-left: 1.5cm;
 font-family: "Times New Roman";
border-color:pink;

}
/* Add a red background color to the cancel button */
.form-container .cancel {
 
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

/* The container must be positioned relative: */
.box{
  position: absolute;
  top: 6cm;
  left: 50%;
  transform: translate(-50%,-50%);

}
.box select{
  background-color: #ddd;
  height: 1.1cm;
  border: none;
  padding: 10px;
  width: 370px;
}


</style>

<button class="open-button" onclick="openForm()"> MAKE TRANSFER</button>

<div class="form-popup" id="myForm">
 

  <form method="POST" action="transfer.php" class="form-container" enctype="multipart/form-data">
 
    <h1>Transfer Money</h1>

    <label for="customer_name1"><b>From</b></label>
    <input type="text" placeholder="Enter customer name" name="customer_name1" required>
   <label for="customer_name2"><b>To</b></label>
    <input type="text" placeholder="Enter customer name" name="customer_name2" required>
    <label for="amount"><b>Amount</b></label>
    <input type="number" placeholder="Enter amount" name="amount" required>
  <div class="box" >
 
</div>

   
    <button type="submit" class="btn" name="Save" value="upload image">Save changes</button>
   
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "dashboard";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if(isset($_POST['Save']))
{
  $customer_name1=$_POST['customer_name1'];
  $customer_name2=$_POST['customer_name2'];
  $amount=$_POST['amount'];
  $sql = "INSERT INTO transfer (customer_name1,customer_name2,amount)
values ('$customer_name1','$customer_name2','$amount')";
$sql_run=mysqli_query($conn,$sql);

if ($sql_run){  
  echo'<script type="text/javascript">alert("Transfer made successfully")</script>';
}
else{
  echo'<script type="text/javascript">alert("ERROR in transfering")</script>';
}
}
?>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

    document.getElementById("myButton").onclick = function () {
        location.href = "transfer.php";
    };

</script>

</body>
</html>