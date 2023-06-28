<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Asesor</title>
</head>

<body>
    <form method="post">
    <br>
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-3">
                <div class="fondo">
                    <ul class="principal">
                        <li style="list-style: none;">
                            <button class="boton">Usuarios</button>
                        </li>
                        <li style="list-style: none;">
                            <button class="boton">Campaña</button>
                        </li>
                        <li style="list-style: none;">
                            <button class="boton">Equipos</button>
                        </li>
                        
                    </ul>
                </div>

            </div>


            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-4">
                        <dsiv class="card" style="width: 80%; border-color: #446d99;">
                            <div class="caja">
                                <div class="card2"><h1 class="contador">10</h1><h4 class="texto">Tiempo<br>Llamadas</h4></div>
                            </div>
                        </dsiv>
                    </div>
                    <div class="col-sm-4" style="  padding: 2px;">
                        <dsiv class="card" style="width: 80%; border-color: #446d99;">
                            <div class="caja">
                                <div class="card2"><h1 class="contador">10</h1><h4 class="texto">Tiempo<br>Llamada<br>Actual</h4></div>
                            </div>
                        </dsiv>
                    </div>
                    <div class="col-sm-4" style="  padding: 2px;">
                        <dsiv class="card" style="width: 80%; border-color: #446d99;">
                            <div class="caja">
                                <div class="card2"><h4 class="contador">Campaña 1</h4><h4 class="texto">Campañas<br>Activas</h4></div>
                            </div>  
                        </dsiv>
                    </div>
                </div>
                <br>
                <div class="row cajaP">
                    <div class="col-sm-3">
                        <div class="principal1">
                            <div class="datos">
                                <form action="">
                                    <div class="input-group mb-3">
                                        <input type="text" name="telCliente" placeholder="Telefono" ><br>
                                      </div>
                                      <div class="input-group mb-3">
                                        <input type="text" name="userCliente" placeholder="Usuario" ><br>
                                        <input type="submit" name="register">
                                    </div>
                                      <div class="buscar">
                                        <button type="submit" name="crear">Crear Cliente</button>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row caja1">
                            
                            <div class="col-sm-2">
                                <button class="btn btn-light boton1" style="border: solid #5f5f5f 0.10rem;">Basico</button>
                            </div>

                            <div class="col-sm-2">
                                <button class="btn btn-light boton1" style="border: solid #5f5f5f 0.10rem;">Avanzado</button>
                            </div>

                            <div class="col-sm-8" style="text-align: right;">
                                <button class="boton1">Nuevo</button>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-body principal2">
                                <form action="">
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    </form>
    <?php
    include("../controllers/registrar.php"); 
    ?>
</body>


</html>