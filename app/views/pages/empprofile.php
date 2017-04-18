<?php require VIEW_ROOT . '/templates/header.php'; ?>

<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/css/profile.css">

	<div class="container">
		<div class="content-container">
			<div class="container-left">
				<div class="left profile-picture">
				     <div class="image-container">
                        <?php if(empty($employer['image'])): ?>
                            <img src="https://www.watch2gether.com/assets/w2guser-default-4cd04e39cfd59017ebad065028b8af9dfca8499a45a7b19ec20b1c478a751a77.png" alt="avatar" class="img-circle" />
                        <?php else: ?>
                            <img class="img-circle" src="<?php echo BASE_URL; ?>/uploads/<?php echo $employer['image']; ?>">
                        <?php endif; ?> 
                    </div>
				</div>
				<div class="left about-container">
					<div class="about-me">
						<div class="about-me_head">
								<h1>About Me<hr></h1>
						</div>
						<div class="about-me_text">
							<?php if(isset($employer['aboutme'])): ?>
								<p><?php echo $employer['aboutme']; ?></p>
							<?php else: ?>
								<p>Coming Soon</p>
							<?php endif; ?>	
						</div>
					</div>
				</div>
				<div class="left perskills-container">
					<div class="person-skills">
						<div class="perskills_head">
							<h1>Personal Skills<hr></h1>
						</div>
						<div class="perskills_text">
							<?php $perskills = $employer['perskill1'] || $employer['perskill2'] || $employer['perskill3'] || $employer['perskill4'] ;  ?>

							<?php if(!empty($perskills)): ?>
							<ul>
								<?php if(isset($employer['perskill1'])): ?>
									<li><?php echo $employer['perskill1'];  ?></li>
								<?php endif;  ?>
								<?php if(isset($employer['perskill2'])): ?>
									<li><?php echo $employer['perskill2'];  ?></li>
								<?php endif;  ?>
								<?php if(isset($employer['perskill3'])): ?>
									<li><?php echo $employer['perskill3'];  ?></li>
								<?php endif;  ?>
								<?php if(isset($employer['perskill4'])): ?>
									<li><?php echo $employer['perskill4'];  ?></li>
								<?php endif;  ?>
							</ul>
							<?php else: ?>
								<p>This user currently doesn't have any skills listed.</p>
							<?php endif; ?>	
						</div>
					</div>
				</div>
				<div class="left contact-container">
					<div class="contact-me">
						<div class="contact-me_head">
								<h1>Contact Me<hr></h1>
						</div>
						<div class="contact-me_text">
							<ul>
								<?php if(isset($employer['address'])): ?>
									<li> Address: <?php echo $employer['address'];  ?> <br></li>
								<?php endif;  ?>
								<li>Email: <?php echo e($_SESSION['employer']['email'], ENT_QUOTES, 'UTF-8'); ?> <br></li>
								<?php if(isset($employer['address'])): ?>
									<li> Phone number: <?php echo $employer['phone'];  ?> <br></li>
								<?php endif;  ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container-right">
				<?php if($username == $_SESSION['employer']['username']): ?>
					<div class="profile-drpdwn" style="float: right;width:100%; height:100%; background:lightgrey;position:relative;">
						<div class="dropdown">
							<button onclick="myFunction()" class="dropbtn"><i class="fa fa-caret-down"></i
							></button>
							<div id="myDropdown" class="dropdown-content">
								<a href="empprofile-edit.php?user=<?php echo $_SESSION['employer']['username']; ?>
								">Edit</a>
							</div>
						</div>
					</div>
					<?php else: ?>
					<?php endif; ?>
				<div class="right-content">	
					<div class="profile-header">
						<div class="profile_head">
							<h1><?php echo $_SESSION['employer']['firstname']." ". $_SESSION['employer']['lastname']; ?> </h1>
							<h1>Web Designer</h1>
						</div>
						</div>
					<div class="section experience-container">
						<h1>Experience<hr></h1>

						<div class="exp-cont">
							<div class="location exp-name">
								<p><?php echo $employer['exploca1'];  ?></p>
							</div>
							<div class="title_duration exp-title_exp-dura">
								<div class="title exp-title">
									<p><?php echo $employer['exptitle1'];  ?></p>
								</div>
								<div class="duration exp-dura">
									<p>JAN 2016 - JAN 2017</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="desc exp-desc">
								<p><?php echo $employer['expdesc1'];  ?></p>
							</div>
						</div>
					</div>
					<?php if(isset($employer['eduloca1'])): ?>					

						<div class="section experience-container">
							<h1>Experience<hr></h1>
							
							<div class="edu-cont">
								<div class="location exp-name">
									<p><?php echo $employer['eduloca1'];?></p>
								</div>	
								
								<div class="title_duration edu-title_edu-dura">
									<div class="title edu-title">
										<p><?php echo $employer['edutitle1']  ?></p>
									</div>
									<div class="duration exp-dura">
										<p> JAN 2015 - JAN 2017</p>
									</div>

									<div class="clear"></div>
								</div>
								
								<div class="desc edu-desc">
									<p><?php echo $employer['edudesc1']; ?></p>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="section profskills-container">
						<h1>Professional Skills <hr>employer

						<div class="profskill-list">
							<div class="list-container">
								<?php $proskill = $employer ['proskill1'] || $employer ['proskill2'] || $employer ['proskill3'] || $employer ['proskill4'] || $employer ['proskill5'] || $employer ['proskill6']; ?>
								<?php if(!empty($proskill)): ?>
									<ul>
										<?php if(isset($employer['proskill1'])):  ?>
											<li><?php echo $employer['proskill1'];  ?></li>
										<?php endif; ?>
										<?php if(isset($employer['proskill2'])):  ?>
											<li><?php echo $employer['proskill2'];  ?></li>
										<?php endif; ?>
										<?php if(isset($employer['proskill3'])):  ?>
											<li><?php echo $employer['proskill3'];  ?></li>
										<?php endif; ?>
										<?php if(isset($employer['proskill4'])): ?>
											<li><?php echo $employer['proskill4'];  ?></li>
										<?php endif; ?>
										<?php if(isset($employer['proskill5'])):  ?>
											<li><?php echo $employer['proskill5'];  ?></li>
										<?php endif; ?>
										<?php if(isset($employer['proskill6'])):  ?>
											<li><?php echo $employer['proskill6'];  ?></li>
										<?php endif; ?>
										<div class="clear"></div>
									</ul>
								<?php else: ?>
									<p>This user currently doesn't have any skill listed</p>
								<?php endif; ?>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>