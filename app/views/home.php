<?php require VIEW_ROOT . '/templates/header.php'; ?>

	
<div id="content">
			<div id="content_contanier">
			<?php if(empty($_SESSION['user'])): ?>
				<div id="SignUpDiv">
					<a href="<?php echo BASE_URL; ?>/login.php">Sign In</a>
					<a href="<?php echo BASE_URL; ?>/signup.php">Sign Up</a>
				</div>
				<?php else: ?>
				<div id="SignUpDiv">
					<a href="<?php echo BASE_URL; ?>/logout.php">Log out</a>
					<a href="<?php echo BASE_URL; ?>/secret.php">Signed in as <?php echo e($_SESSION['user']['firstname'], ENT_QUOTES, 'UTF-8'); ?></a>
				</div>
			<?php endif; ?>


<div id="content_title"><h1>Hire OBT Gradutes</h1></div>
				
				<div class="profile_div purp">
					<h1>John Doe</h1>
					<img src="images/file1_720.jpg">
					<h3>Web Design and Coding</h3>
					<h2>HTML | CSS | PHP</h2>
				</div>
				<div class="profile_div green">
					<h1>John Doe</h1>
					<img src="images/file_720.jpg">
					<h3>Medical Administrive</h3>
					<h2>Word | Excel | Outlook</h2>
				</div>
				<div class="profile_div black">
					<h1>John Doe</h1>
					<img src="images/image_uploaded_from_ios_720.jpg">
					<h3>Young Adult Internship</h3>
					<h2>Microsoft|Adobe|Google</h2>
				</div>
				<div class="profile_div green">
					<h1>John Doe</h1>
					<img src="images/file1_720.jpg">
					<h3>Young Education and Job Training</h3>
					<h2>Word|Access|Powerpoint</h2>
				</div>
				<div class="profile_div black">
					<h1>John Doe</h1>
					<img src="images/file_720.jpg">
					<h3>Leading to Success</h3>
					<h2>Excel|Agile|Microsoft</h2>
				</div>
				<div class="profile_div purp">
					<h1>John Doe</h1>
					<img src="images/image_uploaded_from_ios_720.jpg" >
					<h3>Young Adult Literacy</h3>
					<h2>Access|Google|Microsoft</h2>
				</div>
			</div>
		</div>
		<div id="footer">
			<a href="<?php echo BASE_URL; ?>/mockup.php"><div class="Foot_Tab" style="background-color:rgb(75,59,125)"><h1 style="color: black;">Explore Candidates</h1></div></a>
			
			<div class="Foot_Tab" style="background-color:rgb(186,199,54);"><h1>Employee Testiomonials</h1></div>
		</div>	

<?php require VIEW_ROOT . '/templates/footer.php'; ?>