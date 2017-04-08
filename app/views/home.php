<?php require VIEW_ROOT . '/templates/header.php'; ?>

	
		<div id="content">
			<div id="content_contanier">
				<div id="SignUpDiv">
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
				</div>

				<div id="content_title"><h1>Hire OBT Gradutes</h1></div>
					<?php if(empty($users)): ?>
						<p>something is wrong</p>
					<?php else: ?>
						<?php foreach($users as $user): ?>
							<div class="profile_div purp" onclick="cat()">
								<h1 class="profile_info"><?php echo e($user['firstname'].' '.$user['lastname']); ?></h1>
								<img class="profile_info" src="images/<?php echo e($user['image']); ?>">
								<h3 class="profile_info"><?php echo e($user['status']); ?></h3>
								<?php if(empty($users['skill1'])): ?>
										<p></p>
								<?php else: ?>
									<h2 class="profile_info"><?php echo e($user['skill1']); ?> | <?php echo e($user['skill2']); ?> | <?php echo e($user['skill3']); ?></h2>
								<?php endif; ?>
							</div>
							<div id="myModal" class="modal">				
								<div id="myPopup" class="modal-content" style="vertical-align: middle;" >
									<h1><strong><?php echo e($user['firstname'].' '.$user['lastname']); ?></strong></h1>
									<h2>Programmer</h2>
									<span><img src="images/<?php echo e($user['image']); ?>"></span>
									<p> "I am an aspiring Web Developer with an eye for detail and passion for efficient user experiences. 
									I want to challenge myself at learning more advanced and technical languages."</p>
									<div id="links">
									
										<img src="images/phone.png">
										<img src="images/email.png">
										<img src="images/Linkedin_icon.png">
										<img src="images/twt.png">
										<img src="images/github-icon.png">
									</div>
				    			</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<a href="<?php echo BASE_URL; ?>/mockup.php"><div class="Foot_Tab" style="background-color:rgb(75,59,125)"><h1 style="color: black;">Explore Candidates</h1></div></a>
			
			<div class="Foot_Tab" style="background-color:rgb(186,199,54);"><h1>Employee Testiomonials</h1></div>
		</div>	

<?php require VIEW_ROOT . '/templates/footer.php'; ?>