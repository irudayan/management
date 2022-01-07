<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LEFTJOIN</title>
    <style>
body {
  background-color: powderblue;
}
</style>
</head>
<body>


<center>
    <h1>LEFTJOIN</h1>
<a href="index.php"><button>back</button></a>
<table border="1px" bgcolor="white">
	<thead>
        
        <tr>
            <th>No</th>
            <th>Name</th>                       
            <th>place</th>
            <th>amount</th>
            <th>Address</th>
            <th>Email</th>
           
        </tr>
    </thead>
    <tbody>
        <?php 
        include ('dbconnection.php');
           $ret=mysqli_query($con,"SELECT student.*, customers.*
                 FROM customer as customers
                 LEFT JOIN student
                 ON customers.student_id = student.id
                 -- WHERE student.id = 5
                 ");

            while ($row=mysqli_fetch_array($ret)) { 
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['place']; ?></td>
            <td><?php echo $row['amount']; ?></td>
             <td><?php echo $row['address']; ?></td> 
             <td><?php echo $row['email']; ?></td>

            
        
        </tr>

 <?php } ?>


 
    </tbody>
</table>
<br>

    </center>

</body>
</html>
