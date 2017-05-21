<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Casa do Sabonete</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="jquery.maskedinput.min.js"></script>
        <script>
            $(document).ready(function(){
            $('#data').mask('99/99/9999', {placeholder: "(__/__/____)"}); //Máscara para Data
            $('#telefone').mask('(99) 9999-9999?9', {placeholder: "(__) ____-____?_)"}); //Máscara para telefone

            $('#cnpj').mask('99.999.999/9999-99', {placeholder: "(__.___.___/____-__)"}); //Máscara para CNPJ
            $('#cpf').mask('999.999.999-99', {placeholder: "(___.___.___-__)"}); //Máscara para CPF
            $('#cep').mask('99999-999'); //MÃ¡scara para CEP

            $("#cnpj_cpf").mask({mask: ['999.999.999-99', '99.999.999/9999-99'], keepStatic: true,  showMaskOnHover: false});
            })
        </script>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('adminLTE/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/skins/_all-skins.min.css') }}">

    <!-- stylo Painel Controle -->
    <link rel="stylesheet" href="{{ asset('adminLTE/local.css') }}">

    <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon-admin.ico') }}" type="image/x-icon"/>
    <link rel="icon" href="{{ asset('images/favicon-admin.ico') }}" type="image/x-icon"/>
    <style type="text/css">
        img {
            display: block;
            background-color: #99ccff;
            margin: 0 auto;
            border-radius: 2px;
        }
        .panelcapa {
            display: block;
            background-color: #99ccff;
            margin: 0 auto;
            border-radius: 15px;
            text-align: center;
        }

        .titulo {
            text-align: center;
            font-size: 18px; 
            font-weight: bold ;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    >

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{ asset("admin") }}" class="logo">
            <span class="logo-lg"><b>Painel de Controle</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <!-- Right Side Of Navbar -->
                <div>
                    <ul class="nav navbar-nav navbart">
                        <!-- Authentication Links -->
                    <!--@if (Auth::guest())-->
                        <li>
                            <a href="{{ url('/register') }}">Registrar Usuário</a>
                        </li>
                    <!--@else-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                                </li>
                            </ul>
                        </li>
                    <!--@endif-->
                        <li></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- ======================= COLUNA ESQUERDA ======================== -->
    <aside class="main-sidebar">
        <section class="sidebar">
            <li class="header"></li>
            <div>
                <li class="header">
                    <div class="logo">
                        <a href="{{ url("/wellcome") }}">
                            <img src="{{ asset("images/logo-admin.jpg") }}" width="65%"; height:auto; alt="Logo
                            ZigWeb">
                        </a>
                    </div>
                </li>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul>
                <li>.</li>
                <li>
                    <a href="{{ url('clientes') }}">
                        <i class="fa fa-circle-o text-green"></i>
                        <span>Gestão de Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/planos') }}">
                        <i class="fa fa-circle-o text-yellow"></i>
                        <span>Gestão de Categorias</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/contratos') }}">
                        <i class="fa fa-circle-o text-blue"></i>
                        <span>Gestão de Produtos</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/faturamento') }}">
                        <i class="fa fa-circle-o text-aqua"></i>
                        <span>Gestão de (Faturamento)</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/cobranca') }}">
                        <i class="fa fa-circle-o text-red"></i>
                        <span>Gestão de (Cobrança)</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- ====================== CONTEÚDO ========================= -->

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="box-body">
            <!-- CONTEÚDO DA SESSÃO ADMIN -->
            @yield('content')
            <!-- CONTEÚDO DA SESSÃO ADMIN -->
            </div>
        </section>
        <!-- End content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            JPSystems
        </div>
        <strong>Copyright &copy;2017 <a href="http://www.casadosabonete.com.br">Casa do Sabonete</a>.</strong> Todos os
        direitos reservados.
    </footer>
    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <!--<div class="control-sidebar-bg"></div>-->
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="{{ asset('/adminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('/adminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('/adminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/adminLTE/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminLTE/dist/js/app.min.js') }}"></script>
<script src="components/wysihtml5x/dist/wysihtml5x-toolbar.min.js"></script>
<script src="components/jquery/dist/jquery.min.js"></script>
<script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="components/handlebars/handlebars.runtime.min.js"></script>
<script src="dist/bootstrap3-wysihtml5.min.js"></script>

<script type="text/javascript">
         CKEDITOR.replace( 'messageArea',
         {
          customConfig : 'config.js',
          toolbar : 'simple'
          })
</script>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>

