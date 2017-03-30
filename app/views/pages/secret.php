<?php require VIEW_ROOT . '/templates/header.php'; ?>



        <div id="logout">
					<a href="<?php echo BASE_URL; ?>/logout.php">Log out</a>
          
					<a href="<?php echo BASE_URL; ?>/index.php">Home</a>
				</div>
        
          
          
        



<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/test.css">
</head>
<body>
<div class="container" id="page-info">
  <div class="container">
    <div class="page-header" id="page-header">
      <h1>Profile Page <small>view and edit all your profile details here.</small></h1>
      <br><br>
    </div>
    <style>
    .avatar-img{width:300px;height:200px;}
    .avatar-img img{max-width:100%;max-height:100%;}
    </style> 
    <div class="avatar-img" id="avatar-img">
      <?php if(!isset($_SESSION['user']['image'])): ?>
        <img src="https://www.watch2gether.com/assets/w2guser-default-4cd04e39cfd59017ebad065028b8af9dfca8499a45a7b19ec20b1c478a751a77.png" alt="avatar" class="img-circle" />
      <?php else: ?>
        <img max-width="100%" max-height="100%" src="<?php echo BASE_URL; ?>/uploads/<?php echo $_SESSION['user']['image']; ?>">
      <?php endif; ?>
      
      <br><br>

      <form action="secret.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]">
        <input type="submit" name="btn btn-primary" value="Upload">
        <!-- <a href="multiup.php" class="btn btn-info">Back</a> --> 
      </form>


          <br><br>
          <h1><?php echo e($_SESSION['user']['firstname'], ENT_QUOTES, 'UTF-8'); ?> <?php echo htmlentities($_SESSION['user']['lastname'], ENT_QUOTES, 'UTF-8'); ?> </h1>
           <h1>Status: <?php echo htmlentities($_SESSION['user']['status'], ENT_QUOTES, 'UTF-8');  ?></h1>
          </div>
              <!--end of avatar div-->

              <!---beginning of personal info-->

               <div class="row" id="personal-info">
                <h1>Personal Info</h1>
                <form>
                  

                  <fieldset>
                    <legend>About Me</legend>
                    <div><form action="/action_page.php"></form></div>
  
                    <div id="email">
                    <label>E-mail or Username:  <span style="padding-left: 5px;"><?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8');  ?></span> </label>
                    </div>
                    <br><br>
                    <div id="skill1">
                    <label>Skill1:  <span style="padding-left: 5px;"><?php echo htmlentities($_SESSION['user']['skill1'], ENT_QUOTES, 'UTF-8');  ?></span> </label><br>
                    </div>
                    <br>
                    <div id="skill2">
                    <label>Skill2:  <span style="padding-left: 5px;"><?php echo htmlentities($_SESSION['user']['skill2'], ENT_QUOTES, 'UTF-8');  ?></span> </label><br>
                    </div>
                    <br>
                    <div id="skill3">
                    <label>Skill3:  <span style="padding-left: 5px;"><?php echo htmlentities($_SESSION['user']['skill3'], ENT_QUOTES, 'UTF-8');  ?></span> </label><br>
                    </div>
                    
                    Phone:
                    <input type="tel" name="usrtel" size="40" placeholder="XXX-XXX-XXXX" id="button">
                    <br>
                    <input type="Submit" value="Submit">
                    <input type="reset">
                    <br><br>
                  </form>
                 </fieldset></div>
              </form>
            </div>
            
            <div class="col-md-8" id="about">
              <h1 class="text-primary" id="Bio">Bio</h1>
              <fieldset>
                <legend>Text</legend>
                <br>
                <textarea rows="4" cols="50">Add personality to your profile! Tell the community about yourself, your skills, and your profession.</textarea>
              </fieldset>
          </div>
        </div>

    
      <br>
      <div class="well" id="icons">
        <a href="https://github.com/">
        <img src="http://hammerjs.github.io/assets/img/github-icon.png"></a>
        <a href="https://www.linkedin.com/">
        <img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/linkedin_circle_color-512.png"></a>
      </div>
      <div class="well">
        <ul class="list-group">
          <li class="list-group-item"></li>
        </ul>
      </div>
   
  </div>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>