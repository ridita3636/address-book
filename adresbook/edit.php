<?php
session_start();
include 'db_config.php';

if(!$_SESSION['username'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
} 




	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
	}else{
		header('location: home.php');
	}


	if(isset($_POST["submit"])){
	$firstname= $_POST["firstname"];
	$lastname= $_POST["lastname"];
	$email= $_POST["email"];
	$number= $_POST["phone"];
	
	$address = $_POST["address"];

	 $query="UPDATE information SET firstname='$firstname',lastname='$lastname',email='$email',phone='$number',address='$address' WHERE id='$id'";
    $result=mysqli_query($dbcon,$query);
  

if($result){
echo "<script>alert('Successfully update')</script>";
}

else
{
echo "<script>alert('Not update')</script>";
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
         <link rel="stylesheet" type="text/css" href="css/css.css" />
          <link rel="stylesheet" type="text/css" href="css/style.css" />
         <link rel="stylesheet" type="text/javascript" href="javascript.js">
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
                    
                    <a href="home.php" >Home</a>
                    <a href="insert.php" class="current-demo">Insert</a>
                    
                </nav>
            </header>
            <section>               
                <div id="container_demo" >
                  
                    <div id="wrapper">
                      <div class="container">

    <form class="well form-horizontal" action="edit.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Update your information!</legend>

<!-- Text input-->
<?php 
					$result = mysqli_query($dbcon,"select * from information where id='$id'");
					while($row = mysqli_fetch_array($result)){
						$firstname = $row['firstname'];
						$lastname = $row['lastname'];
						$email = $row['email'];
						$number = $row['phone'];
						$address = $row['address'];
					}
					
				?>

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="firstname" placeholder="First Name" class="form-control" value="<?php echo $firstname;?>"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" value="<?php echo $email;?>" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" value="<?php echo $number;?>" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" value="<?php echo $address;?>" class="form-control" type="text">
    </div>
  </div>
</div>




  <input type="submit" name="submit"  value="Update">
 

</fieldset>
</form>
</div>
    </div><!-- /.container -->

                      
                        
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>