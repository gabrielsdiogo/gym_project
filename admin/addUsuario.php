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
    <?php
        session_start();
        $_SESSION['code']=true;
        $mysqli = new mysqli('db-academia.mysql.uhserver.com','alphadir','Alphagsd1316@','bd_academia') or die(mysqli_error($mysqli));
        $result=$mysqli->query("SELECT * FROM alunos") or die($mysqli->error);
        
        if(isset($_POST['txtUser'])){
          $user=$_POST['txtUser'];
          $pwd=$_POST['txtSenha'];
          $email=$_POST['txtEmail'];
          $id=$_POST['id'];
          $situ=$_POST['radiobt'];
          

          $mysqli->query("INSERT INTO usuario_web(usuario,senha,email,situacao,idaluno) VALUES 
          ('$user','$pwd','$email','$situ','$id')") or die($mysqli->error);

          $mysqli->query("UPDATE alunos SET user_web='1' WHERE IDaluno = $id ") or die($mysqli->error);
          header("refresh: 0");
        }

        
        
    
        
    
    ?>
    <div id="cabecalho" class="cabecalho">
      <p>Adicionar Usuarios</p>
      <a id="pushRight" class=""
        ><i class="fa fa-dashboard"></i><span> Menu</span></a
      >
    </div>

    <section id="conteudo">
      <div id="conteudo" class="conteudo">
        <div class="header">
            <h3>Alunos</h3>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>nome</th>
              <th>CPF</th>
              <th colspan="2" class="bot">Incluir usuario</th>
            </tr>
          </thead>
          <?php
                while ($row=$result->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row['nome']?></td>
              <td><?php echo $row['cpf']; ?></td>
              <td><?php echo $row['cpf']; ?></td>
              <td><?php echo $row['cpf']; ?></td>
              <td><?php echo $row['cpf']; ?></td>
              <td><?php echo $row['cpf']; ?></td>
              
              <td class="bot">
                  <?php
                      
                      if($row['user_web']==1){
                        echo "<a style='color:blue; text-decoration:none; cursor:default;'>Adicionado</a>";
                      }else{
                        
                        
                        echo "<a href='processa.php?id=".$row['IDaluno']."&name=".$row['nome']."' class='btn btn-info'>Adicionar</a>";
                      }
                  
                  
                  ?>
              
                
              </td>
            </tr>
          <?php endwhile ?>
        </table>
      </div>

      
    </section>

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
              <a href="#"
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
          <a href="#">
            <i class="fa fa-share"></i> <span>Sair</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="logoff.php"><i class="fa fa-circle-o"></i> Sair do Portal</a>
            </li>
           
            <li>
              <a href="administrador.php"><i class="fa fa-circle-o"></i> Menu Principal</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="../../documentation/index.html"
            ><i class="fa fa-book"></i> <span>Documentation</span></a
          >
        </li>

        <li class="sidebar-header"></li>
      </ul>
    </section>

    <section class="animate-menu animate-menu-right">
      <ul class="sidebar-menu">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="../../index.html"
                ><i class="fa fa-circle-o"></i> Dashboard v1</a
              >
            </li>
            <li>
              <a href="../../index2.html"
                ><i class="fa fa-circle-o"></i> Dashboard v2</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="label label-primary pull-right">4</span>
          </a>
          <ul class="sidebar-submenu" style="display: none;">
            <li>
              <a href="top-nav.html"
                ><i class="fa fa-circle-o"></i> Top Navigation</a
              >
            </li>
            <li>
              <a href="boxed.html"><i class="fa fa-circle-o"></i> Boxed</a>
            </li>
            <li>
              <a href="fixed.html"><i class="fa fa-circle-o"></i> Fixed</a>
            </li>
            <li class="">
              <a href="collapsed-sidebar.html"
                ><i class="fa fa-circle-o"></i> Collapsed Sidebar</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <small class="label pull-right label-info">new</small>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="../charts/chartjs.html"
                ><i class="fa fa-circle-o"></i> ChartJS</a
              >
            </li>
            <li>
              <a href="../charts/morris.html"
                ><i class="fa fa-circle-o"></i> Morris</a
              >
            </li>
            <li>
              <a href="../charts/flot.html"
                ><i class="fa fa-circle-o"></i> Flot</a
              >
            </li>
            <li>
              <a href="../charts/inline.html"
                ><i class="fa fa-circle-o"></i> Inline charts</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="../UI/general.html"
                ><i class="fa fa-circle-o"></i> General</a
              >
            </li>
            <li>
              <a href="../UI/icons.html"
                ><i class="fa fa-circle-o"></i> Icons</a
              >
            </li>
            <li>
              <a href="../UI/buttons.html"
                ><i class="fa fa-circle-o"></i> Buttons</a
              >
            </li>
            <li>
              <a href="../UI/sliders.html"
                ><i class="fa fa-circle-o"></i> Sliders</a
              >
            </li>
            <li>
              <a href="../UI/timeline.html"
                ><i class="fa fa-circle-o"></i> Timeline</a
              >
            </li>
            <li>
              <a href="../UI/modals.html"
                ><i class="fa fa-circle-o"></i> Modals</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="../forms/general.html"
                ><i class="fa fa-circle-o"></i> General Elements</a
              >
            </li>
            <li>
              <a href="../forms/advanced.html"
                ><i class="fa fa-circle-o"></i> Advanced Elements</a
              >
            </li>
            <li>
              <a href="../forms/editors.html"
                ><i class="fa fa-circle-o"></i> Editors</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="../tables/simple.html"
                ><i class="fa fa-circle-o"></i> Simple tables</a
              >
            </li>
            <li>
              <a href="../tables/data.html"
                ><i class="fa fa-circle-o"></i> Data tables</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="label pull-right label-danger">3</small>
          </a>
        </li>
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="label pull-right label-warning">12</small>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="../examples/invoice.html"
                ><i class="fa fa-circle-o"></i> Invoice</a
              >
            </li>
            <li>
              <a href="../examples/profile.html"
                ><i class="fa fa-circle-o"></i> Profile</a
              >
            </li>
            <li>
              <a href="../examples/login.html"
                ><i class="fa fa-circle-o"></i> Login</a
              >
            </li>
            <li>
              <a href="../examples/register.html"
                ><i class="fa fa-circle-o"></i> Register</a
              >
            </li>
            <li>
              <a href="../examples/lockscreen.html"
                ><i class="fa fa-circle-o"></i> Lockscreen</a
              >
            </li>
            <li>
              <a href="../examples/404.html"
                ><i class="fa fa-circle-o"></i> 404 Error</a
              >
            </li>
            <li>
              <a href="../examples/500.html"
                ><i class="fa fa-circle-o"></i> 500 Error</a
              >
            </li>
            <li>
              <a href="../examples/blank.html"
                ><i class="fa fa-circle-o"></i> Blank Page</a
              >
            </li>
            <li>
              <a href="../examples/pace.html"
                ><i class="fa fa-circle-o"></i> Pace Page</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One</a>
            </li>
            <li>
              <a href="#"
                ><i class="fa fa-circle-o"></i> Level One
                <i class="fa fa-angle-left pull-right"></i
              ></a>
              <ul class="sidebar-submenu">
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two</a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-circle-o"></i> Level Two
                    <i class="fa fa-angle-left pull-right"></i
                  ></a>
                  <ul class="sidebar-submenu">
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Three</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Three</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="../../documentation/index.html"
            ><i class="fa fa-book"></i> <span>Documentation</span></a
          >
        </li>
        <li class="sidebar-header">LABELS</li>

        <li>
          <a href="#"
            ><i class="fa fa-circle-o text-red"></i> <span>Avisos</span></a
          >
        </li>
        <li>
          <a href="#"
            ><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a
          >
        </li>
        <li>
          <a href="#"
            ><i class="fa fa-circle-o text-aqua"></i>
            <span>Information</span></a
          >
        </li>
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
    <script src="./dist/button-animated.js"></script>

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
