<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="shortcut icon" href="../resources/images/EagSKyL6nmIT5erqWDgzbASr0mrytrYTcFlevFtMJegeA8qwxTpQPhGOr3gchU.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Iniciar Sesion | Ubuntu</title>
</head>
<body>
<nav class="menu">
  <ul>
    <li><a href="../index.php">Inicio</a></li>
    <li><a href="../educational/courses/">Cursos</a></li>
    <li><a href="../educational/workshops/">Talleres</a></li>
    <li><a href="../institutional/accomaniment/">Acompañamientos</a></li>
    <li><a href="../institutional/consultancy/">Consultoria</a></li>
    <li><a href="../platform/register.php">Crear Cuenta</a></li>
    <li><a href="../platform/login.php">Ingresar</a></li>
  </ul>
</nav>

<!--LOGIN FORM-->

<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Iniciar Sesion</h2>

              <form action="">

               
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="mail" class="form-control form-control-lg" />
                  <label class="form-label" for="mail">Mail</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Contraseña</label>
                </div>

                
                <div class="d-flex justify-content-center">
                  <button  type="button" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-success">Iniciar Sesion</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Olvido su contraseña? <a href="#!"
                    class="fw-bold text-body"><u>Recuperar contraseña</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="bg-dark text-white text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Sobre nosotros</h5>
                    <p>
                        Información sobre la empresa, su misión, visión y valores. 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Enlaces útiles</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-white">Alcances</a></li>
                        <li><a href="#" class="text-white">Precios</a></li>
                        <li><a href="#" class="text-white">Trabaja con nosotros</a></li>
                       <!-- <li><a href="#" class="text-white"></a></li> -->
                     </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contacto</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-white">Correo: info@empresa.com</a></li>
                        <li><a href="#" class="text-white">Teléfono: +123 456 7890</a></li>
                        <li><a href="#" class="text-white">Dirección: Calle Falsa 123</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            &copy; 2024 Nombre de la Empresa. Todos los derechos reservados.
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="text/javascript" src="../resources/js/script.js"></script>
</html>