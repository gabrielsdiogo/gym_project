<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Portal do cliente</title>
    <meta
      name="description"
      content="particles.js is a lightweight JavaScript library for creating particles."
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <link rel="stylesheet" media="screen" href="css/style.css" />
  </head>

  <body>
    <?php
      session_start();
      if(isset($_SESSION['code'])){
        echo "<script>location.href=\"../../../admin/administrador.php\";</script>";
      }

    
    
    ?>
    <div class="container_inner__login">

      <div class="login">
        <div class="login_profile">
          <img class="logo" src="image/logoSite.png" />
        </div>
        <div class="login_desc">
          <h3>
            Portal
            <span>Cliente</span>
          </h3>
        </div>
        <div class="login_inputs">
          <form action="verificaLogin.php" method="POST">
            <input type="text" placeholder="E-mail" class="marg" name="txtLo" />
            <input
              placeholder="Senha"
              required="required"
              type="password"
              name="txtSe"
            />
            <input type="submit" value="Entrar" />
          </form>
          <div class="forgotten">
            <a href="#">Esqueceu a senha ?</a>
          </div>
          <div class="login_check">
            <br />Logging in to your client area <br />
            <span>please wait</span>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/login.js"></script>
    <!-- particles.js container -->
    <div id="particles-js"></div>

    <!-- scripts -->
    <script src="../particles.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
