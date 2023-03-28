<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>
  <br>
  <center>
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h1 class="animate__animated animate__backInLeft">Registro</h1>
  <form action="increg.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="usuar" >
    <div id="emailHelp" class="form-text">Favor de ingresar su nombre completo</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="contra">
  </div>
  <button type="submit" value="registrar">Registrar</button>
</form>
<a href="index.php">Inicio Seción</a>
  </div>
</div>
</center>

</body>
</html>