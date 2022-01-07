<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>VIEW</title>
        <style>
body {
  background-color: powderblue;
}
</style>
</head>
<body>
    <center>
<table border="1px" bgcolor="white">
	<thead>
        <tr>
            <th>No</th>
            <th>Name</th>                       
            <th>Dept</th>
            <th>Age</th>
            <th>Address</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Blood Group</th>
            <th>Gender</th>
            
        </tr>
    </thead>
    <tbody>
        <?php 
        include ('dbconnection.php');
            $id = $_GET['id'];
            $ret=mysqli_query($con,'SELECT * FROM `student` WHERE id = '.$id.'');
            $count = mysqli_num_rows($ret);
            if ($count > 0)
             {
            while ($row=mysqli_fetch_array($ret)) 
          
            { 
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
  
            <td><?php echo $row['name']; ?></td>
             
            <td><?php echo $row['dept']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>   
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['bgroup']; ?></td>
            <td><?php echo $row['gender']; ?></td>
        </tr>
       <?php } } else{ echo 'No Data available';} ?>
       <a href="index.php"><button>HOME</a>
    </tbody>
</table>
</center>

</body>
</html>