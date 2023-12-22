<?php

$versao = "1.0";

require "pages/config.php";
require "pages/funcs.php";
session_start();
if(!$_SESSION['admin']){
  header('location:pages/admin/login.html');
}
//$senha = password_hash('setor_ti_informatica',PASSWORD_DEFAULT);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Controle de Estoque</title>
    <link rel="shortcut icon" type="imagex/png" href="./bootstrap/printer_1041985.ico">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="index.php" class="logo"><b><img src="dist/img/logosm.png" alt="acontece"></b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
            
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="./dist/img/avatar5.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo ucfirst($_SESSION['nome']); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="./dist/img/avatar5.png" class="img-circle" alt="User Image" />
                    <p>
                    <?php echo ucfirst($_SESSION['nome']);?>
                      <small></small>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                   
                    <div class="pull-right">
                      <a href="pages/admin/sair.php" class="btn btn-default btn-flat">Sair</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="./dist/img/avatar5.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo ucfirst($_SESSION['nome']); ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>HOME</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i> HOME</a></li>
               
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Produtos</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/produtos/produtos.php"><i class="fa fa-circle-o"></i> Produtos</a></li>
                <li><a href="pages/produtos/add_produto.php"><i class="fa fa-circle-o"></i>Cadastrar produto</a></li>
                <li><a href="pages/produtos/add_categoria.php"><i class="fa fa-circle-o"></i>Adicionar categoria</a></li>
                <li><a href="pages/estoque/saida.php"><i class="fa fa-circle-o"></i>Saida de produto</a></li>
                <li><a href="pages/estoque/entrada.php"><i class="fa fa-circle-o"></i>Entrada de produto</a></li>
              </ul>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Estoque</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/estoque/produtos.php"><i class="fa fa-circle-o"></i> Produtos</a></li>
              </ul>
            </li>
           
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Relatórios</span>
                <i class="fa fa-angle-left pull-right"></i>
                <span class="label label-primary pull-right"><?php echo relatorio();?></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/relatorio/entradas.php"><i class="fa fa-circle-o"></i>Entrada de produtos <span class="label label-primary pull-right"><?php echo entradas();?></span></a></li>
                <li><a href="pages/relatorio/saidas.php"><i class="fa fa-circle-o"></i>Saida de produtos <span class="label label-primary pull-right"><?php echo saidas();?></span></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Sobre</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/sobre/sobre.php"><i class="fa fa-circle-o"></i>Sobre o sistema</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>



      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Home
            <small>Painel de controle</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo produtos();?></h3>
                  <p>Produtos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="pages/produtos/produtos.php" class="small-box-footer">Mais infomações<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo entradas();?><sup style="font-size: 20px"></sup></h3>
                  <p>Entradas</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href="pages/relatorio/entradas.php" class="small-box-footer">Mais infomações <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo saidas();?></h3>
                  <p>Saidas</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href="pages/relatorio/saidas.php" class="small-box-footer">Mais infomações <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Estoque</h3>
                  <p><br></p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="pages/estoque/produtos.php" class="small-box-footer">Mais infomações<i class="fa fa-arrow-circle-right"></i></a>
              </div>
              <br>
            <br>
            </div><!-- ./col -->
            
      <!-- Sistema de minimo de pedidos -->
        <div class="container">
          <h1>
            Produtos com estoque em baixa
            <a href="gera_pedido.php"><button class="btn btn-primary"  target="blank">Gerar Pedido</button></a>
          </h1>
          

          <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID produto</th>
                        <th>Produto</th>
                        <th>Estoque atual</th>
                        <th>Quantidade Mínima</th>
                        <th>Quantia ideal</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    <?php
                      $declara = "SELECT * FROM estoque";
                      $retornaSQL = $conexao->prepare($declara);
                      $retornaSQL->execute();
                      $row = $retornaSQL->fetchAll();

                      foreach($row as $valor)
                      {
                        $minimo = $valor['minimo'];
                        $quantia = $valor['quantidade'];
                        if($quantia < $minimo)
                        {
                          echo "<tr><td>$valor[id_produto] </td>";
                          echo "<td>$valor[produto] </td>";
                          echo "<td>$valor[quantidade] </td>";
                          echo "<td>$valor[minimo]</td>";
                          echo "<td>$valor[ideal] </td></tr>";
                          
                        }
                      }
                        
                    ?>
                      
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


        <!-- Main content -->
        </div>
      <!-- Fim Sistema pedido minimo -->

    <!-- Sistema de saida na HOME -->
            <div class="container">
        <!-- Content Header (Page header) -->
          <h1>
            Saida de produtos
          </h1>

        <!-- Main content -->
              <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Codigo</th>
                        <th>Produto</th>
                        <th>Categoria</th>
                        <th>Descrição de saida</th>
                        <th>Quantidade</th>
                        <th>Data da saida</th>
                        <th>Hora</th>
                        <th>ação</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    <?php
                    require "pages/config.php";
                    
                    $sql = "SELECT * FROM saida ORDER BY id DESC LIMIT 5";
                    $declaracaoSql = $conexao->prepare($sql);
                    $declaracaoSql->execute();
                    $produtos = $declaracaoSql->fetchAll();

                  
                    foreach($produtos as $prod){
                        echo "<tr><td>$prod[id] </td>";
                        echo "<td>$prod[produto] </td>";
                        echo "<td>$prod[categoria] </td>";
                        echo "<td>$prod[descricao] </td>";
                        echo "<td>$prod[quantidade] </td>";
                        echo "<td>$prod[data_saida] </td>";
                        echo "<td>$prod[hora_saida] </td>";

                    ?>
   

                      <td><a href="./pages/relatorio/editar_saida.php?id=<?php echo $prod['id']?>" >
                          <i class="fa fa-edit"></i>Editar</a>
                          <a href="./pages/relatorio/deletar_entrada&_saida.php?id=saida,<?php echo $prod['id']?>" >
                          <i class="fa fa-times"></i>Apagar</a>
                      </td>
                      </tr>
                       <?php }?>
                      
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
      <!-- Fim Sistema de saida na HOME  -->

          </div><!-- /.row -->
          <!-- Main row -->
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versão</b> <?php echo $versao;?> 
        </div>
        <strong>Copyright &copy; <?php echo date('Y')?></a>.</strong> Todos os direitos reservados.
        <strong>Devs &copy; Guilherme Josepette & Murilo Martins</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>


    
  </body>
</html>