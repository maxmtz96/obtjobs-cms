<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/signup.css">

<div class="signup-container">
    <div class="form">
      <h1>Create an Account</h1>
      <form class="login-form" method="post" action="signup.php">
        <div class="top">
          <input class="left" type="text" name="firstname" placeholder="First Name"/>
          <input class="right" type="text" name="lastname" placeholder="Last Name"/>
        </div>
        <div class="mid">
          <input class="left" type="username" name="username" placeholder="User Name"/>
          <input class="right" type="email" name="email" placeholder="Email Address"/>
        </div>
        <div class="bot">
          <input class="left" type="password" name="password" placeholder="Password"/>
          <input class="right" type="password" name="" placeholder="Confirm Password"/> 
        </div>
        <div style="clear:both;"></div>
        <button type="submit">Create Account</button>
        <p class="message">Already registered? <a href="login.php">Login</a></p>
        <p class="message">Empolyers sign up here <a href="empsignup.php">Sign up</a></p>
      </form>
    </div>
  </div>

  <div style="clear:both;"></div>


<?php //require VIEW_ROOT . '/templates/footer.php'; ?>