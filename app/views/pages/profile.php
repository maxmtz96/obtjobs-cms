<?php require VIEW_ROOT . '/templates/header.php'; ?>

<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/css/profile.css">
<a href="<?php echo BASE_URL; ?>"><button class="dropbtn">Back to Home Page</button></a>
	<div class="container">
		<div class="content-container">
			<div class="container-left">
				<div class="left profile-picture">

				     <div class="image-container">
                        <?php if(empty($users['image'])): ?>
                            <img src="https://www.watch2gether.com/assets/w2guser-default-4cd04e39cfd59017ebad065028b8af9dfca8499a45a7b19ec20b1c478a751a77.png" alt="avatar" class="img-circle" />
                        <?php else: ?>
                            <img class="img-circle" src="<?php echo BASE_URL; ?>/uploads/<?php echo $users['image']; ?>">
                        <?php endif; ?> 
                    </div>
				</div>
					<div id="links">
						<?php if(!empty($users['github'])): ?>
                			<a target="_blank" href="https://www.github.com/<?php echo $users['github'];?>"><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a>
                		<?php endif; ?>
                		<?php if(!empty($users['linkedin'])): ?>
                			<a target="_blank" href="https://www.linkedin.com/<?php echo $users['linkedin'];?>"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
                		<?php endif; ?>
                		<?php if(!empty($users['facebook'])): ?>
                			<a target="_blank" href="https://www.facebook.com/<?php echo $users['facebook'];?>"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                		<?php endif; ?>
                		<?php if(!empty($users['twitter'])): ?>
                			<a target="_blank" href="https://www.twitter.com/<?php echo $users['twitter'];?>"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
                		<?php endif; ?>
					</div>
				<div class="left about-container">
					<div class="about-me">
						<div class="about-me_head">
							<h1>About Me<hr></h1>
						</div>
						<div class="about-me_text">
							<?php if(isset($users['aboutme'])): ?>
								<p><?php echo $users['aboutme']; ?></p>
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
							<?php $perskills = $users['perskill1'] || $users['perskill2'] || $users['perskill3'] || $users['perskill4'] ;  ?>

							<?php if(!empty($perskills)): ?>
							<ul>
								<?php if(isset($users['perskill1'])): ?>
									<li><?php echo $users['perskill1'];  ?></li>
								<?php endif;  ?>
								<?php if(isset($users['perskill2'])): ?>
									<li><?php echo $users['perskill2'];  ?></li>
								<?php endif;  ?>
								<?php if(isset($users['perskill3'])): ?>
									<li><?php echo $users['perskill3'];  ?></li>
								<?php endif;  ?>
								<?php if(isset($users['perskill4'])): ?>
									<li><?php echo $users['perskill4'];  ?></li>
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
								<?php if(isset($users['address'])): ?>
									<li> Address: <?php echo $users['address'];  ?> <br></li>
								<?php endif;  ?>
								<li>Email: <?php echo e($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?> <br></li>
								<?php if(isset($users['address'])): ?>
									<li> Phone number: <?php echo $users['phone'];  ?> <br></li>
								<?php endif;  ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container-right">
				<?php if($username == $_SESSION['user']['username']): ?>
						<div class="dropdown-contentprofile-drpdwn" style="float:right;width:100%;height:100%;background:lightgrey;position:relative;">
							<a href="profile-edit.php?user=<?php echo $_SESSION['user']['username']; ?>
								"><button type="submit" style="font:14px 'Arial';width:100px;height:50px;background:rgba(198,206,69,1);float: right;z-index: 21;">Edit Profile</button></a>
						</div>
					<!-- <div class="profile-drpdwn" style="float: right;width:100%; height:100%; background:lightgrey;position:relative;">
						<div class="dropdown">
							<button onclick="myFunction()" class="dropbtn"><i class="fa fa-caret-down"></i
							></button>
							<div id="myDropdown" class="dropdown-content">
								<a href="profile-edit.php?user=<?php // echo $_SESSION['user']['username']; ?>
								">Edit</a>
							</div>
						</div>
					</div> -->					
				<?php endif; ?>
				<div class="right-content">	
					<div class="profile-header">
						<div class="profile_head">
							<h1><?php echo ucwords($users['firstname']." ". $users['lastname']); ?> </h1>
							<h1><?php echo $users['aspiring'] ?></h1>
						</div>
						</div>
					<div class="section experience-container">
						<h1>Experience<hr></h1>

						<div class="exp-cont">
							<div class="location exp-name">
								<p><?php echo $users['exploca1'];  ?></p>
							</div>
							<div class="title_duration exp-title_exp-dura">
								<div class="title exp-title">
									<p><?php echo $users['exptitle1'];  ?></p>
								</div>
								<div class="duration exp-dura">
									<p>JAN 2016 - JAN 2017</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="desc exp-desc">
								<p><?php echo $users['expdesc1'];  ?></p>
							</div>
						</div>
					</div>
					<?php if(isset($users['eduloca1'])): ?>					

						<div class="section experience-container">
							<h1>Experience<hr></h1>
							
							<div class="edu-cont">
								<div class="location exp-name">
									<p><?php echo $users['eduloca1'];?></p>
								</div>	
								
								<div class="title_duration edu-title_edu-dura">
									<div class="title edu-title">
										<p><?php echo $users['edutitle1']  ?></p>
									</div>
									<div class="duration exp-dura">
										<p> JAN 2015 - JAN 2017</p>
									</div>

									<div class="clear"></div>
								</div>
								
								<div class="desc edu-desc">
									<p><?php echo $users['edudesc1']; ?></p>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="section profskills-container">
						<h1>Professional Skills <hr></h1>

						<div class="profskill-list">
							<div class="list-container">
								<?php $proskill = $users ['proskill1'] || $users ['proskill2'] || $users ['proskill3'] || $users ['proskill4'] || $users ['proskill5'] || $users ['proskill6']; ?>
								<?php if(!empty($proskill)): ?>
									<ul>
										<?php if(isset($users['proskill1'])):  ?>
											<li><?php echo $users['proskill1'];  ?></li>
										<?php endif; ?>
										<?php if(isset($users['proskill2'])):  ?>
											<li><?php echo $users['proskill2'];  ?></li>
										<?php endif; ?>
										<?php if(isset($users['proskill3'])):  ?>
											<li><?php echo $users['proskill3'];  ?></li>
										<?php endif; ?>
										<?php if(isset($users['proskill4'])): ?>
											<li><?php echo $users['proskill4'];  ?></li>
										<?php endif; ?>
										<?php if(isset($users['proskill5'])):  ?>
											<li><?php echo $users['proskill5'];  ?></li>
										<?php endif; ?>
										<?php if(isset($users['proskill6'])):  ?>
											<li><?php echo $users['proskill6'];  ?></li>
										<?php endif; ?>
										<div class="clear"></div>
									</ul>
								<?php else:  ?>
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