<?php 
session_start();

  if($_POST){
    if(($_POST["user"]=="Casiopea")&&($_POST["password"]=="1234")){
      
      $_SESSION["user"]="ok";
      $_SESSION["nameuser"]="Casiopea";
      header("Location:inicio.php");
    }else{
      $mensaje="Wrong username or password";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
<br/>
<br/>
<br/>
      <div class="card">
      <div class="card-header">
                    Login
      </div>
      <div class="card-body">

         <?php if(isset($mensaje)) {?> 
          <div class="alert alert-danger" role="alert">
            <?php echo $mensaje; ?>
          </div>
        <?php }?>

          <form method="POST">
                
                <div class = "form-group">
                <label>User</label>
                <input type="text" class="form-control" name="user" placeholder="Enter User">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                               
                <button type="submit" class="btn btn-primary">Sign In</button>
          </form>
      </div>
                
      </div>
      </div>
            
      </div>
        
      </div>
      </div>
    
    </body>
</html>