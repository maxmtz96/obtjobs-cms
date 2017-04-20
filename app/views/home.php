<?php require VIEW_ROOT . '/templates/header.php'; ?>

<?php require VIEW_ROOT . '/templates/sessions.php'; ?>

		<div id="content">
			<div id="content_contanier">
				<div id="content_title"><h1>Hire OBT Gradutes</h1></div>
					<?php if(empty($users)): ?>
						<p>something is wrong</p>
					<?php else: ?>
						<?php foreach($users as $user): ?>
							<?php if(empty($user['image'])): ?>
								<?php next($user); ?>
							<?php else: ?>
								<div class="profile-display">
									<div id="student<?php echo e($user['id']); ?>" class="trainees blur">
										<img src="<?php echo BASE_URL; ?>/uploads/<?php echo e($user['image']); ?>">
											<h1><?php echo ucwords(e($user['firstname'].' '.$user['lastname'])); ?></h1>

											<h3><?php //echo e($user['aboutme']); ?></h3>

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
									<div id="myModal" class="modal">	
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
			</div>
		</div>
		<div id="footer">
			<a href="<?php echo BASE_URL; ?>/mockup.php"><div class="Foot_Tab" style="background-color:rgb(75,59,125)"><h1 style="color: black;">Explore Candidates</h1></div></a>
			
			<div class="Foot_Tab" style="background-color:rgb(186,199,54);"><h1>Employee Testiomonials</h1></div>
		</div>	

<?php // require VIEW_ROOT . '/templates/footer.php'; ?>