	<header class="navbar navbar-inverse navbar navbar-static-top">
			<div class="container">
				<a href="index.php" class="navbar-brand">School Management System</a>
				<ul class="nav navbar-nav navbar-right">
					
					<?php  
						// $sel_cat = "SELECT * FROM category";
						// $run_cat = mysqli_query($conn,$sel_cat);
						// while ($rows = mysqli_fetch_assoc($run_cat)) {
						// 	if (isset($_GET['cat_name'])) {
						// 		if ($_GET['cat_name'] == $rows['category_name']) {
						// 			$class = 'active';
						// 		}else{
						// 			$class = '';
						// 		}
						// 	}else{
						// 		$class = '';
						// 	}
						// 	if ($rows['category_name']=='Home') {
						// 		if ($_SERVER['PHP_SELF'] == '/myphp/cms/index.php') {
						// 			echo '<li class="active"><a href="index.php">'.ucfirst($rows['category_name']).'</a></li>';
						// 		}else{
						// 			echo '<li class=""><a href="index.php">'.ucfirst($rows['category_name']).'</a></li>';
						// 		}
								
						// 	}else{
						// 		echo '<li class="'.$class.'"><a href="manu.php?cat_name='.$rows['category_name'].'">'.ucfirst($rows['category_name']).'</a></li>';
						// 	}
						// }

					?>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="#">Log Out</a></li>
				</ul>
			</div>
		</header>