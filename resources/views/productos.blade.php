<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>TERMODINAMICA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="css/alain.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-red navbar-dark">
        <div class="wrapper">

        </div>
        <div class="container-fluid all-show">
            <a class="navbar-brand" href="{{route('welcome')}}"><img src="img/logo.png" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('sobrenosotros')}}">Sobre Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('productos')}}">Productos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('division')}}">Division Industrial</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contacto')}}">Contáctenos</a>
                    </li>

                    <li class="nav-item">

                    </li>


                </ul>
                <div class="d-flex flex-column sim">

                    <span>GRUPO 3 LOS SISTEMATICOS</span>
                    

                </div>
            </div>
        </div>
    </nav>

    <main class="container">

        <div class="d-md-flex w-100 my-md-3 ps-md-3">
            <div class="container text-center">

                <div class="row">
                    <div class="col-md-3">
                        <h5>CATEGORÍAS</h5>
                        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Línea Agrícola
                                    </button>
                                </h5>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush text-start">
                                            <li class="list-group-item">Desmalezadoras</li>
                                            <li class="list-group-item">Motofumigadoras</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        Línea Forestal
                                    </button>
                                </h5>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush text-start">
                                            <li class="list-group-item">Motosierras</li>
                                            <li class="list-group-item">Podadoras de altura</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        Línea Hogar y Jardín
                                    </button>
                                </h5>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush text-start">
                                            <li class="list-group-item">Taladro</li>
                                            <li class="list-group-item">Cortasetos</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                                <div class="card border-light">
                                    <img src="img/productos/cortasetos-echo-hc-2020.jpg" class="img-fluid"
                                        alt="Cortasetos">
                                    <div class="card-body">
                                        <h6 class="card-text">Taladro ECHO EDR-210
                                        </h6>
                                        <div class="center">
                                            <div class="btn-group">
                                                <a href="producto.html" class="btn btn-sm btn-danger">Ver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-light">
                                    <img src="img/productos/desmalezadora-shindaiwa-b450r.jpg" class="img-fluid"
                                        alt="Desmalezadora Shindaiwa B450R">
                                    <div class="card-body">
                                        <h6 class="card-text">Desmalezadora Shindaiwa B450R
                                        </h6>
                                        <div class="center">
                                            <div class="btn-group">
                                                <a href="producto.html"
                                                    class="btn btn-sm btn-danger font-weight-bold">Ver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-light">
                                    <img src="img/productos/fumigadora-shindaiwa-es726.jpg" class="img-fluid"
                                        alt="Fumigadora Shindaiwa ES726">
                                    <div class="card-body">
                                        <h6 class="card-text">Fumigadora Shindaiwa ES726
                                        </h6>
                                        <div class="center">
                                            <div class="btn-group">
                                                <a href="producto.html" class="btn btn-sm btn-danger">Ver
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card border-light">
                                    <img src="img/productos/motosierra-echo-cs-4510.jpg" class="img-fluid"
                                        alt="Motosierra ECHO CS-4510">
                                    <div class="card-body">
                                        <h6 class="card-text">Motosierra ECHO CS-4510
                                        </h6>
                                        <div class="center">
                                            <div class="btn-group">
                                                <a href="producto.html" class="btn btn-sm btn-danger">Ver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-light">
                                    <img src="img/productos/podadora-de-altura-echo-ppt-266.jpg" class="img-fluid"
                                        alt="Podadora de altura ECHO PPT-266">
                                    <div class="card-body">
                                        <h6 class="card-text">Podadora de altura ECHO PPT-266
                                        </h6>
                                        <div class="center">
                                            <div class="btn-group">
                                                <a href="producto.html" class="btn btn-sm btn-danger">Ver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-light">
                                    <img src="img/productos/Taladro-ECHO-EDR-210.jpg" class="img-fluid"
                                        alt="Taladro ECHO EDR-210">
                                    <div class="card-body">
                                        <h6 class="card-text">Taladro ECHO EDR-210
                                        </h6>
                                        <div class="center">
                                            <div class="btn-group">
                                                <a href="producto.html" class="btn btn-sm btn-danger">Ver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="footer-distributed">

        <div class="footer-left">

            <img class="img-fluid" src="img/logo.png">

            <p class="footer-links">
                <a href="#" class="link-1">INICIO</a>

                <a href="sobrenosotros.html">SOBRE NOSOTROS</a>

                <a href="productos.html">PRODUCTOS</a>

                <a href="divisionindustrial.html">DIVISIÓN INDUSTRIAL</a>

                <a href="contactenos.html">CONTÁCTENOS</a>
            </p>

            <p class="footer-company-name">Termodinamica © 2023</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Av. Villazon Nº 3671 (Km 3, carretera a Sacaba)</span> Cochabamba - Bolivia</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>(+591) 4 471-7730</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p>info@termodinamicaltd.com</p>
            </div>

        </div>

        <div class="footer-right">
            <p class="footer-company-about">
                <span>Sobre Nosotros</span>
                Es una empresa comercial que desde hace más de 40 años cuenta con la representación exclusiva de varios
                fabricantes de equipos de renombre internacional en Bolivia
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>

        </div>
    </footer>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>