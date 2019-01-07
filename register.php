
<?php
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");
  $account = new Account();
  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");
  function getInputValue($name) {
    if (isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>This is the register php</title>
  </head>
  <body>
    <form id = "loginForm" action="register.php" method="post">
       <h2>Login to your account</h2>
       <p>
         <label for="loginUsername">Username</label>
         <input id ="loginUsername" type="text" name="loginUsername" value = "<?php getInputValue('loginUsername')?>" placeholder="e.g. bartSimpson" required>
       </p>
       <p>
         <label for="loginPassword">Password</label>
         <input id ="loginPassword" type="password" name="loginPassword" placeholder="Your Password" required>
       </p>
       <button type="submit" name="loginButton">LOG IN</button>
    </form>

    <form id = "registerForm" action="register.php" method="post">
       <h2>Create your free account</h2>
       <p>
         <?php echo $account->getError(Constants::$usernameCharacters); ?>
         <label for="username">Username</label>
         <input id ="username" type="text" name="username" value = "<?php getInputValue('username')?>" placeholder="e.g. bartSimpson" required>
       </p>

       <p>
         <?php echo $account->getError(Constants::$firstnameCharacters); ?>
         <label for="firstName">FirstName</label>
         <input id ="firstName" type="text" name="firstName" value = "<?php getInputValue('firstName')?>" placeholder="e.g. Bart" required>
       </p>

       <p>
         <?php echo $account->getError(Constants::$lastnameCharacters); ?>
         <label for="lastName">LastName</label>
         <input id ="lastName" type="text" name="lastName" value = "<?php getInputValue('lastName')?>" placeholder="e.g. bartSimpson" required>
       </p>

       <p>
          <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
          <?php echo $account->getError(Constants::$emailInvalid); ?>
         <label for="email">Email</label>
         <input id ="email" type="email" name="email" value = "<?php getInputValue('email')?>" placeholder="e.g. bart@gmail.com" required>
       </p>
       <p>
         <label for="email2">Confirm Email</label>
         <input id ="email2" type="email" name="email2" value = "<?php getInputValue('email2')?>" placeholder="e.g. bart@gmail.com" required>
       </p>

       <p>
         <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
         <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
         <?php echo $account->getError(Constants::$passwordCharacters); ?>
         <label for="password">Password</label>
         <input id ="password" type="password" name="passWord" value = "<?php getInputValue('passWord')?>" placeholder="Your Password" required>
       </p>
       <p>
         <label for="password2">Confirm Password</label>
         <input id="password2" type="password" name="passWord2" value = "<?php getInputValue('passWord2')?>" placeholder="Confirm Your Password" required>
       </p>
       <button type="submit" name="registerButton">Sgin Up</button>
    </form>
  </body>
</html>
