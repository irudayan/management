<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
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
<?php 
    include('dbconnection.php');
        $id = $_GET['id'];
        $ret=mysqli_query($con,'SELECT * FROM `student` WHERE id = '.$id.'');
        $count = mysqli_num_rows($ret);
        if ($count > 0) {
        while ($row=mysqli_fetch_array($ret)) { 
    ?>
    <center>
    <table bgcolor="white">
<form action="update.php?id=<?php echo $row['id']; ?>" method="POST">
    <h1>STUDENT DETAILS</h1>
<tr>
    <td><strong>Name : </strong></td>
    <td><input type="text" name="name" id="name" 
        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required maxlength="30"  value="<?php echo $row['name']?>"></td>
    </tr>

    <tr>
    <td><strong>Dept : </strong></td>
    <td><input type="text" name="dept" id="dept" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required  value="<?php echo $row['dept']?>"></td>
    </tr>

    <tr>
    <td><strong>Age : </strong></td>
    <td><input type="text" name="age" id="age"  maxlength="2" required value="<?php echo $row['age']?>"></td>
    </tr>

    <tr>
    <td><strong>Address : </strong></td>
    <td><textarea name="address" id="address" size="15" volalue=""><?php echo $row['address']?></textarea></td>
    </tr> 

    <tr>
    <td><strong>Email : </strong></td>
    <td><input type="email" name="email" value="<?php echo $row['email']?>"></td>
    </tr>

    <tr> 
    <td><strong>DOB: </strong></td>
    <td><input type="date" name="dob"  id="dob" required="required" value="<?php echo $row['dob']?>"></td>
    </tr>

     <tr>
     
     <td><label><strong>Blood Group:</strong></td></label>
  <td><select name="blood" id="blood" required>
    <option value="">--select--</option>
    <option value="A+"<?php echo ($row['bgroup']=="A+")?'selected="selected"':'';?>>A+</option>
    <option value="B+"<?php echo ($row['bgroup']=="B+")?'selected="selected"':'';?>>B+</option>
    <option value="A-"<?php echo ($row['bgroup']=="A-")?'selected="selected"':'';?>>A-</option>
    <option value="O+"<?php echo ($row['bgroup']=="O+")?'selected="selected"':'';?>>O+</option>
  </select></td>    
     </tr>  
     
     <tr> 
    <td><strong>Gender </strong></td>
    <td><input type="radio" name="gender" value="male"<?php echo ($row['gender']=='male')?'checked':'' ?> required="required">Male

    <input type="radio" name="gender" value="female"<?php echo ($row['gender']=='female')?'checked':'' ?>>Female</td>
    </tr>

    <tr>
    <td><input type="submit" name="update" value="Update"></td>
    <td><a href="index.php"><button>HOME</a></td>
    </tr>

   </table>
   </center>
</form>
<?php } } ?>
</body>
</html>