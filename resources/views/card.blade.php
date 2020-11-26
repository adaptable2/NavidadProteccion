<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<style>
	  #canvas_handler {
   position:absolute;
   left: -10000px;
  }
	</style>

</head>

<body>

    <header class="py-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 d-flex justify-content-between"><img src="{{ asset('img/logo1.svg') }}"
                        alt=""><img src="{{ asset('img/logo.svg') }}" alt=""></div>
            </div>
        </div>
    </header>
    <section class="content align-items-center" id="home">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center color-white"><img class="mb-3 logo img-fluid"
                        src="{{ asset('img/logo.svg') }}" alt="">
                    <p class="pb-5">Presenta:</p><img class="logo2 img-fluid" src="{{ asset('img/logo1.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="content align-items-center" id="video">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-3">
                    <h2 class="color-yellow">CUIDARNOS ES EL MEJOR REGALO PARA ESTA NAVIDAD</h2>
                    <p class="color-white"> <strong>MIRA EL VIDEO </strong>y encuentra más razones para sorprender a los
                        que más quieres en esta Navidad.</p>
                </div>
                <div class="col-md-7">
                    <div class="video-responsive">
                        {{-- <iframe src="https://www.youtube.com/embed/fWmO9bHU_fg"
                            frameborder="0" allowfullscreen></iframe> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content align-items-center" id="items">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 color-white text-center pb-5">
                    <h2>Tu Kit de Navidad </h2>
                    <p>Descarga nuestro kit para vivir con los que más quieres una Navidad especial.</p>
                </div>
                <div class="col-md-2 item d-flex flex-wrap justify-content-center">
                    <div class="items text-center"><img class="w-100" src="{{ asset('img/items/item1.svg') }}" alt="">
                        <p class="mt-3">Novena <strong>aguinaldos</strong></p>
                    </div><a class="button" href="./PDF/Novena-2020.pdf" download target="_blank">Descargar</a>
                </div>
                <div class="col-md-2 item d-flex flex-wrap justify-content-center">
                    <div class="items text-center"><img class="w-100" src="{{ asset('img/items/item2.svg') }}" alt="">
                        <p class="mt-3">Tarjetas<strong>de regalo</strong></p>
                    </div><a class="button" href="./PDF/Tarjetas.Navidad.pdf" download target="_blank">Descargar</a>
                </div>
                <div class="col-md-2 item d-flex flex-wrap justify-content-center">
                    <div class="items text-center"><img class="w-100" src="{{ asset('img/items/item3.svg') }}" alt="">
                        <p class="mt-3">Lista de reproducción<strong>Navideña</strong></p>
                    </div><a class="button" href="https://open.spotify.com/playlist/5bL9euYbe00LOU78b5MHae">Ir</a>
                </div>
                <div class="col-md-2 item d-flex flex-wrap justify-content-center">
                    <div class="items text-center"><img class="w-100" src="{{ asset('img/items/item4.svg') }}" alt="">
                        <p class="mt-3">Tarjeta <strong>Personalizable</strong></p>
                    </div><a class="button" href="">Crear</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content align-items-center" id="form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="m-auto d-block" method="post">
                        <div class="items inputs">
                            <div class="group d-inline-block">
                                <label for="para">Para:</label>
                                <div class="d-inline-block"><small class="d-block">Nombre Máximo 12 caracteres</small>
                                    <input id="para" type="text" name="para">
                                </div>
                            </div>
                            <div class="group d-inline-block">
                                <label for="email">e-Mail:</label>
                                <input id="email" type="text" name="email">
                            </div>
                            <div class="group d-inline-block">
                                <label for="de">De:</label>
                                <div class="d-inline-block"><small class="d-block">Nombre Máximo 12 caracteres</small>
                                    <input id="de" type="text" name="de">
                                </div>
                            </div>
                        </div>
                        <h2 class="title title-2">Sube <strong>tu foto</strong></h2>
                        <div class="items foto">
                            <div class="content">
                                <input class="d-none inputfile" type="file" name="file" id="file"><img
                                    src="{{ asset('img/form/camara.svg') }}" alt="">
                                <label class="button" for="file">Cargar una imagen</label>
                            </div>
                        </div>
                        <h2 class="title title-3"> <strong>Escribe un mensaje </strong>para decirles por qué te cuidas
                            por ellos.</h2>
                        <div class="items mensaje"><img class="w-100" src="{{ asset('img/form/mensaje.svg') }}" alt=""
                                data-toggle="modal" data-target="#mensajePop"></div>
                        <div class="button d-inline-block" id="btn-preview" data-toggle="modal" data-target="#previa">vista previa</div>
                    </form>
                    <p class="text-center cierre"><span class="color-yellow d-block">Demuéstrales que cuidándote hoy,
                            pronto </span>vivirán de nuevo los mejores recuerdos.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="previa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="modal-body">
                    <div class="close" type="button" data-dismiss="modal" aria-label="Close"> </div>
                    <div class="content-card op1" id="content-card">
                        <div class="title">
                            <h2>Mamá</h2>
                            <p class="hast">#cuidarteesmiregalo</p>
                            <p>para esta <strong>navidad</strong></p>
                        </div>
                        <div class="img">
                            <img class="w-100" src="https://picsum.photos/id/237/600/720" alt="">
                            <div class="bota"></div>
                            <div class="text">
                                <p>Att: <span class="name">Camilo</span></p>
                            </div>
                            <div class="regalo"></div>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repudiandae, corrupti
                                temporibus nostrum eaque, est voluptate cumque, placeat provident ab sequi iusto aliquid
                                optio! Deserunt nobis numquam explicabo unde ex.</p>
                        </div>
                    </div>
                    <div class="options">
                        <div class="colors">
                            <p>Opciones de <span>plantilla:</span></p>
                            <div class="option option-1 active">
                                <div class="color"></div>
                            </div>
                            <div class="option option-2">
                                <div class="color"></div>
                            </div>
                            <div class="option option-3">
                                <div class="color"></div>
                            </div>
                        </div>
                        <button class="button" id="btn-card">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="mensajePop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
                    <p>Escribe tu mensaje<span class="d-block">(Longitud maxima 250 caracteres) </span></p>
                    <div class="mensaje-pop">
                        <div class="content">
                            <textarea id="mensaje" name="mensaje"></textarea>
                            <button class="enviar"></button>
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



    <script type="text/javascript" src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
	{<script src="{{ asset('js/html2canvas.js') }}"></script>
    <script src="{{ asset('js/renderCanvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>


</body>

</html>
