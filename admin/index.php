<?php 

if(isset($_POST['btnLogin'])) {?>
    
 <?php 
    include("config/db.php");

    $txtUser=($_POST['user']);
    $txtPass=($_POST['password']);

    $sentenciaSQL= $conexion->prepare("SELECT * FROM users WHERE user=:user AND password=:password");
    $sentenciaSQL->bindParam('user',$txtUser,PDO::PARAM_STR);
    $sentenciaSQL->bindParam('password',$txtPass,PDO::PARAM_STR);
    $sentenciaSQL->execute();
    $datos=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);  

    print_r($datos);

    session_start();
    $_SESSION['sesion']=$datos;
    
    $numReg=$sentenciaSQL->rowCount();
?>    
  <?php if($numReg>=1) {?>
      
 <?php     echo "Bienvenido";
      header("Location:inicio.php");?>

<?php    }else{?>
      
<?php      $mensaje="User not found- Wrong username or password";
    }

?>
    
   
  <?php  } ?>

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
                
                               
                <button type="submit" name="btnLogin" class="btn btn-primary">Sign In</button>
                  
                
          </form>
      </div>
                
      </div>
      </div>
            
      </div>
        
      </div>
      </div>
    
    </body>
</html>