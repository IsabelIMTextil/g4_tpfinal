<?php
require './panel/conexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
if( ($_SERVER['REQUEST_METHOD']!='POST')&&($_SERVER['REQUEST_METHOD']!='GET')){
    header("location:adminpanel.php");
}
?>

    
            <h1>Actualizar Registros</h1>
        
                <?php
                    
                    if(isset($_POST)&&!empty($_POST)){
                        /*$id=$_POST['id'];*/
                        $nombre=$_POST['nombre'];
                        $apellido=$_POST['apellido'];    
                        $tema=$_POST['tema'];
                                                
                        $consulta_sql = "UPDATE oradores SET nombre='$nombre', apellido='$apellido', tema='$tema' where id_orador=$id";
                        $resultado = mysqli_query($conexion,$consulta_sql);
					    if($resultado){
						    $message= "Datos actualizados con éxito";
						header("location:adminpanel.php");
						
					    }else{
						    $message="No se pudieron actualizar los datos";
						    
					    }
					
					?>
                    <div class="<?php echo $class?>">
				        <?php echo $message;?>
				    </div>	
				<?php
				}
				$consulta_sql = "SELECT * FROM oradores where id_orador=$id";
                $resultado = mysqli_query($conexion,$consulta_sql);
                $dato_orador=mysqli_fetch_assoc($resultado);
			?>
                <form  method="post">
                <div class="row g-3 mb-3"> 
                <div class="row">
                    <div class="mb-3">      
                    <input type="hidden" name="id" id="id" class='form-control' maxlength="100" value="<?php echo $dato_orador['id_orador'];?>">  
                    </div>
                </div>
                <label for="nombre">Nombre</label>
                    <div class="col-md-6"> 
                    <input type="text" class="form-control" id="inputOradorNombre" name="nombre" value="<?php echo $dato_orador['nombre'];?>">
                    </div>
                      <label for="nombre">Apellido</label>
                    <div class="col-md-6">
                    <input type="text" class="form-control" id="inputOradorApellido" name="apellido" value="<?php echo $dato_orador['apellido']?>">
                    </div>
                </div>
              
                </div>
                  <label for="nombre">Tema</label>
                <div class="row">
                    <div class="mb-3">      
                    <textarea class="form-control" id="inputOradorTema" rows="3" name="tema"><?php echo $dato_orador['tema']?></textarea>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3"> 
                   <button class="btn btn-primary w-100 botonVerde" type="submit">Actualizar</button>          
                    </div>
                    
                </div>
                </form>
            </div>
            </div>
    </main>