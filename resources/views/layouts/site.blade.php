<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <script>
        const url = '{{Request::url()}}';
        console.log(url); 
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="Matias Fernandez - Sr Business Executive con 25 años de aprendizajes en las áreas de Negocio">
    <meta name="author" content="Matias Fernadez">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Matías Fernández</title>

    <!--Sweet allert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{env('ASSETS_URL')}}css/bootstrap-custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- STYLES -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{env('ASSETS_URL')}}css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="{{env('ASSETS_URL')}}css/dark.css" />
    <link rel="stylesheet" type="text/css" href="{{env('ASSETS_URL')}}css/style.css" />
    <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
    <!-- /STYLES -->

    <!--Sweet allert-->
    <link rel="stylesheet" href="{{env('ASSETS_URL')}}css/sweetalert-custom.css">
    <!--Axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <meta name="google-site-verification" content="22zBlTYJC5WeQj4npX_upuhhby24GyMU5MR8XiLTS70" />

</head>

<body> 

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
	
    @yield('content')
	
    <!-- SCRIPTS -->
    <script src="{{env('ASSETS_URL')}}js/lib/jquery.js"></script>
    <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
    <script src="{{env('ASSETS_URL')}}js/lib/plugins.js"></script>
    <script src="{{env('ASSETS_URL')}}js/lib/init.js"></script>
    <script src="{{env('ASSETS_URL')}}js/solicitarCV.js"></script>
    <!-- /SCRIPTS -->

</body>
</html>
