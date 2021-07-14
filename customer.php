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
  font-family: Arial, Helvetica, sans-serif;
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
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 4.5cm;
  left: 17.5cm;
  width: 5.5cm;
}


.form-popup {
  position: fixed;
  display: none;
  bottom: 500px;
  left: 24cm;
  border: 3px solid #f1f1f1;
  z-index: 9;
max-height: 800px;

}


.form-container {
  max-width: 400px;
 top: 2.5cm;
  position: fixed;
  bottom: 1cm;

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

.form-container input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


.form-container input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container input[type=tel] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


.form-container input[type=tel]:focus {
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


.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-bottom:60px;
  opacity: 0.8;
  margin-top: -1cm;

}
.btn1 {
  background-color: #FFA500;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 4.5cm;
  left: 17.5cm;
  width: 5.5cm;
  top:115px;
}
.form-container .cancel {
   background-color: red;
color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 13%;
position: fixed;
  opacity: 0.8;
  margin-top: -0.4cm;
left: 29.5cm;
}

table

{
   font-family: "Times New Roman";

border-style:solid;

border-width:2px;
margin-left: 1.5cm;


border-color:pink;

}



.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

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

 <form method="POST" action=" new.php">
       <button type="submit"  class="btn1">DISPLAY CUSTOMERS</button>
     </form>

<button class="open-button" onclick="openForm()"> + ADD CUSTOMERS</button>

<div class="form-popup" id="myForm">
 

  <form method="POST" action="customer.php" class="form-container" enctype="multipart/form-data">
 
    <h1>Add customer</h1>
     
    <label for="customer_name"><b>Customer name</b></label>
    <input type="text" placeholder="Enter customer name" name="customer_name" required>
    <label for="customer_email"><b>Customer email</b></label>
    <input type="email" placeholder="Enter customer email id" name="customer_email" required>
    <label for="customer_no"><b>Phone no</b></label>
    <input type="tel" placeholder="Enter customer phone no" name="customer_no" required>
    <label for="balance"><b>Deposit amount</b></label>
    <input type="number" placeholder="Enter amount" name="balance" required>
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
  $customer_name=$_POST['customer_name'];
  $customer_email=$_POST['customer_email'];
  $customer_no=$_POST['customer_no'];
   $balance=$_POST['balance'];
  $sql = "INSERT INTO customer (customer_name,customer_email,customer_no,balance)
values ('$customer_name','$customer_email','$customer_no','$balance')";
$sql_run=mysqli_query($conn,$sql);

if ($sql_run){  
  echo'<script type="text/javascript">alert("New customer is added")</script>';
}
else{
  echo'<script type="text/javascript">alert("ERROR in adding")</script>';
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
        location.href = "customer.php";
    };

</script>

</body>
</html>