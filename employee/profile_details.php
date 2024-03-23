<?php

include('header.php');


?>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
		
<center>
<h2>View Profile</h2>

<br>
<table class="table table-bordered" style="width:100%">
  <tr>
     <th>Serial Number</th>
    		        <th>Employee_ID</th>
    		        <th>Employee Name</th>
					
					<th>Employee Email</th>
					 <th>Employee Password</th>
					
					<th>Employee Designation</th>
					<th>Employee Contact</th>
    
  </tr>
  

  
	   
	<?php
		
		$qry = "select * from Employee  ";
		
		$run = mysqli_query($con, $qry);
		$i = 0;
		
		$run2 = mysqli_num_rows($run);
		
		if (!$run2 > 0) {
			
			echo"<h3>Record not found.</h3>";
		}
		else {
		
		while($row = mysqli_fetch_array($run))
		{
			
			$id 			= $row ['id'];
					$employee_Id 	= $row ['employee_Id'];
					$name 	= $row ['name'];
					$email 			= $row ['email'];
					$password 	= $row ['password'];
					$designation 			= $row ['designation'];
					$contact 	= $row ['contact'];
					
			
			
			
			$i++

	?>
  <tr align="center">
	<td><?php echo $i;?> </td>
	<td><?php echo $employee_Id;?></td>	
    <td><?php echo $name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $password; ?></td>
    <td><?php echo $designation; ?></td>
    <td><?php echo $contact; ?></td>
    
	
	
   	
	
  </tr>
		<?php }} ?>
</table>




</div>
</div>
</div>





