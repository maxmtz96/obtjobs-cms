<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/employer.css">

<div class="signup-container">
    <div class="form">
      <h1>Create an Account</h1>
      <h3>For Employers</h3>
        <form method="post" class="login-form" action="empsignup.php"> 
        <input class="left" type="text" name="firstname" placeholder="First Name"/>
        <input class="right" type="text" name="lastname" placeholder="Last Name"/>

        <input class="left" type="Industry" name="worksector" placeholder="Work Sector"/>
        <input class="right" type="Company Name" name="companyname" placeholder="Company Name"/>

        <input class="left" type="Position" name="worktitle" placeholder="Work Title"/>
        <input class="right" type="Department" name="workdepartment" placeholder="Work Department"/>

        <input class="left" type="username" name="username" placeholder="Username"/>
        <input class="right" type="email" name="email" placeholder="Email Address"/>

        <input class="left" type="password" name="password" placeholder="Password"/>
        <input class="right" type="password" name="password" placeholder="Confirm Password"/> 

        <button type="submit">Create Account</button>

        <p class="message">Already registered? <a href="login.php">Login</a></p>
      </form>
    </div>
<?php //require VIEW_ROOT . '/templates/footer.php'; ?>