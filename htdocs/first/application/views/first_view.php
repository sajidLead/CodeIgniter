<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="<?php echo base_url()?>blogController/postData" method="post">
  First name:<br>
  <input type="text" name="first_name">
  <br>
  Last name:<br>
  <input type="text" name="last_name">
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
