<?php include 'includes/db.php' ?>

<?php
	
	if (isset($_POST['submit_std_info'])) {

		$date = date('Y-m-d h:1:s');
		$district = mysql_real_escape_string($_POST['district']);

		$ins_sql = "INSERT INTO basic_info (student_id, name, birth_date, gender, email, mobile, religion, nationality, district,
		present_add, permanent_add, f_name, m_name, f_occu, m_occu,  date)
		VALUES('$_POST[student_id]', '$_POST[name]', '$_POST[date]', '$_POST[gender]', '$_POST[email]', '$_POST[mobile]', 
			'$_POST[religion]', '$_POST[nationality]', '$district', '$_POST[present_add]', '$_POST[permanent_add]', 
			'$_POST[f_name]', '$_POST[m_name]', '$_POST[f_occu]', '$_POST[m_occu]', '$date')";

		$run_sql = mysqli_query($conn,$ins_sql);
	// 	if ( mysqli_query($conn,$ins_sql)) {
 //    		echo "New record created successfully";
	// 	}else {
 //    		echo "Error: " . $ins_sql . "<br>" . mysqli_error($conn);
		
	// }
		
}

 ?>


<!DOCTYPE html>
<html>
	<head>
		<title>School Management System</title>
		<script src="js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script src="datepicker/js/bootstrap-datepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="datepicker/css/datepicker.css">
		<script type="text/javascript">
			$(function(){
				$('.datepicker').datepicker();
			});
		</script>
	</head>
	<body>
		<?php include 'includes/header.php' ?>
		<div class="container">
			<article class="row">
				<section class="col-lg-8">
					<div class="page-header">
						<h2>Student Profile Entry Form</h2>
					</div>
					<form class="form-horizontal" action="std_entry.php" method="post" role="form">
					  <div class="form-group">
					    <label for="student_id" class="col-sm-3 control-label">Student ID*</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Student ID" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="name" class="col-sm-3 control-label">Full Name*</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="date" class="col-sm-3 control-label">Date Of Birth*</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control datepicker" id="date" name="date" placeholder="Date Of Birth" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="gender" class="col-sm-3 control-label">Gender*</label>
					    <div class="col-sm-4">
					      	<select class="form-control" name="gender" required>
					      		<option value="" selected>Your Gender</option>
								<option value="female">Female</option>
								<option value="male">Male</option>
							</select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="email" class="col-sm-3 control-label">Email Address*</label>
					    <div class="col-sm-8">
					      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="mobile" class="col-sm-3 control-label">Mobile Number*</label>
					    <div class="col-sm-8">
					      <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="religion" class="col-sm-3 control-label">Religion*</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="nationality" class="col-sm-3 control-label">Nationality*</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="district" class="col-sm-3 control-label">District*</label>
					    <div class="col-sm-4">
					    <select class="form-control" name="district" required>
					      	<option value="">Your District</option>
					      	<?php 
					      		$sel_district = "SELECT * FROM districts";
					      		$run_district = mysqli_query($conn,$sel_district);
					      		while ($rows = mysqli_fetch_assoc($run_district)){
					      			if ($district == $rows['name']) {
					      				$selected = 'selected';
					      			}else{
					      				$selected = ' ';
					      			}
					      			echo '<option value="'.$rows['name'].'" '.$selected.'>'.$rows['name'].'</option>';
					      		}
					      	 ?>
		      			</select>
		      			</div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-3 control-label">Present Address*</label>
					    <div class="col-sm-8">
					    	<textarea class="form-control" name="present_add" rows="3" style="resize:none" required></textarea>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-3 control-label">Permanent Address*</label>
					    <div class="col-sm-8">
					    	<textarea class="form-control" name="permanent_add" rows="3" style="resize:none" required></textarea>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="f_name" class="col-sm-3 control-label">Father's Name*</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Father's name" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="f_occu" class="col-sm-3 control-label">Father's Occupation*</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="f_occu" name="f_occu" placeholder="Father's Occupation" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="m_name" class="col-sm-3 control-label">Mother's Name*</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="m_name" name="m_name" placeholder="Mother's name" required>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="m_occu" class="col-sm-3 control-label">Mother's Occupation*</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="m_occu" name="m_occu" placeholder="Mother's Occupation" required>
					    </div>
					  </div>
				<!-- 	  <div class="form-group">
					    <label for="image" class="col-sm-3 control-label">Choose Image</label>
					    <div class="col-sm-8">
					    <input type="file" name="file" id="file">
					    <p class="help-block">Image Size Not More Than 500kb.</p>
					    </div>
					  </div> -->
					  <div class="form-group">
					  	<label class="col-sm-3 control-label"></label>
					    <div class="col-sm-8">
					    	<input type="submit" class="btn btn-block btn-danger" name="submit_std_info" value="Submit Student Info">
					    </div>
					  </div>
					</form>
				</section>

				<aside class="col-lg-4">
					<form class="panel-group form-horizontal" role="form">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="panel-header">
									<h4>Search Something</h4>
								</div>
								<div class="input-group">
								<input type="search" class="form-control" placeholder="Search">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
								</div>
							</div>
						</div>
					</form>
					<form class="panel-group form-horizontal" role="form">
						<div class="panel panel-default">
							<div class="panel-heading">Login Area</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="username" class="control-label col-sm-4" placeholder="Email Address">User Name</label>
									<div class="col-sm-7">
										<input type="text" id="username" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="control-label col-sm-4" placeholder="Password">Password</label>
									<div class="col-sm-7">
										<input type="password" id="password" class="form-control">
									</div>
								</div>
								<div class="form-group">
				
									<div class="col-sm-12">
										<input type="submit" class="btn btn-success btn-block">
									</div>
								</div>
							</div>
						</div>
					</form>
					<?php include 'includes/aside.php' ?>
				</aside>
			</article>
		</div>
		<div style="width:50px; height:100px;"></div>
		<?php include 'includes/footer.php' ?>
	</body>
</html>