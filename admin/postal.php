<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$postal = $_POST['postal'];

echo "
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Viaja a Mordor</title>

    <!-- Bootstrap Core CSS -->
    <link href='../assets/css/bootstrap.min.css' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href='../assets/css/business-casual.css' rel='stylesheet'>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
        <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
    <![endif]-->

</head>

<body>

    <div class='brand'>Viaja a Mordor</div>
    <div class='address-bar'>Mordor, Ciudad de Vacaciones | Beverly Hills, CA 90210</div>

    <!-- Navigation -->
    <nav class='navbar navbar-default' role='navigation'>
        <div class='container'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class='navbar-brand' href='index.html'>Viaja a Mordor</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav header-menu'>
                    <li>
                        <a href='../'>Home</a>
                    </li>
                    <li>
                        <a href='../modules/photos.html'>Fotos</a>
                    </li>
                    <li>
                        <a href='../modules/music.html'>Música</a>
                    </li>
                    <li>
                        <a href='../modules/videos.html'>Vídeos</a>
                    </li>
                    <li>
                        <a href='../modules/moreMordor.html'>Conoce Mordor</a>
                    </li>
                    <li>
                        <a href='../modules/contact.html'>Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class='container'>

        <div class='row'>
            <div class='box'>
                <div class='col-lg-12'>
                    <h2 class='brand-before text-center'>
                        <small>¡Enhorabuena!</small>
                    </h2>
                    <p>Su postal para <span class='variable'>".$name."</span> ha sido enviada a <span class='variable'>".$email."</span> con la siguiente imagen: </p>
                    <img src='".$postal."' style='margin-top:20px; max-width: 100%'>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-6'>
                    <h5>Contacto:</h5>
                    <ul>
                        <li><a href='mailto:mordor@mordor.com?Subject=Vacaciones' target='_top'>mordor@mordor.com</a></li>
                        <li>+34 666 666 666</li>
                    </ul>
                </div>
                <div class='col-xs-6 text-right'>
                    <img alt='Facebook' class='footer-img' src='../assets/img/fb_icon.png'>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src='../assets/js/jquery.js'></script>

    <!-- Bootstrap Core JavaScript -->
    <script src='../assets/js/bootstrap.min.js'></script>
    <script src='../assets/js/scripts.js'></script>

</body>

</html>
"
?> 