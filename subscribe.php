<?php include("template/cabecera.php"); ?>

<?php
$txtID=(isset($_POST["txtID"]))?$_POST["txtID"]:"";
$txtUser=(isset($_POST["txtUser"]))?$_POST["txtUser"]:"";
$txtPass=(isset($_POST["txtPass"]))?$_POST["txtPass"]:"";
$accion=(isset($_POST["accion"]))?$_POST["accion"]:"";


include("admin/config/db.php");



switch($accion){

    case"Add";
    $sentenciaSQL= $conexion->prepare("INSERT INTO users (user,password) VALUES (:user,:password);");
    $sentenciaSQL->bindParam(':user',$txtUser);
    $sentenciaSQL->bindParam(':password',$txtPass);
    

    $sentenciaSQL->execute();
    header("Location:ok.php");
    
    break;

}

$sentenciaSQL= $conexion->prepare("SELECT * FROM users");
$sentenciaSQL->execute();
$listadatos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
  
  < <div class="col-md-4">
        
    </div>

    <div class="col-md-4">

        <div class="card">
        <br/>
        <div class="card-header">
            Subscribe
        </div>
        <div class="card-body">
                 
        <form method="POST" enctype="multipart/form-data" >
        
                   
            <div class = "form-group">
            <label for="txtUser">User:</label>
            <input type="text" class="form-control" value="<?php echo $txtUser;?>" name="txtUser" id="txtUser" placeholder="Username">
            </div>

            <div class = "form-group">
            <label for="txtPass">Password:</label>
            <input type="password" class="form-control" value="<?php echo $txtPass;?>" name="txtPass" id="txtPass" placeholder="Password">
            </div>
<br/>

            <div class="btn-group" role="group" aria-label="">
                
                <button type="submit" name="accion" value="Add" class="btn btn-success">Subscribe</button>
                
            
            
            </div>



        </form>

        </div>
        
        </div>
    </div>
       
       
       
    



<?php include("template/pie.php"); ?>    
    


