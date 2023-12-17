<main>
        <div class="container-fluid">
       
            <!--  empieza  carousel -->
            <div class="row mt-1" id="carru">
              <div class="col-12">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imagenes/wichí.jpg" class="d-block w-100" alt="Textiles Wichí" style="height:300px;">
                    <div class="carousel-caption text-right caption-center">
                      <h2 class="bg-dark">Textiles tradicionales del territorio argentino</h2>
                      <p>Charlas sobre cultura, lengua y cosmovisión de los pueblos originarios de Argentina. Talleres sobre técnicas textiles Wichí, Mapuche y del NOA.</p>
                      <button type="button" class="btn btn-outline-warning" >Para dar charlas</button>
                      <button type="button" class="btn btn-outline-success">Inscripciones</button>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="imagenes/mapuche2.jpg" class="d-block w-100" alt="Textiles Mapuches" style="height:300px;">
                    <div class="carousel-caption text-right caption-center">
                      <h2 class="bg-dark">Textiles tradicionales del territorio argentino</h2>
                      <p>Charlas sobre cultura, lengua y cosmovisión de los pueblos originarios de Argentina. Talleres sobre técnicas textiles Wichí, Mapuche y del NOA.</p>
                      <button type="button" class="btn btn-outline-warning">Para dar charlas</button>
                      <button type="button" class="btn btn-outline-success">Inscripciones</button>
                    </div>
                  </div>
            
                  <div class="carousel-item">
                    <img src="imagenes/noa2.jpg" class="d-block w-100" alt="Textiles del NOA" style="height:300px;">
                    <div class="carousel-caption text-right caption-center">
                      <h2 class="bg-dark">Textiles tradicionales del territorio argentino</h2>
                      <p>Charlas sobre cultura, lengua y cosmovisión de los pueblos originarios de Argentina. Talleres sobre técnicas textiles Wichí, Mapuche y del NOA.</p>
                      <button type="button" class="btn btn-outline-warning">Para dar charlas</button>
                      <button type="button" class="btn btn-outline-success">Inscripciones</button>
                    </div>
            
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
            </div>
            </div>
            </div>
            <!--  acá termina carousel -->
            

            
                <!-- comienzan las cards -->
            <div class="body">
            
                <div id="charlas">
                    <h2>Charlas sobre pueblos originarios</h2>
                    <h5> Cultura, lengua, cosmovisión y técnicas textiles</h5>
                </div>
                  <div class="row">
                        <div class="card-group">
                             
                        <div class="col"> </div>
                        <div class="col m-3">
                          <div class="card-responsive">
                            <img src="imagenes/wichi-tec.jpeg" class=" img-thumbnail rounded" alt="técnica textil wichí">
                            <div class="card-body p-0">
                              <button type="button" class="btn btn-warning btn-sm">Charla y vídeo</button>
                              <button type="button" class="btn btn-outline-success">Demostración</button>
                              <h5 class="card-title">Tejido Wichí </h5>
                              <p class="card-text row-4">Los tejidos de la cultura Wichí se realizan con la fibra de chaguar o caraguatá, una
                                planta que se usa desde tiempos prehispánicos con fines... </p>
                              <!-- <p class="card-text"><small class="text-body-secondary">más...</small></p> -->
                  <?php
                  echo "<td><a class='button [btn btn-warning btn-block]'href='pages/wichi.php' target='_blank'>más...</a></td></tr>"; 
                  ?>

                            </div>
                          </div>
                        </div>
                        <div class="col m-3">
                          <div class="card-responsive">
                            <img src="imagenes/mapuche-tec.jpeg" class="img-thumbnail rounded" alt="técnica textil mapuche">
                            <div class="card-body">
                              <button type="button" class="btn btn-warning btn-sm">Charla</button>
                              <button type="button" class="btn btn-outline-success">Demostración</button>
                              <h5 class="card-title">Técnica textil Mapuche</h5>
                              <p class="card-text">Los tejidos de la cultura Mapuche se realizan en telar vertical o "witral", que en
                                lengua mapuche...</p>
                              <!-- <p class="card-text"><small class="text-body-secondary">más...</small></p> -->
                              <?php
                  
                  echo "<td><a class='button [btn btn-warning btn-block]'href='pages/mapuche.php' target='_blank'>más...</a></td></tr>"; 
