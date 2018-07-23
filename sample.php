<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Employee Records</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
  <form action="employee_insert.php" method="post">
  <h2 align="center">Add Employees Record using PHP and MySQL</h2><hr /><br />
  <table align="center" border="1">
    <tbody>
    <tr>
      <td>Name</td>
      <td><input name="name" placeholder="Name" type="text" required></td>
    <tr>
      <td>Gender</td>
      <td>
      <input name="gender" type="radio" value="male" checked="">Male
      <input name="gender" type="radio" value="female">Female
      </td>
    </tr>
    <tr>
      <td>Email Id.</td>
      <td><input name="email" id="email" placeholder="Email Id."  type="text" required></td>
      </tr>
    <tr>
      <td>Mobile No.</td>
      <td><input name="mobile" id="mobile" placeholder="Mobile No." type="text" maxlength="10" required></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><textarea name="address" placeholder="Address" rows="5" required></textarea></td>
    </tr>
    <tr>
      <td>Joining Date</td>
      <td><input name="joindate" id="joindate" type="text" required placeholder="Select Date"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
    </tbody>
  </table>
</form>
</body>
</html>
<script>  
  $(document).ready(function(){  
   $.datepicker.setDefaults({  
        dateFormat: 'yy-mm-dd'   
   });  
   $(function(){  
      $("#joindate").datepicker();    
   });    
  });  
</script>