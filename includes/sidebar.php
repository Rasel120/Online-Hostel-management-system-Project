<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Menu</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i>Profile</a></li>
					<li><a href="book-hostel.php"><i class="fa fa-file-o"></i>Booking Hostel</a></li>
					<li><a href="room-details.php"><i class="fa fa-file-o"></i>Room Details</a></li>
					<li><a href="foodmenu.php"><i class="fa fa-file-o"></i>Food Menu</a></li>
					<li><a href="dining.php"><i class="fa fa-file-o"></i>Dining</a></li>
				<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php } ?>

			</ul>
		</nav>