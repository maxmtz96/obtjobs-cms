<div class="sessions-container">
	<?php if(isset($_SESSION['employer'])): ?>
		<div class="signup">
			<a href="<?php echo BASE_URL; ?>/empprofile.php?user=<?php echo $_SESSION['employer']['username']; ?>"><button type="button">Welcome <?php echo ucwords(e($_SESSION['employer']['firstname'], ENT_QUOTES, 'UTF-8')); ?>!</button></a>
			<a href="<?php echo BASE_URL; ?>/logout.php"><button type="button">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button></a>
		</div>
	<?php elseif(isset($_SESSION['user'])): ?>
		<div class="signup">
			<a href="<?php echo BASE_URL; ?>/profile.php?user=<?php echo $_SESSION['user']['username']; ?>"><button type="button">Welcome <?php echo ucwords(e($_SESSION['user']['firstname'], ENT_QUOTES, 'UTF-8')); ?>!</button></a>
			<a href="<?php echo BASE_URL; ?>/logout.php"><button type="button">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button></a>
		</div>
	<?php else: ?>
		<div class="signup" style="float:right;">
			<!-- DROPDOWN FOR SIGN UP HERE -->
			<div class="dropdown">
			  <button onclick="dropDown2()" class="dropbtn">Register</button>
			  
			  <div id="signup" class="dropdown-content1">
			    <a href="<?php echo BASE_URL; ?>/signup.php">Student Register</a>
			    <a href="<?php echo BASE_URL; ?>/empsignup.php">Employer Register</a>
			  </div>
			</div>
			<!-- DROPDOWN FOR SIGN IN HERE -->
			<div class="dropdown">
			  <button onclick="dropDown1()" class="dropbtn">Log In</button>
			  
			  <div id="signin" class="dropdown-content2">
			    <a href="<?php echo BASE_URL; ?>/login.php">Student Log In</a>
			    <a href="<?php echo BASE_URL; ?>/emplogin.php">Employer Log In</a>
			  </div>
			</div>
		</div>
	<?php endif; ?>
		<div style="clear:both;"></div>
</div>
