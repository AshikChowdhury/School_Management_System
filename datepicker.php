<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="datepicker/js/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="datepicker/css/datepicker.css">
	<script type="text/javascript">
		$(function(){
			$('.datepicker').datepicker();
		});
	</script>

</head>
<body>
	<div class="form-group">
		<div class="col-sm-5">
		 Date: <input type="text" class="datepicker" name="date">
		</div>
	</div>

</body>
</html>