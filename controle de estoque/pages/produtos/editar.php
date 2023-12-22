<?php
session_start();
if(!$_SESSION['admin']){
  header('location:../admin/login.html');
}
require "../cabecalho/aside.php";
require "../config.php";

$idescolhido = $_GET['id'];
$sql = "SELECT * FROM produto WHERE id_produto = $idescolhido ";

$declaracaoSql = $conexao->prepare($sql);
$declaracaoSql->execute();
$dados = $declaracaoSql->fetch();

$sql2 = "SELECT * FROM estoque WHERE id_produto = $idescolhido";
$declara = $conexao->prepare($sql2);
$declara->execute();
$estoque = $declara->fetch();
      

?>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Editar Produto
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Cadastro de produto</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
              

                <!-- form start -->
                <form role="form" method="POST" action="salvar.php?id=<?php echo $idescolhido;?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nome">Nome do produto</label>
                      <input type="text" name="produto" class="form-control" placeholder="nome do produto" value="<?php echo $dados['nome'];?> "><br>

                      <label>Categoria</label>
                        <select name="categoria" class="form-control">
                        <?php
                        require "../config.php";
                        $sql = "select * from categoria";

                        $declaracaoSql = $conexao->prepare($sql);
                        $declaracaoSql->execute();
                        $produtos = $declaracaoSql->fetchAll();
      
                        foreach($produtos as $categoria){
                           echo "<option>$categoria[nome_categoria]</option>";
                       }
                     ?>
                      </select><br>

                      <div class="container">
                        <div class="row">
                            <label for="saida">Quantia mínima em estoque</label><br>
                            <input type="number" name="minimo" class="col-xs-1" value="<?php echo $estoque['minimo']; ?>"><br><br><br>

                            <label for="saida">Quantia desejável</label><br>
                            <input type="number" name="ideal" class="col-xs-1" value="<?php echo $estoque['ideal']; ?>"><br><br><br>
                        </div>
                      </div>
                    </div> 
                  </div><!-- /.form group -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Editar</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
     <?php
      require "../cabecalho/footer.php";
      ?>
      