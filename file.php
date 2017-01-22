<?php
	$server = 'localhost';
	$user = 'ashik';
	$password = '12345';
	$db = 'school_management';

	$conn = mysqli_connect($server, $user, $password, $db);

	if (!$conn) {
		die("Connection Failed!:".mysqli_connect_error());
	}

	if (isset($_POST['submit'])) {
		//get the blog data
		

	$target_dir = "uploads/";
	$target_file = $target_dir.basename($_FILES['file']['name']);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES['file']['tmp_name']);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	 $ins_sql = "INSERT INTO img (image) VALUES('$target_file')";
	$run_sql = mysqli_query($conn,$ins_sql);

}

?>

<!DOCTYPE html>
<html>
<body>

<form action="file.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>