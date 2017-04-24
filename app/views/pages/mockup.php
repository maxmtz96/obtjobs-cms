<?php require VIEW_ROOT . '/templates/header.php'; ?>

<?php require VIEW_ROOT . '/templates/sessions.php'; ?>

<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/mockup.css">

<div class="main-content131">    
  <div id="filter" onclick="acc()">

    <p>PICK STUDENTS WHO ARE RIGHT FOR YOU!!!</p>

    <div id="filter-content">
      <div id="first-filter">
        <button class="accordion">Skills</button>
        <div class="panel">
          <ul>
            <input type="checkbox"><li>Administrative Assistance</li><br>
            <input type="checkbox"><li>Back-end Developer</li><br>
            <input type="checkbox"><li>Customer Service</li><br>
            <input type="checkbox"><li>Database Management</li><br>
            <input type="checkbox"><li>Human Resources</li><br>
            <input type="checkbox"><li>Microsoft Office Specialist</li><br>
            <input type="checkbox"><li>Secretary</li><br>
            <input type="checkbox"><li>Web Designer</li><br>
          </ul>
        </div>
      </div>
      <div id="second-filter">
        <button class="accordion">Boroughs</button>
        <div class="panel">
          <ul>
            <input type="checkbox"><li>Staten Island</li><br>
            <input type="checkbox"><li>The Bronx</li><br>
            <input type="checkbox"><li>Queens</li><br>
            <input type="checkbox"><li>Manhattan</li><br>
            <input type="checkbox"><li>Brooklyn</li><br>
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

    <!-- Currently Disabled due to lack of functionality -->
  <div id="onfilter" style="display:none;">
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
    <?php if(empty($user['image']) || empty($user['proskill1']) || empty($user['aspiring'])): ?>
        <?php next($user); ?> 
      <?php else: ?>
        <div class="content" style="margin-top:20px;"><!-- Remove Margin once #onfilter is displayed --> 
            <div class="profile-container">
              <div class="profile-picture">
                <a href="<?php echo BASE_URL; ?>/profile.php?user=<?php echo $user['username']; ?>">
                  <img src="<?php echo BASE_URL; ?>/uploads/<?php echo e($user['image']); ?>"> 
                </a>
              </div>
              <div class="profile-info">
                <div class="profile-info-container">
                  <a href="<?php echo BASE_URL; ?>/profile.php?user=<?php echo $user['username']; ?>">
                    <h1><?php echo ucwords(e($user['firstname'].' '.$user['lastname'])); ?></h1>
                  </a>
                  <h2><?php echo ucwords($user['aspiring']); ?></h2>
                  <div id="cool">
                    <?php if(empty($user['proskill1'])): ?>
                      <p>nothing is showing</p>
                    <?php else: ?>
                      <button><?php echo e($user['proskill1']); ?></button>
                      <button><?php echo e($user['proskill2']); ?></button>
                      <button><?php echo e($user['proskill3']); ?></button>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

              <div id="links">
                <?php if(!empty($user['github'])): ?>
                  <a href="https://www.github.com/<?php echo $user['github'];?>"><img src="<?php echo BASE_URL; ?>/images/github-icon.png"></a>
                <?php endif; ?>
                <?php if(!empty($user['linkedin'])): ?>
                  <a href="https://www.linkedin.com/<?php echo $user['linkin'];?>"><img src="<?php echo BASE_URL; ?>/images/Linkedin_icon.png"></a>
                <?php endif; ?>
              </div>
            </div>
        </div>
    <?php endif; ?>
  <?php endforeach; ?>
<?php endif; ?> 
  


<?php require VIEW_ROOT . '/templates/footer.php'; ?>