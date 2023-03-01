<?php include("template/cabecera.php"); ?>    

<?php
$txtID=(isset($_POST["txtID"]))?$_POST["txtID"]:"";
$txtName=(isset($_POST["txtName"]))?$_POST["txtName"]:"";
$txtDate=(isset($_POST["txtDate"]))?$_POST["txtDate"]:"";
$txtMail=(isset($_POST["txtMail"]))?$_POST["txtMail"]:"";
$accion=(isset($_POST["accion"]))?$_POST["accion"]:"";


include("config/db.php");


switch($accion){

    case"Add";
    $sentenciaSQL= $conexion->prepare("INSERT INTO datos (name,date,mail) VALUES (:name,:date,:mail);");
    $sentenciaSQL->bindParam(':name',$txtName);
    $sentenciaSQL->bindParam(':date',$txtDate);
    $sentenciaSQL->bindParam(':mail',$txtMail);

    $sentenciaSQL->execute();
    header("Location:inicio.php");
    break;

    case"Modify";
    $sentenciaSQL= $conexion->prepare("UPDATE datos SET name=:name WHERE id=:id");
        $sentenciaSQL->bindParam(':name',$txtName);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
       
        $sentenciaSQL= $conexion->prepare("UPDATE datos SET date=:date WHERE id=:id");
        $sentenciaSQL->bindParam(':date',$txtDate);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        
        $sentenciaSQL= $conexion->prepare("UPDATE datos SET mail=:mail WHERE id=:id");
        $sentenciaSQL->bindParam(':mail',$txtMail);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

    header("Location:inicio.php");
    break;

    case"Cancel";
    
    header("Location:inicio.php");
    
    break;

    case"Select";
    $sentenciaSQL= $conexion->prepare("SELECT * FROM datos WHERE id=:id");
    $sentenciaSQL->bindParam(':id',$txtID);
    $sentenciaSQL->execute();
    $datos=$sentenciaSQL->fetch(PDO::FETCH_LAZY);   

    $txtName=$datos['name'];
    $txtDate=$datos['date'];
    $txtMail=$datos['mail'];
    
    break;

    case"Delete";
    $sentenciaSQL= $conexion->prepare("SELECT * FROM datos WHERE id=:id");
    $sentenciaSQL->bindParam(':id',$txtID);
    $sentenciaSQL->execute();
    $datos=$sentenciaSQL->fetch(PDO::FETCH_LAZY); 

    $sentenciaSQL= $conexion->prepare("DELETE FROM datos WHERE id=:id");
    $sentenciaSQL->bindParam(':id',$txtID);
    $sentenciaSQL->execute();

    header("Location:inicio.php");
    break;
    
}

$sentenciaSQL= $conexion->prepare("SELECT * FROM datos");
$sentenciaSQL->execute();
$listadatos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
       
    <div class="col-md-4">

        <div class="card">
        
        <div class="card-header">
            Add / Modify Birthday 
        </div>
        <div class="card-body">
                 
        <form method="POST" enctype="multipart/form-data" >
        
            <div class = "form-group">
            <label for="txtID">ID:</label>
            <input type="text" required readonly class="form-control" value="<?php echo $txtID;?>" name="txtID" id="txtID" placeholder="ID">
            </div>
            
            <div class = "form-group">
            <label for="txtName">Name:</label>
            <input type="text" class="form-control" value="<?php echo $txtName;?>" name="txtName" id="txtName" placeholder="Username">
            </div>

            <div class = "form-group">
            <label for="txtDate">Birthdate:</label>
            <input type="date" class="form-control" value="<?php echo $txtDate;?>" name="txtDate" id="txtDate" placeholder="Birthdate">
            </div>

            <div class = "form-group">
            <label for="txtMail">Email address:</label>
            <input type="email" class="form-control" value="<?php echo $txtMail;?>" name="txtMail" placeholder="Enter email">
            </div>

            <div class="btn-group" role="group" aria-label="">
                
                <button type="submit" name="accion" <?php echo ($accion=="Select")?"disabled":""; ?> value="Add" class="btn btn-success">Add</button>
                <button type="submit" name="accion" <?php echo ($accion!="Select")?"disabled":""; ?> value="Modify" class="btn btn-warning">Modify</button>
                <button type="submit" name="accion" <?php echo ($accion!="Select")?"disabled":""; ?> value="Cancel" class="btn btn-info">Cancel</button>
            
            
            </div>



        </form>




        </div>
        
        </div>
    </div>
       
       
       
    <div class="col-md-8">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Birthdate</th>
                    <th>Email</th>
                </tr>
            </thead>
            
            <tbody>
            <?php foreach($listadatos as $datos) { ?>
          
                <tr>
                    <td><?php echo $datos['id']; ?></td>
                    <td><?php echo $datos['name']; ?></td>
                    <td><?php echo $datos['date']; ?></td>
                    <td><?php echo $datos['mail']; ?></td>
                    <td>

                    <form method="post">
                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $datos ["id"];?>" />
                        <input type="submit" name="accion" value="Select" class="btn btn-primary"/>
                        <input type="submit" name="accion" value="Delete" class="btn btn-danger"/>
                    </form>
                    </td>
                </tr>
            <?php } ?>
                
            </tbody>
        </table>


       </div>



<?php include("template/pie.php"); ?>    
    


