<?php
require 'databaseconnect.php';
if (isset($_POST['submit'])) {
  if (isset($_POST['fullname']) && isset($_POST['phone']) &&
      isset($_POST['address']) && isset($_POST['postal']) && 
      isset($_POST['email']) && isset($_POST['productname']) && isset($_POST['proqua'])) {
    $fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$postal= $_POST['postal'];
	$email = $_POST['email'];
    $productname = $_POST['productname'];
    $proqua = $_POST['proqua'];
	$query="insert into `addprod` (`fullname`,`phone`,`address`,`postal`,`email`,`productname`,`proqua`) values('$fullname','$phone','$address','$postal','$email','$productname','$proqua')";
	$qr=mysqli_query($mysqlc,$query);
}
}
?>
<html>
<body>
    you have successfully added the details.
</body>
</html>