<!DOCTYPE html>
<html>
  <meta charset="utf-8" />
<body>

<form action ="" method="POST">
      <h1> Please enter your information to create a new login account</h1>
        <p>  
          <label>Login Name:</label><input type = "text"  name = "name" />
          <label>Password:</label><input type = "password" name = "pwd" />
          <br/>
          <br/>
        </p>
      <input type = "submit" name="submit_btn" id = "submit" value = "submit"/>
      <input type = "reset"  id = "reset" value = "reset"/>
    </form>

</body>
</html>


<?php

 if(isset($_POST['submit_btn']))
 {
  $username = $_POST['name'];
  $password = $_POST['pwd'];
  if (empty($username))
       {
    echo "Please enter a username<br>";
       } else $username = $username;

  if (empty($password))
       {
     echo "Please enter a password<br>";
       } 
  else $password = $password;
  $text = $username . ",".$password."
  ";
  $fp = fopen('accounts.txt', 'a+');
  $path = 'accounts.txt';
  if( strpos(file_get_contents($path),$username) !== false) 
  {
    echo "<h3>Username already exists , please enter a different Username</h3>";
  }
  if( strpos(file_get_contents($path),$username) !== true) 
  {
          fwrite($fp, $text);
            echo '<h3>New Account Created</h3>';
  }
   
fclose ($fp);    
}
?>

