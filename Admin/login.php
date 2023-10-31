<?php
//sign in
session_start();
//$_SESSION["logged"] = false;
if(isset($_SESSION["logged"]) and $_SESSION["logged"]){
  header("Location:/biznews/admin/News.php");
        die();
}

if(isset($_POST["loginbtn"])){
if($_SERVER["REQUEST_METHOD"] === "POST")
{
  try{
    include_once("includes/con_db.php");
    $username =$_POST["username"];
    $_SESSION["username"] = $username;
    $pass = $_POST["pass"];
    $sql = "SELECT `id` , `pass`, `active` FROM `users` WHERE `username` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);

    if($stmt->rowCount() >0){
      $result = $stmt->fetch();
      $hash = $result["pass"];
      $active = $result["active"];
      $verify = password_verify($pass, $hash);
      if($verify and $active){
       $_SESSION["logged"] = true;
       $id = $result["id"];
       $_SESSION["id"] = $id;
        header("Location:/biznews/admin/News.php?id=$id");
        die();
      }else{
        echo "password isn't correct or verify your account";
      }
    }else{
      echo "this username is not found";
    }
  } catch(PDOException $e){
    echo "Connection Failed:" .$e->getMessage();
  }
}}
//sign up
elseif(isset($_POST["regbtn"])){
if($_SERVER["REQUEST_METHOD"]==="POST")
{
try{
	include_once("includes/con_db.php");
	$sql="INSERT INTO `users`(`name`, `username` , `email`, `pass`) VALUES (?,?,?,?)";
	$name = $_POST["name"];
	$username= $_POST["rusername"];
	$email = $_POST["email"];
  $pass= password_hash($_POST["rpass"],PASSWORD_DEFAULT);
	$stmt= $conn->prepare($sql);
	$stmt->execute([$name, $username, $email, $pass]);
  header("Location:login.php");
        die();
}catch(PDOException $e)
{
	echo "Connection Failed:" .$e->getMessage();
}
}}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Admin | Login/Register</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form name="flogin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
            <h1>Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="pass" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="#" onclick="document.forms['flogin'].submit();">Log in</a>
                <input type="hidden" name="loginbtn">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-newspaper-o"></i></i> News Admin</h1>
                  <p>©2016 All Rights Reserved. News Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form name="freg" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">   
            <h1>Create Account</h1>
              <div>
                <input type="text" name="name" class="form-control" placeholder="Fullname" required="" />
              </div>
              <div>
                <input type="text" name="rusername" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="rpass" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="#" onclick="document.forms['freg'].submit();">Submit</a>
                <input type="hidden" name="regbtn">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-newspaper-o"></i></i> News Admin</h1>
                  <p>©2016 All Rights Reserved. News Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
