<?php
 include('dbconfig.php');
  $select=mysql_query("SELECT * FROM registration order by id");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  {
  $id=$userrow['id'];
  $firstname=$userrow['firstname'];
  $lastname=$userrow['lastname'];
  $email=$userrow['email'];
  $phone=$userrow['address'];
  $address=$userrow['address'];
  $username=$userrow['username'];
?>

<div class="display">
	<p> ID : <span><?php echo $id; ?></span>
    
  </p>
  <p> FIRST NAME : <span><?php echo $username; ?></span>
    
  </p>
  <br />
  <p> LAST NAME : <span><?php echo $usermail; ?></span>
    
  </p>
  <br />
  <p> EMAIL : <span><?php echo $usermobile; ?></span>
  </p>
  <br />
  <p> PHONE : <span><?php echo $created; ?></span>
  </p>
  <br />
  <p> ADDRESS : <span><?php echo $username; ?></span>
    
  </p>
  <br />
  <p> USER NAME : <span><?php echo $username; ?></span>
    
  </p>
  <br />
</div>
<?php } ?>