?>

                            </div>
                          </div>
                        </div>
                        <div class="col m-3">
                          <div class="card-responsive">
                            <img src="imagenes/diaguita-tec.jpeg" class="img-thumbnail rounded" alt="técnica textil del NOA">
                            <div class="card-body">
                              <button type="button" class="btn btn-warning btn-sm">Charla y vídeos</button>
                              <button type="button" class="btn btn-outline-success" >Demostración</button>
                              <h5 class="card-title">Técnica textil del NOA</h5>
                              <p class="card-text">El tejido en telar es una de las principales técnicas textiles del NOA. Se arma una
                                urdimbre, conjunto de hilos paralelos, que se...</p>
                              <p class="card-text">
                              <?php
                  echo "<td><a class='button [btn btn-warning btn-block]'href='pages/noa.php' target='_blank'>más...</a></td></tr>"; 
                  ?>  
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col"> </div>
                     
                      </div>
                    </div>
                  
                  </div>
            
                  <!-- terminan las cards -->
                
                  <!-- aquí conocé más -->
                <div class="row">
                        <div class="col-sm-6";>
                            <img src="imagenes/arqueologico.jpeg" class="img-fluid" alt="textil arqueológico" id="textil">
                            
                        </div>
            
                        <div class="col-sm-6"; id="arq">
                          <h4>Buenos Aires - 11 y 12 Nov. 2023</h4>
                            <p><small>Textiles arqueológicos: en el sitio preincaico de Santa Rosa de Tastil, Salta, se encontraron textiles que formaban parte de ajuares funerarios. Había telas, trenzados, gorros, ondas, redes y cordelería hechos con fibras de llama y de vicuña, fechados entre los años 1336 y 1439.</small></p>
            
               <!-- <botón conocé expositores - abrir en otra pestaña> -->
                    <!-- <button type="button" class="btn btn-warning" id="nuevo"><a href="pages/expositores.php">Conocé a los expositores</a></button> -->
                           
                    <?php
                  
                  echo "<td><a class='button [btn btn-warning btn-block]'href='pages/expositores.php' target='_blank'>Conocé a los expositores</a></td></tr>"; 
?>

                    </div>
            <!-- fin conocé más -->
            
                 <!-- inicio formulario -->
            
            <div class="container">
                    <div class="row align-items-start">
            
                      <div class="col-sm-3">
                                  </div>
                      <div class="col-sm-6">
               

<!-- abrir tickets en otra pestaña -->

                        <div class="text-center">
                        <p id="talleres"></p> 
                        <h4>Talleres simultáneos con cupo limitado. <br> Adquirí tu ticket aquí:   <?php          echo "<td><a class='button button-tickets' href='tickets.php' target='_blank'>TICKETS</a></td>"?></h4>
                       
                        <br>
                        <h3>Inscripciones para dar charlas</h3>
                        </div>

                        <?php
                             //  require 'conexion.php';
                        ?>
                        <!-- agrego segú clase  -->
                        <!-- <form action="../phpintegrador1/datos1.php" method="POST"> -->
                        <form action="datos1.php" method="POST">
                        <!-- Para que funcione en WEBHOST hay que cambiar a <form action="datos1.php" method="POST">  -->
                        
                        <div class="row" id="cupo">
                        <div class="form-group row">
                          <input type="text" class="form-control" placeholder="nombre" name="nombre" required>
                        </div>
                        <div class="form-group row">
                          <input type="text" class="form-control" placeholder="apellido" name="apellido" required>
                        </div>
                        <div class="form-group row">
                          <input type="text" class="form-control"  placeholder="número de teléfono" name="telefono" required>
                        </div>
                        <div class="form-group row">
                          <input type="text" class="form-control"  placeholder="correo electrónico" name="correo" required>
                        </div>

                        <div class="row">
                          <textarea class="form-control"  name="comentario" placeholder="¿Te gustaría dar una charla? Contanos." required></textarea>
                          <p><small>Recuerda incluir un título para tu charla.</small></p>
                        </div>

                          <div class="row">
                          <input class="btn btn-success mb-1" type="submit" value="Enviar">
                          <input class="btn btn-warning " type="reset" value="Borrar">
                          </div>
                          <br><br>
                        </form>
<!-- termina agrego segú clase  -->

                         
                        
                       
                    
                        <div class="border"></div>
                      </div>
                    
                  </div>
                    <div class="col-sm-3"></div>
                  </div>
            
                  </div>
            
                    <!-- fin formulario -->
    </main>
