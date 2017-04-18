<?php require VIEW_ROOT . '/templates/header.php'; ?>

<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/css/profile.css">

<div class="container">

	<form onsubmit="window.location = '<?php echo BASE_URL; ?>profile.php?user=<?php echo $users[$username]; ?>'" action="profile-edit.php?user=<?php echo $username; ?>" method="POST" enctype="multipart/form-data">
		<div class="content-container">
			<div class="container-left">
				<div class="left profile-picture">
					<div class="image-container">
						<?php if(empty($users['image'])): ?>
	                        <img src="https://www.watch2gether.com/assets/w2guser-default-4cd04e39cfd59017ebad065028b8af9dfca8499a45a7b19ec20b1c478a751a77.png" alt="avatar" class="img-circle" />
	                    <?php else: ?>
	                        <img class="img-circle" src="<?php echo BASE_URL; ?>/uploads/<?php echo $users['image']; ?>">
	                    <?php endif; ?> 

					
							<input type="file" name="files[]">
					</div>
				</div>
				<div class="left about-container">
					<div class="about-me">
						<div class="about-me text">
								<textarea name="aboutme" id="body" cols="40" rows="15"><?php echo e($users['aboutme']); ?></textarea>

								
							
						</div>
					</div>
				</div>
				<div class="left perskills-container">
					<div class="person-skills">
						<div class="perskills_head">
							<h1> Personal Skills</h1>

						</div>
						<div class="perskills_text">
							<ul>
								<li><input type="text" name="perskill1" value="<?php echo e($users['perskill1']); ?>"></li>
								<li><input type="text" name="perskill2" value="<?php echo e($users['perskill2']); ?>"></li>
								<li><input type="text" name="perskill3" value="<?php echo e($users['perskill3']); ?>"></li>
								<li><input type="text" name="perskill4" value="<?php echo e($users['perskill4']); ?>"></li>
								<!--<li><input type="text" name="perskill5" value="<?php //echo e($users['perskill5']); ?>"></li>/-->
								<!--<li><input type="text" name="perskill6" value="<?php //echo e($users['perskill6']); ?>"></li>?-->
							</ul>
						</div>
					</div>
				</div>
				<div class="left contact-container">
					<div class="contact-me">
						<div class="contact-me_head">
							<h1>Contact</h1>
							
						</div>
						<div class="contact-me_text">
							<ul>
								<li>Address: <input type="text" name="address" value="<?php echo e($users['address']); ?>"> <br></li>
								<li>Email: <?php echo e($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?> <br></li>
								<li><input type="text" name="phone" value="<?php echo e($users['phone']); ?>"></li>
							</ul>							
						</div>
					</div>					
				</div>
			</div>
			<div class="container-right">
				<a href="profile.php?user=<?php echo $_SESSION['user']['username']; ?> 
				"><button type="button" style="font:14px 'Arial';width:100px;height:50px;background:rgba(198,206,69,1);float: right;z-index: 21;display:block;" >Back to profile</button></a>
				<div class="right-content">
					<div class="profile-header">
						<div class="profile_head">

							<h1><?php echo $users ['firstname']." ". $users['lastname'];?></h1>

							<h1>Web Designer</h1>
						</div>
					</div>
					<div class="section experience-container">
						<h1>Experience <hr></h1>
						
						<div class="exp-cont">
								<p><input type="text" name="exploca1" value="<?php echo e($users['exploca1']); ?>"></p>
								<div class="title_duration exp-title_exp-dura">
									<div class="title exp-title">
										<p><input type="text" name="exptitle1" value="<?php echo e($users['exptitle1']); ?>"></p>
									</div>
									<div class="duration exp-dura">
										<p> JAN 2015 - JAN 2017</p>
									</div>

									<div class="clear"></div>
								</div>
								<div class="desc exp-desc">
									<p><input type="text" name="expdesc1" value="<?php echo e($users['expdesc1']); ?>"></p>
								</div>
							
							
							</form>
						</div>
					</div>
					<div class="section education-container">
						<h1>Education <hr></h1>
				
						<div class="edu-cont">
							<div class="location edu-name">
								<p><input type="text" name="eduloca1" value="<?php echo e($users['eduloca1']); ?>"></p>
							</div>
							<div class="title_duration exp-title_exp-dura">
								<div class="title edu-title">
									<p><input type="text" name="edutitle1" value="<?php echo e($users['edutitle1']); ?>"></p>
								</div>
								<div class="duration edu-dura">
									<p>JAN 2016 - JAN 2017</p>
								</div>

								<div class="clear"></div>
							</div>
							<div class="desc edu-desc">
								<p><input type="text" name="edudesc1" value="<?php echo e($users['edudesc1']); ?>"></p>
							</div>
						</div>
					</div>
					<div class="section proskills-container">
						<h1>Professional Skills <hr></h1>

						<div class="section proskill-list">
							<div class="list-container">
								<ul>
								<li><input type="text" name="proskill1" value="<?php echo e($users['proskill1']); ?>"></li>
								<li><input type="text" name="proskill2" value="<?php echo e($users['proskill2']); ?>"></li>
								<li><input type="text" name="proskill3" value="<?php echo e($users['proskill3']); ?>"></li>
								<li><input type="text" name="proskill4" value="<?php echo e($users['proskill4']); ?>"></li>
								<li><input type="text" name="proskill5" value="<?php echo e($users['proskill5']); ?>"></li>
								<li><input type="text" name="proskill6" value="<?php echo e($users['proskill6']); ?>"></li>

									<div class="clear"></div>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<button type="submit" style="font:14px 'Arial';width:100px;height:50px;background:rgba(198,206,69,1);float: right;z-index: 21;">Edit Information</button>
			</div>
			<div class="clear"></div>	
		</div>
	</form>
</div>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>