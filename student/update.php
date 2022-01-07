<?php
include('dbconnection.php');
// if(isset($_POST['update']))
  {
  	$id=$_GET['id'];
  	//Getting Post Values
    $name=$_POST['name'];
    $dept=$_POST['dept'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $bgroup=$_POST['bgroup'];
    $gender=$_POST['gender'];
    
  	// print_r($address);exit;

    //Query for data updation
     $query=mysqli_query($con, "UPDATE student set 
      name='$name',
      dept='$dept',
      age='$age',
      address='$address',
      email='$email',
      dob='$date' ,
      bgroup='$bgroup',
      gender='$gender'
      WHERE id='$id'");

    
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>