<?php
include ('dbconnection.php');
if ($_POST['save']) {

	// to get name as input
	if (!empty($_POST['name'])) {
		$name = $_POST['name'];
	} else {
		echo 'Name is empty';
	}

	// to get dept as input
	if (!empty($_POST['dept'])) {
		$dept = $_POST['dept'];
	} else {
		echo 'Dept is empty';
	}

	// to get age as input
	if (!empty($_POST['age'])) {
		$age = $_POST['age'];
	} else {
		echo 'Age is empty';
	}
	// to get address as input
	if (!empty($_POST['address'])) {
		$address = $_POST['address'];
	} else {
		echo 'Address is empty';
	}
	// to get email as input
	if (!empty($_POST['email'])) {
		$email = $_POST['email'];
	} else {
		echo 'Email is empty';
	}
	// to get dob as input
	if (!empty($_POST['date'])) {
		$date = $_POST['date'];
	} else {
		echo 'DOB is empty';
	}

	if (!empty($_POST['bgroup'])) {
		$bgroup = $_POST['bgroup'];
	} else {
		echo 'Blood Group is empty';
	}

	if (!empty($_POST['gender'])) {
		$gender= $_POST['gender'];
	} else {
		echo 'Gender is empty';
	}

	// insert the data
	$sql = mysqli_query($con, "Insert into student(name, dept,age,address,email,dob,bgroup,gender) value('$name', '$dept','$age','$address','$email','$date','$bgroup','$gender')");

	

	if($sql){
		echo 'Inserted !';
		header('Location:index.php');

	} else {
		echo 'try again';
	}

}
 ?>