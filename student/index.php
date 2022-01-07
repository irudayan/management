<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>INDEX</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">    </script>
 <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function () {
        $('#example').dataTable();
    });
</script>

<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
</head>
<style>
     
body{
  background-color: powderblue;
}
</style>
<center>
    <h1>STUDENT DETAILS</h1>
       

                    <a href="innerjoin.php"><button>INNER</button></a>
                    <a href="leftjoin.php"><button>LEFT</button></a>
                    <a href="rightjoin.php"><button>RIGHT</button></a>
<table id="example" border="1px" bgcolor="white">
	<thead>
       
       
        <tr>
           <th>No</th>
            <th>Name</th>                       
            <th>Dept</th>
            <th>Age</th>
            <th>Address</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include ('dbconnection.php');
           $ret=mysqli_query($con,'SELECT * FROM `student` ORDER BY `id` DESC;');
            $count = mysqli_num_rows($ret);
            if ($count > 0) 
            {
            while ($row=mysqli_fetch_array($ret)) { 
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dept']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            
             <td>

<a href="create.php" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Add</strong></span>            
    </a>
    <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>            
    </a>
    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
        <span><strong>View</strong></span>            
    </a>
    <a onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-primary a-btn-slide-text">
       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Delete</strong></span>            
    </a>

            </td>

        </tr>

  <?php } } else{ echo 'No Data available';} ?>

    </tbody>
</table>
<br>
    </center>
</body>
</html>
