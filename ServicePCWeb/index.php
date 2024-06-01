<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bootstrap 4 Template with Sidebar Menu</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/media-queries.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>
    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Sidebar -->
        <nav class="sidebar">

            <!-- close sidebar menu -->
            <div class="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="logo">
                
                <a href=""><img src="resources/img/logo.PNG" width="60" height="70"></a> <h3>Servicio Técnico</h3>
            </div>

            <ul class="list-unstyled menu-elements">
                <li class="active">
                    <a class="scroll-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li>
                    <a class="scroll-link" href="services.php"><i class="fas fa-cog"></i> Servicios </a>
                </li>
                <li>
                    <a class="scroll-link" href="acerca-de.php"><i class="fas fa-user"></i> Acerca de</a>
                </li>
                <li>
                    <a class="scroll-link" href="register.php"><i class="fas fa-pencil-alt"></i> Crear Cuenta</a>
                </li>
                <li>
                <li>
                    <a class="scroll-link" href="login.php"><i class="fas fa-pencil-alt"></i> Iniciar Sesion </a>
                </li>
                <li>
                    <a class="scroll-link" href="#section-6"><i class="fas fa-envelope"></i> Contact us</a>
                </li>
                <li>
                    <a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                        <i class="fas fa-sync"></i>Área Clientes
                    </a>
                    <ul class="collapse list-unstyled" id="otherSections">
                        <li>
                            <a class="scroll-link" href="machines.php">Ver estado máquinas</a>
                        </li>
                        <li>
                            <a class="scroll-link" href="comment.php">Deje un comentario</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="to-top">
                <a class="btn btn-primary btn-customized-3" href="#" role="button">
                    <i class="fas fa-arrow-up"></i> Top
                </a>
            </div>

            <div class="dark-light-buttons">
               <a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
               <!-- <a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
-->
            </div>

        </nav>
        <!-- End sidebar -->

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            <!-- open sidebar menu -->
            <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                <i class="fas fa-align-left"></i> <span>Menu</span>
            </a>

            <!-- ... -->

            <!-- here is the page's content (not shown here) -->

            <!-- ... -->

        </div>
        <!-- End content -->

    </div>
    <!-- End wrapper -->

    <!--CONTENT-->

    

    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="resources/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        jQuery(document).ready(function() {
 
 $('.dismiss, .overlay').on('click', function() {
     $('.sidebar').removeClass('active');
     $('.overlay').removeClass('active');
 });

 $('.open-menu').on('click', function(e) {
     e.preventDefault();
     $('.sidebar').addClass('active');
     $('.overlay').addClass('active');
     // close opened sub-menus
     $('.collapse.show').toggleClass('show');
     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
 });

 /* other code */

});

$('a.scroll-link').on('click', function(e) {
    e.preventDefault();
    scroll_to($(this), 0);
});
 
function scroll_to(clicked_link, nav_height) {
    var element_class = clicked_link.attr('href').replace('#', '.');
    var scroll_to = 0;
    if(element_class != '.top-content') {
        element_class += '-container';
        scroll_to = $(element_class).offset().top - nav_height;
    }
    if($(window).scrollTop() != scroll_to) {
        $('html, body').stop().animate({scrollTop: scroll_to}, 1000);
    }
}
$('.to-top a').on('click', function(e) {
    e.preventDefault();
    if($(window).scrollTop() != 0) {
        $('html, body').stop().animate({scrollTop: 0}, 1000);
    }
});

$('a.btn-customized-dark').on('click', function(e) {
    e.preventDefault();
    $('.sidebar').removeClass('light');
});
 
$('a.btn-customized-light').on('click', function(e) {
    e.preventDefault();
    $('.sidebar').addClass('light');
});


    </script>
</html>