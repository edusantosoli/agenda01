<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Lista de Ramais</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-item.css" rel="stylesheet">

    </head>

    <body>

        <?php include 'include/header.php'; ?>

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <div class="col-lg-3">
                    <h1 class="my-4">Cadastros de colaboradores</h1>
                    <div class="list-group">
                        <a href="unidade.php" class="list-group-item active">Unidades</a>
                        <a href="ramais.php" class="list-group-item">Ramais</a>
                        <a href="index.php" class="list-group-item">Voltar</a>
                    </div>
                </div>
                <!-- /.col-lg-3 -->
                <div class="col-9">
                    <div class="card mt-5">
                         <!-- imagem de inicio de tela-->
                        <img class="card-img-top img-fluid" src="include/img/lista.jpg" alt="">
                        <!-- inicio formulario de cadastro de usuario UNIDADE	NOME	DEPTO	RAMAL	CEL	EMAIL     -->
                                            
                        <div class="row">
                            <div class="col-lg-8 mb-4">
                                <h3>Cadastro de Colaborador</h3>
                                <form name="sentMessage" id="contactForm" novalidate>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Nome do Colaborador</label>
                                            <input type="text" class="form-control" id="name" required data-validation-required-message="Digite Nome do Colaborador.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Telefone:</label>
                                            <input type="tel" class="form-control" id="telefone" required data-validation-required-message="Informe numero do telefone.">
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Celular:</label>
                                            <input type="tel" class="form-control" id="celular" required data-validation-required-message="Informe numero do celular.">
                                        </div>
                                    </div>              
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>Email:</label>
                                            <input type="email" class="form-control" id="email" required data-validation-required-message="Informe o e-mail">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control date" id="txtDataNascimento" placeholder="Informe data de nascimento" />
                                    <div id="gravar"></div>
                                    <!-- Botão gravar o cadastro -->
                                    <button type="submit" class="btn btn-primary">Gravar</button>
                                </form>
                            </div>
                            
                            <!-- /.card -->
                        </div>
                        <!-- /.col-lg-9 -->

                    </div>

                </div>
                <!-- /.container -->

                <?php include 'include/footer.php'; ?>

                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/popper/popper.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

                </body>

                </html>
