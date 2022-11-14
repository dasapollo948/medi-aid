<?php
$_name = $_POST['name'];
$_email = $_POST['email'];
$_message = $_POST['message'];


$servername = "localhost";
$username = "root";
$password = "";


  $conn = new PDO("mysql:host=$servername;dbname=medi_aid", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";

  $qurey = "INSERT INTO `contact` (`name`, `email`, `message`)
   VALUES (:name, :email, :message )";

   $stmt=$conn->prepare( $qurey);
   $stmt->bindParam('name' ,$_name );
   $stmt->bindParam('email' ,$_email );
   $stmt->bindParam('message' ,$_message );
 
   $result= $stmt->execute();
   header("mailto: dasapollo948@gmail.com");


?>