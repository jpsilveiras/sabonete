<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Casa do Sabonete</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('layout/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('layout/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('layout/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('layout/img/apple-touch-icon-114x114.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('layout/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('layout/fonts/font-awesome/css/font-awesome.css') }}">

    <!-- Slider
    ================================================== -->
    <link href="{{ asset('layout/css/owl.carousel.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('layout/css/owl.theme.css') }}" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('layout/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('layout/css/responsive.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="{{ asset('layout/js/modernizr.custom.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">Casa do Sabonete</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">Quem Somos</a></li>
            <li><a href="#tf-cursos" class="page-scroll">Cursos</a></li>
            <li><a href="#tf-produtos" class="page-scroll">Produtos</a></li>
            <li><a href="#tf-loja" class="page-scroll">Loja</a></li>
            <li><a href="#tf-local" class="page-scroll">Localização</a></li>
            <li><a href="#tf-contato" class="page-scroll">Fale Conosco</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1><strong>Bem-vindo a Casa do Sabonete</strong></h1>
                <p class="lead"><br><br><strong>Cursos e Sabonetes Artesanais<br>com a experiência 15 anos para melhor lhe servir.</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- Página sobre nós
    ==========================================-->
    <div id="tf-about">
        <div class="overlay">
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('layout/img/02.png') }}" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                        <br><br>
                            <h2>Algumas palavras <strong>sobre nós</strong></h2>
                            <div class="clearfix"></div>
                        </div><br>
                        <p class="intro">Somos uma empresa que atua no ramo de Cursos de Sabonetes e Perfumes, que atua a 15 anos, sempre com novidades e o cuidado na escolha dos produtos e Cursos .
                        </p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Missão</strong> - <em>Desenvolver e Promover Cursos na área de Sabonetes</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Visão</strong> - <em>Garantir a excelência no fornecimento de tecnologias e produtos da área.</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Valores</strong> - <em>A satisfação de nossos clientes através do fornecimento de experiência, confiança e qualidade.</em>
                            </li>
                            <br><br><br>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Página dos Cursos
    ==========================================-->
    <div id="tf-cursos" class="text-center">
        <div class="container">
            <div class="overlay">
                <div class="section-title center">
                    <h2>Estes são alguns de <strong>Nossos Cursos</strong></h2>
                    <div class="line"></div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="col-md-10 col-md-offset-1">
                        <em>A Casa do Sabonete desde o princípio se preocupa com a capacitação de profissionais que desejam investir no ramo artesanal ou simplesmente utilizar as técnicas como um hobby para momentos de lazer e introspecção. Para auxiliar na arte da criação, disponibilizamos diversos cursos divididos em categorias diferentes e com horários pré-agendados bastante flexíveis. Fornecemos materiais didáticos e todo o suporte necessário para os alunos começarem seu negócio. 
                        <br>Confira abaixo:.</em><br><br>
                    </div>
                </div>
                <div class="space"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 cursos">
                        <center><a><img src="{{ asset('layout/img/cursos/sabonete_basico.png') }}" class="img-responsive"></a></center>
                        <h4><strong>Sabonetes: Básico</strong></h4>
                        <p>O módulo básico do Curso de Sabonetes é a introdução para o universo de aromas e formas do ramo da higiene e da beleza. Mas não apenas isso! No curso básico o aluno conhece todos os matérias e técnicas necessárias para a confecção de lindas peças, além de aprender na prática como produzir um sabonete do zero.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 cursos">
                        <center><a><img src="{{ asset('layout/img/cursos/parafina_avancado.png') }}" class="img-responsive"></a></center>
                        <h4><strong>Sabonetes: Tratamento</strong></h4>
                        <p>Após realizar o Curso Básico de Sabonetes o aluno poderá inserir em suas criações propriedades como , esfoliação, sabonete mel, argila, entre outras, participando do Curso de Sabonetes para Tratamentos.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 service">
                        <center><a><img src="{{ asset('layout/img/cursos/sabonete_tratamento.png') }}" class="img-responsive"></a></center>
                        <h4><strong>Velas de Parafina: Avançado</strong></h4>
                        <p>Depois de aprender a confeccionar velas em parafina no curso básico, o aluno pode aperfeiçoar suas técnicas realizando o curso Avançado de Velas em Parafina, onde serão apresentadas técnicas para diversos formatos como mosaico, rocambole, dentre outras especialidades.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 service">
                        <center><a><img src="{{ asset('layout/img/cursos/perfumaria.png') }}" class="img-responsive"></a></center>
                        <h4><strong>Perfumaria</strong></h4>
                        <p>No curso de perfumaria da Casa do Sabonete o aluno aprende desde a confeccionar itens como shampoo, sabonete líquido diversas outras. Qualidades que fazem da perfumaria um ramo atrativo e muito requisitado.</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Página de Produtos
    ==========================================-->
    <div id="tf-produtos">
        <div class="container"> <!-- Container -->
            <div class="overlay">
            <div class="section-title text-center center">
                <h2>Confira alguns <strong>de nossos produtos</strong></h2>
                <div class="line"></div>
                <div class="clearfix"></div>
            </div>
            <div>
                <p>A Casa do Sabonete, pioneira em Porto Alegre, no ramo de Cursos para a fabricação de Sabonetes Artesanais, 
                dispõe de um estoque variado de todos os produtos necessários, especialmente escolhidos e selecionados para atender de formas
                profissional as suas necessidades.</p>
            </div>

            <div class="categories">

                <ul class="cat">
                    <li class="pull-left"><h4>Filtrar por tipo:</h4></li>
                    <li class="pull-right">
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">Todos</a></li>
                            <li><a href="#" data-filter=".web">Sabonete</a></li>
                            <li><a href="#" data-filter=".photography">Velas</a></li>
                            <li><a href="#" data-filter=".app" >Formas</a></li>
                            <li><a href="#" data-filter=".branding" >Perfumaria</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="produtos-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Produto 1</h4>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="{{ asset('layout/img/produtos/01.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography app">
                    <div class="produtos-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Produto 2</h4>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="{{ asset('layout/img/produtos/02.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="produtos-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Produto 3</h4>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="{{ asset('layout/img/produtos/03.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="produtos-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Produto 4</h4>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="{{ asset('layout/img/produtos/04.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="produtos-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Produto 5</h4>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="{{ asset('layout/img/produtos/05.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="produtos-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Produto 6</h4>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="{{ asset('layout/img/produtos/06.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography web">
                    <div class="produtos-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Produto 7</h4>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="{{ asset('layout/img/produtos/07.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="produtos-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Produto 8</h4>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="{{ asset('layout/img/produtos/08.jpg') }}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Loja - Acesso à loja.
    ==========================================-->
    <div id="tf-loja" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Acesso à <strong>Nossa Loja</strong> </h2>
                    <div class="line"></div>
                    <div>
                        <p>Aqui você poderá comprar nossos Produtos com toda a tranquilidade e facilidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Localização - Onde Fica?
    ==========================================-->
    <div id="tf-local" class="text-center">
        <div class="overlay">
            <div col-md-8 off-set-4 local>
                <div class="container">
                    <div class="section-title center">
                        <h2>Nossa <strong>Localização</strong> </h2>
                        <div class="line"></div>
                        <div>
                            <p>Venha conecer de perto nossos produtos e Cursos. Estaremos aguardando a sua visita e será um prazer recebe-lo.</p>
                        </div>
                    </div>
                    <div col-md-8 off-set-4 local>
                        <div class="row">
                            <center>
                                <div class="col-md-8 col-md-offset-2">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3455.155455730181!2d-51.15131464816286!3d-30.00369234252947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2067dee9923c2c38!2sCasa+do+Sabonete!5e0!3m2!1sen!2sbr!4v1493570130723" width="500" height="350" frameborder="0" style="border:1" allowfullscreen></iframe>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contato Section
    ==========================================-->
    <div id="tf-contato" class="text-center">
        <div class="container">
            <div class="overlay">
                <div class="section-title center">
                    <br><br><br>
                    <h2>Estamos aguardando o <strong>seu Contato</strong></h2>
                    <div class="line"></div>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <p>Sua solicitação ou Pedido será muito bem vinda.</p>
                </div>
                <div class="col-md-8 col-md-offset-2">

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Endereço de eMail</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Informe o seu eMail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Informe sua Senha">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mensagem</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn tf-btn btn-default">Enviar</button>
                    </form>

                </div>
                </div>
            </div>
        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>Todos os direitos © 2017 reservados a Casa do Sabonete. </p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('layout/js/jquery.1.11.1.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{ asset('layout/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('layout/js/SmoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('layout/js/jquery.isotope.js') }}"></script>

    <script src="{{ asset('layout/js/owl.carousel.js') }}"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{ asset('layout/js/main.js') }}"></script>

  </body>
</html>