<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="favicon.ico">
    <LINK rel="stylesheet" type="text/css" href="public/bundles/css/screen.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    {{ Asset::styles(); }}
    {{ Asset::container('bootstrapper')->styles(); }}

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Pagina Inicial</title>


    <meta http-equiv="imagetoolbar" content="no">
    <meta name="description" content="">
    <link href="css/css" rel="stylesheet" type="text/css">
    <link href="css/screen.css" media="screen,projection,tv" rel="stylesheet" type="text/css">
    <link href="css/print.css" media="print" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=1200">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link href="css/widget.css" rel="stylesheet" type="text/css"><style type="text/css">#twtr-widget-1 .twtr-avatar { display: none; } #twtr-widget-1 .twtr-tweet-text { margin-left: 0; }</style><style type="text/css">#twtr-widget-1 .twtr-doc,                      #twtr-widget-1 .twtr-hd a,                      #twtr-widget-1 h3,                      #twtr-widget-1 h4 {            background-color: #0a4f78 !important;            color: #ffffff !important;          }          #twtr-widget-1 .twtr-tweet a {            color: #FFFFFF !important;          }          #twtr-widget-1 .twtr-bd, #twtr-widget-1 .twtr-timeline i a,           #twtr-widget-1 .twtr-bd p {            color: #ffffff !important;          }          #twtr-widget-1 .twtr-new-results,           #twtr-widget-1 .twtr-results-inner,           #twtr-widget-1 .twtr-timeline {            background: #0a4f78 !important;          }</style></head>
<body id="page-home" data-twttr-rendered="true">
    <div id="page">
        <div class="navbar">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div id="header" class="nav-collapse collapse">
                <a href="#principal"><img src="img/logo.png" alt="Userscape"></a>

                <ul class="nav">
                    <li class="current"><a href="#principal">Principal</a></li>
                    <li><a href="#sobrenos">Sobre Nós</a></li>
                    <li><a href="#solucoes">Soluções</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
        <div>
            <br><br><br><br>
                <pre>
                    Body - Matheus
                    .
                    .
                    .
                    Conteúdo - Maia
                    .
                    .
                    .
                    Body - Matheus
                </pre>
            <br>
        </div>
        @include('layouts/rodape')
</div> <!--id = page-->
{{ Asset::container('bootstrapper')->scripts(); }}

</body>
</html>