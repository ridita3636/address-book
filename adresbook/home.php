<?php
session_start();
include 'db_config.php';

if(!$_SESSION['username'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
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
               
             
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>

				<nav class="codrops-demos">
					
					<a href="home.php" class="current-demo">View</a>
					<a href="insert.php">Insert</a>
				  <a href="logout.php">Log Out</a>
					
				</nav>
            </header>

            <section>				
                <div id="container_demo" >
                 
                    

                    <table >
              <thead>
              <tr>
                <th  style="padding-left: 300px;">FirstName</th>
                 <th style="padding-left: 50px;">LastName</th>
               <th style="padding-left: 70px;">Email</th>
                <th style="padding-left: 20px;">Number</th>
               
                 <th style="padding-left: 20px;">Address</th>
                <th style="padding-left: 30px;">Action</th>
              </tr>
              </thead>

              <tbody>
              
              <?php
              if (isset($_SESSION['username'])) {
                $username=$_SESSION['username'];
              }


               $identified = mysqli_query($dbcon,"SELECT id FROM registration WHERE username = '$username'");
                $row= mysqli_fetch_array($identified);
                $data=$row['id'];

              $result = mysqli_query($dbcon,"select * from information where indentity='$data'" );
              
              while($row = mysqli_fetch_array($result)){
                ?>
      
              <tr>
                <th style="padding-left: 300px;"><?php echo $row['firstname'];?></th>
                  <th style="padding-left: 50px;"><?php echo $row['lastname'];?></th>
                   <th  style="padding-left: 50px;"><?php echo $row['email'];?></th>
                <td style="padding-left: 20px;"><?php echo $row['phone'];?></td>
                
                <td style="padding-left: 20px;"><?php echo $row['address'];?></td>



                <td style="padding-left: 20px;">
                <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                
                 | <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
                </td>

              </tr>

                
            <?php }
              
              ?>
              
            
              </tbody>

            </table>


                </div>  
            </section>
        </div>
    </body>
</html>