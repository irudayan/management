<!DOCTYPE html>
<html>
<head>
	<title>CREATE</title>
	    <style>
body {
  background-color: powderblue;
}
</style>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js">
</script>
<script>
      $(document).ready(function() {
      $("form").validate({
          rules: {
            name: "required",
            lettersonly:true
            email: {
              required: true,
              email: true,
            },
             dob: {
            dob: true
          },
          messages: {
            name: "Please enter your name",
            email: "Please enter a valid email address",
            dob:"enter you date of birth"
          },
          submitHandler: function(form) {
            return false;
          }
         }
        });
      });
</script>
</head>
<body>
	<center>
	<table bgcolor="white" width=45% height=25% border="5">
<form action="insert.php" id="form" method="POST">
	<h1>STUDENT DETAILS</h1>
	<tr>
	<td><strong>Name : </strong></td>
	<td><input type="text" name="name" id="name" 
		onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"
	 required maxlength="30">
	</td>
   </tr>
   <tr>
	<td><strong>Dept : </strong></td>
	<td><input type="text" name="dept" id="dept" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required></td>
   </tr>
   <tr>
	<td><strong>Age : </strong></td>
	<td><input type="text" name="age" id="age" maxlength="2" required></td>
   </tr>
   <tr>
	<td><strong>Address : </strong></td>
	<td><textarea name="address" id="address" size="15" required></textarea></td>
	</tr>

	<tr> 
	<td><strong>Email : </strong></td>
	<td><input type="email" name="email" id="email" required="required">

		</td>
    </tr>

    <tr> 
	<td><strong>DOB: </strong></td>
	<td><input type="date" name="dob" id="dob" required="required"></td>
    </tr>

     <tr>
     
     <td><labe><strong>Blood Group:</strong></td></label>
  <td><select name="blood" id="blood" required>
    <option value="">--select--</option>
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="A-">A-</option>
    <option value="O+">O+</option>
  </select></td>	
     </tr> 	
     
     <tr> 
	<td><strong>Gender </strong></td>
	<td><input type="radio" name="gender" value="male" required="required">Male
	<input type="radio" name="gender" value="Femal">Female</td>
    </tr>
    <tr> 
	<td><a href="index.php"><button>Home</a></td>
	<td><input type="submit" name="save" value="Create"></td>
	</tr>
</form>
</table>
</center>
</body>
</html>