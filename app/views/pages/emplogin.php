<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/login.css">

<div class="login">
  <div class="form">
    <h1>Login</h1>
    <form method="post" action="emplogin.php" class="login-form">
      <input type="text" name="username" placeholder="Username"/>
      <input type="password" name="password" placeholder="Password"/>
      
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="empsignup.php">Create an account</a></p>
    </form>
  </div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>