<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISU</title>
  <!--Bootstrap CDN -->
  <link rel="stylesheet" href="/CSS/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body style="
          background-image: url('img/bg.png');
          background-position: center center;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          background-color: #6d6161;
">
  <br /><br />

  <div class="text-center">
    <img src="img/logo-20.png" width="400" height="136" alt="logo">
  </div>
  <br /><br />


  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>

      <div class="col-sm-6">

        <form action="login.php" method="POST">
          <div class="form-group row">
            <label for="exampleInputEmail1" class="col-md-2 col-form-label">Usuario</label>
            <div class="col-md-4">
              <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Usuario">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputPassword1" class="col-md-2 col-form-label">Contraseña</label>
            <div class="col-md-4">
              <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md"><button type="submit" class="btn btn-primary">Ingresar</button></div>

          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
