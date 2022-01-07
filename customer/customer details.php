<!DOCTYPE html>
<html>
<head>
	<title>CREATE</title>
	    <style>
body {
  background-color: powderblue;
}
</style>
</head>
<body>
	<center>
	<table bgcolor="white" width=45% height=25% border="5">
<form action="insert.php" method="POST">
	<h1>STUDENT DETAILS</h1>
	<tr>
	<td><strong>Name : </strong></td>
	<td><input type="text" name="name" required maxlength="10"></td>
   </tr>
   <tr>
	<td><strong>Place: </strong></td>
	<td><input type="text" name="dept" required maxlength="10"></td>
   </tr>
   <tr>
	<td><strong>amount: </strong></td>
	<td><input type="text" name="age" required maxlength="10"></td>
   </tr>
   
    <tr>
    <td><input type="submit" name="save" value="Create"></td>
	<td><a href="index.php"><button>HOME</a></td>
	</tr>
</form>
</table>
</center>
</body>
</html>