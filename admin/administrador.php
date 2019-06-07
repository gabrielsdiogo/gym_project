<?php
      session_start();
      if(!isset($_SESSION['code'])){
        session_destroy();
        echo "<script>location.href=\"../index.php\";</script>";
        die();
      }
    
    
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Sidebar Menu Example</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./dist/sidebar-menu.css" />
  </head>

  <body>

    <div id="cabecalho" class="cabecalho">
      <p>Administrador</p>
      <a id="pushRight" class=""
        ><i class="fa fa-dashboard"></i><span> Menu</span></a
      >
    </div>

    <section id="conteudo"></section>
    <section class="animate-menu animate-menu-left">
      <ul class="sidebar-menu">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Usuarios</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="addUsuario.php"
                ><i class="fa fa-circle-o"></i> Adicionar novo usuario</a
              >
            </li>
            <li>
              <a href="../../index2.html"
                ><i class="fa fa-circle-o"></i> Editar usuarios</a
              >
            </li>
            <li>
              <a href="usuario.html"
                ><i class="fa fa-circle-o"></i> Acessar pagina usuarios</a
              >
            </li>
          </ul>
        </li>
        
        <li>
          <a href="logoff.php">
            <i class="fa fa-share"></i> <span>Sair</span>
          </a>
        </li>
        <li>
          <a href="../../documentation/index.html"
            ><i class="fa fa-book"></i> <span>Documentation</span></a
          >
        </li>

        <li class="sidebar-header"></li>
      </ul>
    </section>

    <!--<div class="container text-center">-->
    <!--  <div class="btn-group-vertical">-->
    <!--    <button id="" class="btn btn-primary">Show/Hide Left Sidebar Menu</button>-->
    <!--    <button id="showRight" class="btn btn-primary">Show/Hide Right Sidebar Menu</button>-->
    <!--    <button id="pushLeft" class="btn btn-primary">Show/Hide Left Push Sidebar Menu</button>-->
    <!--    <button id="pushRight" class="btn btn-primary">Show/Hide Right Push Sidebar Menu</button>-->
    <!--  </div>-->
    <!--</div>-->

    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="./dist/sidebar-menu.js"></script>
    <script>
      $.sidebarMenu($(".sidebar-menu"));
      $.sidebarMenu($(".sidebar-menu-rtl"));

      $("#showLeft").click(function() {
        $(".animate-menu-left").toggleClass("animate-menu-open");
      });

      $("#showRight").click(function() {
        $(".animate-menu-right").toggleClass("animate-menu-open");
      });

      $("#pushLeft").click(function() {
        $("body").addClass("animate-menu-push");
        $("body").toggleClass("animate-menu-push-left");
        $(".animate-menu-right").toggleClass("animate-menu-open");
      });

      $("#pushRight").click(function() {
        $("body").addClass("animate-menu-push");
        $("body").toggleClass("animate-menu-push-right");
        $(".animate-menu-left").toggleClass("animate-menu-open");
      });
    </script>
  </body>
</html>
