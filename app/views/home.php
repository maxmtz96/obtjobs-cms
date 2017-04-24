<?php require VIEW_ROOT . '/templates/header.php'; ?>

<?php require VIEW_ROOT . '/templates/sessions.php'; ?>

	<div class="container">
		<div class="content-container">
			<div class="top-container">
				<div class="top-container_text">
					<h1>Hire Our Graduates!</h1>
					<p>We offer a variety of individuals with numerous skills.</p>
				</div>
			</div>
			<div class="mid-container">
				<div class="profile-container">
					<?php if(empty($users)): ?>
						<p>something is wrong</p>
					<?php else: ?>
						<?php foreach($users as $user): ?>
							<?php if(empty($user['image']) || empty($user['proskill1']) || empty($user['aboutme'])): ?>
								<?php next($user); ?>
							<?php else: ?>
								<div class="profile-display">
									<div id="student<?php echo e($user['id']); ?>" class="trainees blur">
										<div class="display-left">
											<img src="<?php echo BASE_URL; ?>/uploads/<?php echo e($user['image']); ?>">
										</div>
										<div class="display-right">
											<h1><?php echo ucwords(e($user['firstname'].' '.$user['lastname'])); ?></h1>

											<p>"<?php echo e($user['aboutme']); ?>"</p>
										</div>
										<hr>
										<div class="skills-container clear">
											<h3>Skills:</h3>
											
											<ul>
												<?php if(!empty($user['proskill1'])): ?>
													<li class="skill"><?php echo e($user['proskill1']); ?></li>
												<?php endif; ?>
												<?php if(!empty($user['proskill2'])): ?>
													<li class="skill"><?php echo e($user['proskill2']); ?></li>
												<?php endif; ?>
												<?php if(!empty($user['proskill3'])): ?>
													<li class="skill"><?php echo e($user['proskill3']); ?></li>
												<?php endif; ?>
											</ul>
										</div>
									</div>
									<div id="myModal" class="modal" style="display:none;">	
										<div class="modal-content myPopup" style="vertical-align: middle;" >
											<span style="width:50px;height:50px;"><i class="fa fa-times" aria-hidden="true">close</i></span>
											<h1><strong><?php echo e($user['firstname'].' '.$user['lastname']); ?></strong></h1>
											<h2>Web Developer</h2>
											
											<span><img src="images/Business-Professional-Headshots-00018.jpg"></span>
											<p><?php echo e($user['aboutme']); ?></p>
											<div id="links">
												<img src="images/Phone-128.png">
												<img src="images/Email-128.png">
												<img src="images/Linkedin_icon.png">
												<img src="images/Twitter-128.png">
												<img src="images/github-icon.png">
											</div>
									    </div>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>

				<hr>

				<div class="btn-container">
					<a href="<?php echo BASE_URL; ?>/mockup.php">
						<div class="btn-link candidates" >
							<h1>Explore Candidates</h1>
						</div>
					</a>
					
					<a href="#">
						<div class="btn-link testimonials">
							<h1>Employee Testimonials</h1>
						</div>
					</a>
				</div>
			</div>
			<div class="bot-container"> 

			</div>
		</div>
	</div>	

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
