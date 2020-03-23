    <!DOCTYPE html>
               <html lang="en">
               <head>
                   <meta charset="UTF-8">
                   <title>Sign Up</title>
                   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
                  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                  <link rel="stylesheet href="assets/css/style.css">
               </head>
               <body>
               <?php
               require ('connect.php');

               if(isset($_POST['username']) && isset($_POST['password'])){
                   $username =$_POST['username'];
                   $email =$_POST['email'];
                   $password =$_POST['password'];

                   $query = "INSERT INTO auth (username, password, email) VALUES ('$username','$email', '$password')";
                   $results =mysqli_query($connection, $query);

                   if($results){
                       $smsg =" Registration is successfully!";
                   }else{
                       $fsmsg = "Error!";
                   }
               }
               ?>
               <section class="register" id="register">
                   <div class="container">
                       <span class="icon" id="icon"><a href=""><i class="fas fa-times"></i></a></span>
                       <div class="col col-md-12 block_">

                           <form class="form-signin" method="POST">
                               <h2>Registration</h2>
                               <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php  echo $smsg; ?></div><?php }?>
                               <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php  echo $fsmsg; ?></div><?php }?>
                               <input type="text" name="username" class="form-control" placeholder="Username" required height="50">
                               <input type="email" name="email" class="form-control" placeholder="Email" required height="50">
                               <input type="password" name="password" class="form-control" placeholder="Password" required height="50">
                               <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                               <a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>
                           </form>
                       </div>
                   </div>
               </section>
               </body>
               </html>
