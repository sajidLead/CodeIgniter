
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
<?php // print_r($result); exit; ?>
<form action="<?php echo base_url()?>blogController/edit/<?php echo $result['id']; ?> " method="post">
	<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
  First name:<br>
   
  <input type="text" name="first_name" value="<?php echo $result['first_name']; ?>">
  <br>
  Last name:<br>

  <input type="text" name="last_name" value="<?php echo $result['last_name']; ?>">
  <br><br>
  <input type="submit" name = 'submit' value="Submit">
</form> 

</body>
</html>
