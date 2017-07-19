
<?php 
session_start();
include 'db_config.php';

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $userpass=$_POST['password'];

    $check_user="select * from registration WHERE username='$username'AND password='$userpass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('home.php','_self')</script>";

        $_SESSION['username']=$username;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Username or password is incorrect!')</script>";
    }
}


if(isset($_POST['submit']))
{
    $name=$_POST['name'];//here getting result from the post array after submitting the form.
      $email=$_POST['email'];//same
    $username=$_POST['username'];//same
  $password=$_POST['password'];//same

  
//insert the user into the database.
    $insert_user="insert into registration (name,email,username,password) VALUE ('$name','$email','$username','$password')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>alert('Registration successful')</script>";
    }
    else
    {
        echo"<script>alert('Registration not successful')</script>";
    }

}


 ?>




 <!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Addressbook</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
         <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
               
             
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>

				<nav class="codrops-demos">
					
					<a href="index.php" >Home</a>
					<a href="login.php" class="current-demo">Login</a>
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="username"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="........" /> 
                                </p>
                              
                                <p class="login button"> 
                                    <input type="submit" name="login" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Registration</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="login.php" autocomplete="on" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Name</label>
                                    <input id="usernamesignup" name="name" required="required" type="text" placeholder="Name" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="abc@gmail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your Username </label>
                                    <input id="username" name="username" required="required" type="username" placeholder="abc"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>