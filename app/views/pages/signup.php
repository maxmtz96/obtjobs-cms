<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/signup.css">

<div class="signup">
    <div class="form">
      <h1>Create an Account</h1>
      <form class="login-form" method="post" action="signup.php">
        <input id="left" type="text" name="firstname" placeholder="First Name"/>
        <input id="right" type="text" name="lastname" placeholder="Last Name"/>
        <input id="left" type="username" name="username" placeholder="User Name"/>
        <input id="right" type="email" name="email" placeholder="Email Address"/>
        
        <input id="left" type="password" name="password" placeholder="Password"/>
        <input id="right" type="password" name="" placeholder="Confirm Password"/> 

        <label class="occupation">Occupation?:<select name="status">

          <option value="Student">Student</option>
          <option value="Staff">Staff Member</option>
          
        </select>
        </label>

        <button type="submit">Create Account</button>
        <p class="message">Already registered? <a href="login.php">Login</a></p>
        <p class="message">Empolyers sign up here <a href="empsignup.php">Sign up</a></p>
      </form>
    </div>
  </div>

  


<?php require VIEW_ROOT . '/templates/footer.php'; ?>