<?php
if(isset($_POST['loginButton'])) {
  //Login Button was pressed
  $loginUsername = sanitizeFormUsername($_POST['loginUsername']);
}
?>
