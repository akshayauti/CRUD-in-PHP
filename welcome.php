<!-- <?php
	// if (isset($_POST["submit"])) {
	// 	$con = mysqli_connect("localhost","root","","Form")or
	// 	die(mysqli_error($con));

	// 	if($con){
	// 		echo "connection successful";
	// 		$email = $_POST["email"];
	// 		$password = $_POST["password"];

	// 		$record =  "INSERT INTO `login`(`email`, `password`) VALUES ([$email],[$password])";

	// 		$result = mysqli_query($con, $record);
	// 		if($result){
 //     			echo "yeh!!!!";
 //   			}
 //   			header('location : index.php');

	// 	}
	// }
	// else{
	// 	// header('Location : index.php');
	// }

?> -->

<?php

  if(isset($_POST['submit'])){

    $user_email = $_POST['email'];
    $user_password = $_POST['password'];


    $con = mysqli_connect("localhost", "root", "", "Form")or
	die(mysqli_error($con));

    $q = "INSERT INTO `login`(`email`, `password`) VALUES ('$user_email','$user_password')";

    $result = mysqli_query($con, $q);
    if($result){
    	echo "<script></script";
    }

    header('location: index.php');


  }

  ?>
