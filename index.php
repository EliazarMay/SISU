<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--- Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="CSS/login.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">

      <img src="img/logotipo.jpg" id="icon" alt="logo">
    </div>

    <!-- Login Form -->
    <form action="login.php" method="POST">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Usuario" pattern="[A-Za-z]{1,15}">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña" pattern="[A-Za-z0-9]{1-15}">
      <input type="submit"  value="Iniciar Sesión">
    </form>

  </div>
</div>
