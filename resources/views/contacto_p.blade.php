<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>TERMODINAMICA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>

  <link href="{{asset('css/estilo.css')}}" rel="stylesheet">
  <link href="{{asset('css/estilocontacto.css')}}" rel="stylesheet">
  <link href="product.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-red navbar-dark">
    <div class="wrapper">

    </div>
    <div class="container-fluid all-show">
      <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset('img/logo.png')}}" class="img-fluid"></a>
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
 
  
    <div class="container">
      <br>
      <center>
        <h1>CONTÁCTENOS</h1>
      </center>
      <br>
      <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30460.686672055366!2d-66.13122238665414!3d-17.383651228777115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e376b5ed8c300f%3A0xbc1c9e0bac3b5192!2sTERMODINAMICA%20LTDA!5e0!3m2!1ses!2sbo!4v1678066659054!5m2!1ses!2sbo"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><br>


      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Estimado Cliente</h4>
              <p class="card-text">En caso de requerir mayor información le agradeceremos llenar el formulario de
                contacto que sigue y un distribuidor autorizado en su zona se pondrá en contacto con usted.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Atención</h4>
              <p class="card-text">En caso de requerir mayor información le agradeceremos llenar el formulario de
                contacto que sigue y un distribuidor autorizado en su zona se pondrá en contacto con usted.</p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">

              <h3 class="card-title">Formulario de Contacto</h3>
              <p class="card-text">

                @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
               
                <form  method="post" class="row g-3" >
                       
                
            @csrf
           
               @if ($errors->any()) 
               <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
                
               </div>
            
        @endif
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="" name="nombre">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Apellido</label>
                      <input type="text" class="form-control" id="" name="apellido">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Email</label>
                      <input type="email" class="form-control" id="" placeholder=" " name="email">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Dirección</label>
                      <input type="text" class="form-control" id="" placeholder=" " name="direcion">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Asunto</label>
    
                      <textarea id="" class="form-control" name="asunto" rows="4" cols="50"></textarea>
                    </div>
    
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </form>
                  
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Cochabamba</h4>
              <p class="card-text">
                <i class="fa-sharp fa-solid fa-location-dot"></i> Dirección: Av. Villazon Nº 3671 (Km 3, carretera a
                Sacaba) <br>
                <i class="fa-solid fa-phone-volume"></i> Teléfono: (+591) 4 471-7730<br>
                <i class="fa-brands fa-whatsapp"></i> Whatsapp: (+591) 75483310<br>
                <i class="fa-solid fa-envelope"></i> Email: info@termodinamicaltd.com
              </p><br>
              <h4 class="card-title">Próximamente en Santa Cruz</h4>
              <p class="card-text">
                <i class="fa-sharp fa-solid fa-location-dot"></i> Dirección: Av. Cristo Redentor, entre 5to y 6to
                anillo, esquina Calle 3<br>
                <i class="fa-solid fa-phone-volume"></i> Teléfono: (+591) 3 343-8927
              </p><br>
              <h4 class="card-title">Horario de Atención</h4>
              <p class="card-text">
                Lunes a Viernes<br>
                <i class="fa-solid fa-clock"></i> 8:00 - 12:00<br>
                <i class="fa-solid fa-clock"></i> 14:00 - 18:00<br>
                Sábado<br>
                <i class="fa-solid fa-clock"></i> 8:00 - 13:00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
 

  <footer class="footer-distributed">

    <div class="footer-left">

      <img class="img-fluid" src="{{asset('img/logo.png')}}">

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
  <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>