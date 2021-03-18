<?php
/*
The php script in on this page is mainly used to handle the action of logging a user in.
*/

//import database connection
include("dbconnect.php");

//Activates once the post method is called in the html form below
  if($_SERVER["REQUEST_METHOD"] == "POST") {

    //User information retrieved from the html form
    $email = mysqli_real_escape_string($link,$_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);

    //SQL query
    $sql = "SELECT id FROM Users WHERE email = '$email' and  password = '$password'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    //Stores the value of rows retrieved from database
    $count = mysqli_num_rows($result);

    //If count is equal to 1, then that user does exists and is authenticated.
    if($count == 1) {
      //redirect upon sucessful login
      header("location: welcome.html");
    }
    else{
      //Redirect in case of unsuccessful login
      header("location: notWelcome.html");
    }

  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="loginPage.css">
  <script defer src="login-page.js"></script>
</head>

<body>
  
  <!--<div class="sidenav-left"></div>-->
  <!--<div class="sidenav-right"></div>-->

  <main id="main-holder">
    <h1 id="login-header">WKU ABET Materials Database Login</h1>
    
    <div id="login-error-msg-holder">
      <p id="login-error-msg">Invalid email <span id="error-msg-second-line">and/or password</span></p>
    </div>
    
    <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <input type="text" name="email" id="email-field" class="login-form-field" placeholder="Email">
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
      <input type="submit" value="Login" id="login-form-submit">
    </form>

    <form action="/signUpPage.html">
         <input type="submit" value="Sign Up">
    </form>
 
  
  </main>
</body>

</html>
