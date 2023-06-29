<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Registrar usuario</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <h3 style="margin-left: 100px;">Ingrese los datos</h3>
        </div>
      </nav>
    
    <div class="container-fluid">

        <div class="row" style="border: 2px solid #eee; border-radius: 10px; margin: 10px; padding: 20px;">
            <form action="" method="POST">

                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre:</label>
                  <input type="text"
                    class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre:">
                </div>
        
                <div class="mb-3">
                  <label for="password" class="form-label">Password:</label>
                  <input type="password"
                    class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Password:">
                </div>
        
                <div class="mb-3">
                  <label for="apellido" class="form-label">Apellido:</label>
                  <input type="text"
                    class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido:">
                </div>
        
                <div class="mb-3">
                  <label for="direccion" class="form-label">Dirección:</label>
                  <input type="text"
                    class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Dirección:">
                </div>
        
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-primary" href="admin.html" role="button">Cancelar</a>
        
                </form>
        </div>

    </div>

  </body>
</html>