<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
   
 
    <h4>Display Records From Database Using Codeigniter</h4>
    <table>
     <tr>
      <td><strong>Id</strong></td>
      <td><strong>FirstName</strong></td><br>
      <td><strong>LastName</strong></td>
      <td><button type="submit" form="form1" value="Submit">Delete</button></td>
      <td><button type="submit" form="form1" value="Submit">Update</button></td>
    </tr> 
     <?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->id;?></td>
         <td><?php echo $post->first_name;?></td>
         <td><?php echo $post->last_name;?></td>
         <td><a href="<?php echo base_url('blogController/delete/'.$post->id) ?>">Remove</a></td>
         <td><a href="<?php echo base_url('blogController/edit/'.$post->id) ?>">Update</a></td>
      </tr>     
     <?php }?>  
   </table>
 
 
  </body>
</html>