
<?php include("header.php");
include("db.php");

?>


<div class="container">
 <div class="row">
  <div class="col-lg-12">
    <div class="col-md-2"></div>
 <div class="col-md-8">

 	
  <h2>Create New Employee Profile</h2>
  <br>
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email"> Employee ID:</label>
      <div class="col-sm-4">
        <input type="number" class="form-control"  placeholder="Enter Employee Id" name="employee_Id" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Employee Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Enter Employee Name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"> Employee Email:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Employee Email" name="email" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Employee Password:</label>
      <div class="col-sm-4">
        <input type="password" class="form-control" placeholder="Enter Employee Password" name="password" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"> Employee Designation:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Employee Desigation" name="designation" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Employee Contact No:</label>
      <div class="col-sm-4">
        <input type="number" class="form-control" placeholder="Enter Employee Contact no" name="contact" required>
      </div>
    </div>
	 
    
	
	
    
    
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="btn">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
 </div>
 <?php
if (isset($_POST['btn'])) {
    
    
    $employee_Id = $_POST['employee_Id'];
	$name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $designation = $_POST['designation'];
  $contact = $_POST['contact'];
	 
	
    
    
    
    $xyz = "insert into Employee (employee_Id,name,email,password,designation,contact) values ('$employee_Id', '$name', '$email','$password', '$designation', '$contact')";
    
    $sql = mysqli_query ($con, $xyz);
    
    
    if ($sql) {
        
        
        echo "<script> window.alert ('Employee Record successfully added') </script>";
    }
    
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
}



?>