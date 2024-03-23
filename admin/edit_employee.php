<!DOCTYPE html>
<?php include('header.php');
include('db.php'); ?>

<div class="row" style="margin: 50px">
	<div class="col-md-3"></div>
 <div class="col-md-7">
				
	
	<?php
	
		if(isset($_GET['edit']))
		  {
				$edit_id = $_GET['edit'];	
					
			$qry = "select * from Employee where id='$edit_id' ";
			$run = mysqli_query($con, $qry);
			if(!$run)
			{
				echo "<script> alert('query not executed') </script>";
			}
			
			while($row=mysqli_fetch_array($run))
			{
										
					$id 			= $row ['id'];
					$employee_Id 	= $row ['employee_Id'];
					$name 	= $row ['name'];
					$email 			= $row ['email'];
					$password 	= $row ['password'];
					$designation 			= $row ['designation'];
					$contact 	= $row ['contact'];
					
				
				
				
			}
		  }
		?>
			
							<form  method="post" width="85%" enctype="multipart/form-data" align="center">
					<table align="center" width="450" height="500" style="padding-top:20px; padding:10px 10px;">
						<tr>
							<td colspan="2" align="center"> <h1 style="font-family:arial;">Update Employee Record </h1></td>
							
						</tr>
						
						
						<tr>
							<td > Employee ID </td>
							<td>	<input type="text" class="form_item" name="employee_Id" value="<?php echo $employee_Id; ?>" required> </td>	
						</tr>
						
						<tr>
							<td > Employee name </td>
							<td>	<input type="text" class="form_item" name="name" value="<?php echo $name; ?>" required> </td>	
						</tr>
					<tr>
							<td > Employee Email </td>
							<td>	<input type="text" class="form_item" name="email" value="<?php echo $email; ?>" required> </td>	
						</tr>
					<tr>
							<td > Employee password </td>
							<td>	<input type="text" class="form_item" name="password" value="<?php echo $password; ?>" required> </td>	
						</tr>
					<tr>
							<td > Employee Dsignation </td>
							<td>	<input type="text" class="form_item" name="designation" value="<?php echo $designation; ?>" required> </td>	
						</tr>
					<tr>
							<td > Employee Contact </td>
							<td>	<input type="text" class="form_item" name="contact" value="<?php echo $contact; ?>" required> </td>	
						</tr>
					
						
					 <tr> 
						<td colspan="2" align="right"> <input class="sub"  type="submit" name="register" value="Update Record"> </td>
					 </tr>
					
					</table>
						
					</form>
	
		</div>
			</div>
		</div>	
		
	
	
	</body>

</html>				
					
					
					
<?php 
		if(isset($_POST['register']))
		{
			
			
			$employee_Id = $_POST['employee_Id'];
	$name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $designation = $_POST['designation'];
  $contact = $_POST['contact'];
			
			
	$qry = "update Employee set  employee_Id= '$employee_Id', name='$name',email='$email',password='$password',designation='$designation',contact='$contact' where id = '$edit_id'" ;
												
					$run = mysqli_query($con, $qry);
					
					
					
					if($run)
					{
						
						echo "<script>alert('Employee Record updated successfully')</script>";
						echo "<script>window.open('update_employee.php', '_self')</script>";
							
						
					}
					else
					{
						
						echo"<script>alert('Oooops!  Something went wrong, Please try again') </script>";
						
					}
				
		}
?>
		