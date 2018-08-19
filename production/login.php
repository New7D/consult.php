<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Consult Network</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Área do Parceiro</h1>
              <div>
                <input type="email" class="form-control" placeholder="E-mail" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="consult-panel.php">Entrar</a>
                <a class="reset_pass" href="#">Esqueceu sua senha?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Novo no site?
                  <a href="#signup" class="to_register"> Crie sua conta e seja um parceiro. </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Consult Network</h1>
                  <p>©2018 Todos os Direitos Reservados. Consult Network - Privacidade e Termos</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <!-- AREA DE REGISTRO -->
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="php/registrar_parceiro.php" id="formCadastro" name="formcadastro">
              <h1>Solicitar Parceria</h1>
              <div>
                <input id="nome_sobrenome" type="text" class="form-control" placeholder="Nome e Sobrenome" required="" name="nome_sobrenome"/>
              </div>
              <div>
                <input id="email_parceiro" type="email" class="form-control" placeholder="E-mail" required="" name="email_parceiro"/>
              </div>
              <div>
                <input id="senha_parceiro" type="password" class="form-control" placeholder="Senha" required="" name="senha_parceiro"/>
              </div>
                <div>
                    <input id="parceiro_redesocial" type="url" class="form-control" placeholder="Informe sua maior rede social" required="" name="parceiro_redesocial"/>
                </div>
              <div>
                <button type="submit" class="btn btn-default form-control">Registrar-se</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Já é um membro ?
                  <a href="#signin" class="to_register"> Logar-se </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Consult Network</h1>
                  <p>©2018 Todos os Direitos Reservados. Consult Network - Privacidade e Termos</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
