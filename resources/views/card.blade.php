<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="css/main.css">
	
  </head>
  <body>
    <header class="py-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 d-flex justify-content-between"><img src="img/logo1.svg" alt=""><img src="img/logo.svg" alt=""></div>
        </div>
      </div>
    </header>
    <section class="content align-items-center" data-aos="fade-down" id="home">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 text-center color-white" data-aos="fade-up"><img class="mb-3 logo img-fluid" src="img/logo.svg" alt="">
            <p class="pb-5">Presenta:</p><img class="logo2 img-fluid" src="img/logo1.svg" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="content align-items-center" id="video">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-3" data-aos="fade-right">
            <h2 class="color-yellow">CUIDARNOS ES EL MEJOR REGALO PARA ESTA NAVIDAD</h2>
            <p class="color-white"> <strong>MIRA EL VIDEO </strong>y encuentra más razones para sorprender a los que más quieres en esta Navidad.</p>
          </div>
          <div class="col-md-7" data-aos="fade-left">
            <div class="video-responsive">
              <!-- <iframe src="https://www.youtube.com/embed/fWmO9bHU_fg" frameborder="0" allowfullscreen></iframe> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content align-items-center" data-aos="fade-up" id="items">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12 color-white text-center pb-5">
            <h2>Tu Kit de Navidad </h2>
            <p>Descarga nuestro kit para vivir con los que más quieres una Navidad especial.</p>
          </div>
          <div class="col-6 col-md-2 item d-flex flex-wrap justify-content-center">
            <div class="items text-center"><img class="w-100" data-aos="fade-down" src="img/items/item1.svg" alt="">
              <p class="mt-3" data-aos="fade-up">Novena <strong>aguinaldos</strong></p>
            </div><a class="button" href="./PDF/Novena-2020.pdf" download target="_blank" data-aos="zoom-in">Descargar</a>
          </div>
          <div class="col-6 col-md-2 item d-flex flex-wrap justify-content-center">
            <div class="items text-center"><img class="w-100" data-aos="fade-down" src="img/items/item2.svg" alt="">
              <p class="mt-3" data-aos="fade-up">Tarjetas<strong>de regalo</strong></p>
            </div><a class="button" href="./PDF/Tarjetas.Navidad.pdf" download target="_blank" data-aos="zoom-in">Descargar</a>
          </div>
          <div class="col-6 col-md-2 item d-flex flex-wrap justify-content-center">
            <div class="items text-center"><img class="w-100" data-aos="fade-down" src="img/items/item3.svg" alt="">
              <p class="mt-3" data-aos="fade-up">Lista de reproducción<strong>Navideña</strong></p>
            </div><a class="button" href="https://open.spotify.com/playlist/5bL9euYbe00LOU78b5MHae" data-aos="zoom-in">Ir</a>
          </div>
          <div class="col-6 col-md-2 item d-flex flex-wrap justify-content-center">
            <div class="items text-center"><img class="w-100" data-aos="fade-down" src="img/items/item4.svg" alt="">
              <p class="mt-3" data-aos="fade-up">Tarjeta <strong>Personalizable</strong></p>
            </div><a class="button" href="" data-aos="zoom-in">Crear</a>
          </div>
        </div>
      </div>
    </section>
    <section class="content align-items-center" id="form">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <form class="m-auto d-block" data-aos="fade-up" action="" method="post">
              <div class="items inputs">
                <div class="group d-inline-block">
                  <label for="para">Para:</label>
                  <div class="d-inline-block"><small class="d-block">Nombre Máximo 12 caracteres</small>
                    <input id="para" type="text" name="para" onkeydown="limit(this,12);" onkeyup="limit(this,12);">
                  </div>
                </div>
                <div class="group d-inline-block">
                  <label for="email">e-Mail:</label>
                  <input id="email" type="text" name="email">
                </div>
                <div class="group d-inline-block">
                  <label for="de">De:</label>
                  <div class="d-inline-block"><small class="d-block">Nombre Máximo 12 caracteres</small>
                    <input id="de" type="text" name="de" onkeydown="limit(this,12);" onkeyup="limit(this,12);">
                  </div>
                </div>
              </div>
              <h2 class="title title-2">Sube <strong>tu foto</strong></h2>
              <div class="items foto">
                <div class="content">
                  <input class="d-none inputfile" type="file" name="file" id="file">
				  <img id="selected-image" class="selected-image" src="img/form/camara.svg" alt="familyImage">
                  <label class="button" for="file">Cargar una imagen</label>
                </div>
              </div>
              <h2 class="title title-3"> <strong>Escribe un mensaje </strong>para decirles por qué te cuidas por ellos.</h2>
              <div class="items mensaje"><img class="w-100" src="img/form/mensaje.svg" alt="" data-toggle="modal" data-target="#mensajePop"></div>
              <div class="button d-inline-block" id="preview-btn" data-toggle="modal" data-target="#previa">vista previa</div>
            </form>
            <p class="text-center cierre"><span class="color-yellow d-block">Demuéstrales que cuidándote hoy, pronto </span>vivirán de nuevo los mejores recuerdos.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="content align-items-center" id="end">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8"><img src="img/logo.svg" alt="" data-aos="fade-up">
            <h2 class="pt-4 text-center" data-aos="fade-up">La vida desde hoy</h2>
          </div>
        </div>
      </div>
    </section>
        <div class="modal fade" id="previa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="modal-body">
            <div class="close" type="button" data-dismiss="modal" aria-label="Close"> </div>
            <div class="content-card" id="op1">
				<img class="decoration p1" width="100%" src="./img/items/SVG/bg-Yb.svg" alt="">
				<img class="decoration p2" src="./img/items/SVG/bgB.svg" alt="">
				<img class="decoration p3" src="./img/items/SVG/byB.svg" alt="">
              <div class="header d-flex justify-content-between"><img src="img/logo1.svg" alt=""><img src="img/logo.svg" alt=""></div>
              <div class="title">
                <h2>Mamá</h2>
                <p class="hast">#cuidarteesmiregalo</p>
                <p>para esta <strong>navidad</strong></p>
              </div>
              <div class="img"><img class="w-100 selected-image" src="https://picsum.photos/id/237/600/720" alt="">
                <div class="bota"></div>
                <div class="text"> 
                  <p>Att: <span class="name">Camilo</span></p>
                </div>
                <div class="regalo"></div>
              </div>
              <div class="text">
                 <p id="mensaje-formulario"></p>
              </div>
            </div>
            <div class="options">
              <div class="colors">
                <p>Opciones de <span>plantilla:</span></p>
                <div class="option option-1 active" id="op1">
                  <div class="color"></div>
                </div>
                <div class="option option-2" id="op2">
                  <div class="color"></div>
                </div>
                <div class="option option-3" id="op3">
                  <div class="color"></div>
                </div>
              </div>
              <button class="button" id="btn-enviar" >Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="mensajePop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <p>Escribe tu mensaje<span class="d-block">(Longitud maxima 250 caracteres) </span></p>
            <div class="mensaje-pop">
              <div class="content">
                <textarea id="mensaje" name="mensaje" onkeydown="limit(this,250);" onkeyup="limit(this,250);"></textarea>
                <button class="enviar" data-dismiss="modal" aria-label="Close"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 color-white text-center">
            <p>descubre tu kit <br>de navidad</p>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/renderCanvas.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>