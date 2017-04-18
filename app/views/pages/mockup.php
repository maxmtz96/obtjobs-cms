<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/mockup.css">
<div class="main-content131">    
  <div id="filter" onclick="acc()">
       <div id="SignUpDiv">
          <?php if(isset($_SESSION['employer'])): ?>
            <a href="<?php echo BASE_URL; ?>/logout.php">Log out</a>
            <a href="<?php echo BASE_URL; ?>/profile.php">Signed in as <?php echo e($_SESSION['employer']['username'], ENT_QUOTES, 'UTF-8'); ?></a>     
          <?php elseif(isset($_SESSION['user'])): ?>
            <a href="<?php echo BASE_URL; ?>/logout.php">Log out</a>
            <a href="<?php echo BASE_URL; ?>/profile.php?user=<?php echo $_SESSION['user']['username']; ?>">Signed in as <?php echo e($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></a>
          <?php else: ?>
            <a href="<?php echo BASE_URL; ?>/login.php">Sign In</a>
            <a href="<?php echo BASE_URL; ?>/signup.php">Sign Up</a>
          <?php endif; ?>
        </div>
    <p>PICK STUDENTS WHO ARE RIGHT FOR YOU!!!</p>

    <div id="filter-content">
      <div id="first-filter">
        <button class="accordion">Skills</button>
        <div class="panel">
          <ul>
            <input type="checkbox"><li>HTML</li><br>
            <input type="checkbox"><li>CSS</li><br>
            <input type="checkbox"><li>PHP</li><br>
            <input type="checkbox"><li>Javascript</li><br>
          </ul>
        </div>
      </div>
      <div id="second-filter">
        <button class="accordion">Boroughs</button>
        <div class="panel">
          <ul>
            <input type="checkbox"><li>Queens</li><br>
            <input type="checkbox"><li>Brooklyn</li><br>
            <input type="checkbox"><li>Manhattan</li><br>
          </ul>
        </div> 
      </div>
      <div id="third-filter">
        <button class="accordion">Hours</button>
        <div class="panel">
          <ul>
            <input type="checkbox"><li>Full Time</li><br>
            <input type="checkbox"><li>Part Time</li><br>
          </ul>
        </div>    
      </div>
    </div>
  </div>

    
  <div id="onfilter">
    <ul>
      <li>You are here :</li>
      <a href="#"><li>HyperText Markup Language</li></a>
      <img src="images/play.png">
      <a href="#"><li>Brooklyn</li></a>
      <img src="images/play.png">
      <a href="#"><li>Full Time</li></a>
    </ul>
  </div>


 <?php if(empty($users)): ?>
  <p>something is wrong</p>
<?php else: ?>
  <?php foreach($users as $user): ?>
    <?php if(empty($user['image'])): ?>
        <?php next($user); ?> 
      <?php else: ?>
        <div class="content">
          <a href="<?php echo BASE_URL; ?>/profile.php?user=<?php echo $user['username']; ?>">
            <div class="profile-container">
              <div class="profile-picture">
                <img src="<?php echo BASE_URL; ?>/images/<?php echo e($user['image']); ?>">  
              </div>
              <div class="profile-info">
                <div class="profile-info-container">
                  <h1><?php echo e($user['firstname'].' '.$user['lastname']); ?></h1>
                  <h2>Web Design and Coding Fundamentals</h2>
                  <div id="cool">
                    <?php if (empty($user['skill1'])): ?>
                      <p></p>
                    <?php else: ?>
                      <button disabled><?php echo e($user['skill1']); ?></button>
                      <button disabled><?php echo e($user['skill2']); ?></button>
                      <button disabled><?php echo e($user['skill3']); ?></button>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

              <div id="links">
                <img src="<?php echo BASE_URL; ?>/images/github-icon.png">
                <img src="<?php echo BASE_URL; ?>/images/Linkedin_icon.png">
              </div>
            </div>
          </a>
        </div>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?> 
  


<?php require VIEW_ROOT . '/templates/footer.php'; ?>