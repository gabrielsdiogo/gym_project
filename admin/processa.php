<?php
session_start();
if(isset($_GET['id'])){

    $id=$_GET['id'];
    $name=$_GET['name'];
    
    //ao cadastrar novo usuario web, colocar usar esse id para alterar o campo user_web na tabela alunos  
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
    <?php
        $mysqli = new mysqli('db-academia.mysql.uhserver.com','alphadir','Alphagsd1316@','bd_academia') or die(mysqli_error($mysqli));
        $result=$mysqli->query("SELECT * FROM alunos") or die($mysqli->error);
        
    
        
    
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

     

      <div class="tabela-add anime">
          <div class="header">
            <h3>Cadastro Usuario</h3>
          </div>
        <form class="frmuseradd" id="form1" action="addUsuario.php" method="post" autocomplete="off">          
            <label for="inp" class="inp">
              <input type="text" name="txtUser" id="inp" placeholder="&nbsp;" value=""/>
              <span class="labe">Nome de usuario:</span>
              <span class="border"></span>
            </label>
            <br />
            <br />
            <label for="inp" class="inp">
              <input type="text" name="txtSenha" id="inp" placeholder="&nbsp;" />
              <span class="labe">Senha:</span>
              <span class="border"></span>
            </label>
            <br />
            <br />
            <label for="inp" class="inp">
              <input type="text" name="txtEmail" id="inp" placeholder="&nbsp;" />
              <span class="labe">E-mail:</span>
              <span class="border"></span>
            </label>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="hidden" name="radiobt" id="radiobtn" value="">
            <br />
            <input type="button" value="Salvar" class="btnn third" onClick="submitForms()">
            
        </form>
        <div class="selecionado">
            <p>Aluno selecionado: <br><strong> <?php echo $name;?></strong> </p>
            <p>Codigo aluno: <strong><?php echo $id;?></strong></p>
        </div>
        <form class="form" id="form2" action="addUsuario.php" method="post">
            <h3>Situação:</h3>
            <div class="inputGroup">
              <input id="radio1" name="radio" type="radio" value="ativo"/>
              <label for="radio1">Ativo</label>
            </div>
            <div class="inputGroup">
              <input id="radio2" name="radio" type="radio" value="desativo"/>
              <label for="radio2">Desativo</label>
            </div>
        </form>
        

      
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

      submitForms = function(){
        var radio1= document.getElementById("radio1").checked;
        var radio2= document.getElementById("radio2").checked;
                
          if (radio1==true) {
            var inp = document.getElementById("radiobtn").value = "1";
          }else if (radio2==true) {
            var inp = document.getElementById("radiobtn").value = "0";

          }
          document.getElementById("form1").submit();
          
      }
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
