<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'template/head.php';?>
    <title>Mapfre | Agente de seguros</title>
</head>

<body>
    <div class="container-fluid p-0">
        <?php include 'template/navbar.php';?>
        <div class="slider_wrapper">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators nav nav-tabs" id="myTab" role="tablist">
                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active nav-item"
                        role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li data-target="#carouselExampleControls" data-slide-to="1" class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li data-target="#carouselExampleControls" data-slide-to="2" class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                </ol>



                <div class="carousel-inner">
                    <div id="1" class="carousel-item active">
                        <div class="w-100 h-100 bg-img"
                            style="background-image: url('./assets/images/home-slider/Home-auto.png');">
                            <!-- <img src="./assets/images/home-slider/Home-auto.png" class="crop_img d-block w-100" alt="..."> -->
                            <div class="ttl_slide">
                                <h1 class="text-center">Hasta 30% <br> <span>de dto y MSI*</span></h1>
                                <p class="text-center">*El precio puede variar al momento de cotizar</p>
                            </div>
                        </div>
                    </div>
                    <div id="2" class="carousel-item">
                        <!-- <img src="./assets/images/home-slider/Home-auto.png" class="crop_img d-block w-100" alt="..."> -->
                        <div class="w-100 h-100 bg-img"
                            style="background-image: url('./assets/images/home-slider/Home-auto.png');">
                            <div class="ttl_slide">
                                <h1 class="text-center">Hasta 30% <br> <span>de dto y MSI*</span></h1>
                                <p class="text-center">*El precio puede variar al momento de cotizar</p>
                            </div>
                        </div>
                    </div>
                    <div id="3" class="carousel-item">
                        <!-- <img src="./assets/images/home-slider/Home-auto.png" class="crop_img  d-block w-100" alt="..."> -->
                        <div class="w-100 h-100 bg-img"
                            style="background-image:  url('./assets/images/home-slider/Home-auto.png');">
                            <div class="ttl_slide">
                                <h1 class="text-center">Hasta 30% <br> <span>de dto y MSI*</span></h1>
                                <p class="text-center">*El precio puede variar al momento de cotizar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- <div class="options_seguros_row">
                <div class="options_row d-flex justify-content-around align-items-center">
                    <div class="icon_text">
                        <i class="icon-autos "></i>
                        <p>Autos</p>
                    </div>
                    <div class="icon_text">
                        <i class="icon-motocicletas"></i>
                        <p>Motocicletas</p>
                    </div>
                    <div class="icon_text">
                        <i class="icon-hogar"></i>
                        <p>Hogar</p>
                    </div>
                    <div class="icon_text">
                        <i class="icon-basicos"></i>
                        <p>Básicos</p>
                    </div>
                    <div class="icon_text">
                        <i class="icon-medicos"></i>
                        <p>Gastos Médicos</p>
                    </div>
                    <div class="icon_text">
                        <i class="icon-accidentes"></i>
                        <p>Accidentes</p>
                    </div>
                    <div class="icon_text">
                        <i class="icon-vida"></i>
                        <p>Vida</p>
                    </div>
                    <div class="icon_text">
                        <i class="icon-pets"></i>
                        <p>Mascotas</p>
                    </div>
                </div>
            </div> -->
            <div class="row_steps_numbers w-100">
                <h1 class="text-center">¿Cómo funciona?</h1>
                <div class="d-flex w-100 box_number">
                    <div class="steps_numbers">
                        <p>1</p>
                        <div class="info">
                            <span><i class="icon-pencil"></i> <br> Personaliza tu cotización</span>
                        </div>
                    </div>
                    <div class="steps_numbers">
                        <p>2</p>
                        <div class="info">
                            <span><i class="icon-select"></i> <br> Selecciona la mejor opción para ti</span>
                        </div>
                    </div>
                    <div class="steps_numbers">
                        <p>3</p>
                        <div class="info">
                            <span><i class="icon-click"></i> <br> Realiza tu compra en
                                linea</span>
                        </div>
                    </div>
                    <div class="steps_numbers">
                        <p>4</p>
                        <div class="info">
                            <span><i class="icon-time"></i> <br> En 5 Min
                                Recibes tu
                                Póliza</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">a</div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">b</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">c</div>
        </div>

        <!-- <section class="about_us">
            <div class="row h-100 col-10 p-0 mx-auto">
                <div class="col-6 h-100 d-flex justify-content-center align-items-center">
                    <div>
                        <img src="assets/images/logo_mapfre-red.svg" alt="">
                        <h2>¿Quiénes somos?</h2>
                        <p>Somos tu cotizados en linea que te ayuda a encontrar tu seguro con la cobertura ideal al
                            mejor precio en
                            tan solo 2 clicks.</p>
                        <a href="" class="d-flex cotizar_btn justify-content-center align-items-center">¡Quiero
                            cotizar!</a>
                    </div>
                </div>
                <div class="col-6 h-100 d-flex justify-content-center align-items-center">
                    <img class="foto" src="assets/images/foto-mapfre/Home@2x.png" alt="">
                </div>
            </div>
        </section>

        <section class="promotions">
            <div class="col-10 p-0 mx-auto">
                <h1 class="text-center">Promociones</h1>
                <div class="d-flex">
                    <img src="https://dummyimage.com/320x320/#E0E0E" alt="">
                    <img src="https://dummyimage.com/320x320/#E0E0E" alt="">
                    <img src="https://dummyimage.com/320x320/#E0E0E" alt="">
                </div>
            </div>
        </section>

        <section class="blog">
            <div class="col-10 p-0 p-0 mx-auto h-100 d-flex justify-content-center align-items-center">
                <div class="w-100">
                    <h1 class="text-center">Conoce Nuestro Blog</h1>
                    <div class="d-flex">
                        <img src="https://dummyimage.com/320x430/#E0E0E" alt="">
                        <img src="https://dummyimage.com/320x430/#E0E0E" alt="">
                        <img src="https://dummyimage.com/320x430/#E0E0E" alt="">
                    </div>
                </div>
                <a href="" class="see_more d-flex justify-content-center align-items-center">Ver más</a>
            </div>
        </section> -->

        <!-- <section class="customers">
            <div class="col-10 p-0 p-0 mx-auto h-100 d-flex justify-content-center align-items-center">
                <div class="w-100">
                    <h1 class="text-center">Nuestros clientes</h1>
                    <div class="d-flex space-evenly">
                     
                        <div class="testimonial_card">
                            <div class="content_testimonial">
                                <div class="d-flex d-flex align-items-start align-items-center">
                                    <img src="./assets/images/user.png" alt="">
                                    <h5>Jazmin Villanueva</h5>
                                </div>
                                <span>★★★★★</span>
                                <p>Estoy dando 4 estrellas ¿porque? bueno la app es muy buena pero lo único malo esque
                                    no puedo
                                    descargar varias imágenes cuando estoy dentro de la app, tengo que salirme y entrar
                                    nuevamente .</p>
                            </div>
                        </div>
                        <div class="testimonial_card">
                            <div class="content_testimonial">
                                <div class="d-flex d-flex align-items-start align-items-center">
                                    <img src="./assets/images/user.png" alt="">
                                    <h5>Jazmin Villanueva</h5>
                                </div>
                                <span>★★★★★</span>
                                <p>Estoy dando 4 estrellas ¿porque? bueno la app es muy buena pero lo único malo esque
                                    no puedo
                                    descargar varias imágenes cuando estoy dentro de la app, tengo que salirme y entrar
                                    nuevamente .</p>
                            </div>
                        </div>
                        <div class="testimonial_card">
                            <div class="content_testimonial">
                                <div class="d-flex d-flex align-items-start align-items-center">
                                    <img src="./assets/images/user.png" alt="">
                                    <h5>Jazmin Villanueva</h5>
                                </div>
                                <span>★★★★★</span>
                                <p>Estoy dando 4 estrellas ¿porque? bueno la app es muy buena pero lo único malo esque
                                    no puedo
                                    descargar varias imágenes cuando estoy dentro de la app, tengo que salirme y entrar
                                    nuevamente .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="see_more d-flex justify-content-center align-items-center">Ver más</a>
            </div>
        </section> -->

        <!-- <section class="q_a">
            <div class="d-flex justify-content-center align-items-center container_ col-10 p-0 mx-auto h-100">
                <div class="w-100 tabs_">
                    <h1 class="text-center">Preguntas frecuentes</h1>
                    <p class="text-center">Consulta información sobre coberturas y resuelve tus dudas</p>
                    <ul class="nav nav-tabs col-10 mx-auto p-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Autos</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Homeowners</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Renters</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Condo</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Motocicleta</a>
                        </li>
                    </ul>
                    <div class="tab-content " id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                1.- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the first accordion panel. This panel is shown
                                            by default, thanks to
                                            the <code>.show</code> class.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                2.- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the second accordion panel. This panel is
                                            hidden by default.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                3- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel.
                                            This panel is hidden
                                            by default.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                                                aria-controls="collapse4">
                                                4- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel.
                                            This panel is hidden
                                            by default.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading5">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse5" aria-expanded="false"
                                                aria-controls="collapse5">
                                                5- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel.
                                            This panel is hidden
                                            by default.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                1.- ¿Por qué tu seguro vale lo que vale?
                                            </button>

                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the first accordion panel. This panel is shown
                                            by default, thanks to
                                            the <code>.show</code> class.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                2.- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the second accordion panel. This panel is
                                            hidden by default.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                3- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel.
                                            This panel is hidden
                                            by default.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                                                aria-controls="collapse4">
                                                4- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel.
                                            This panel is hidden
                                            by default.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading5">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse5" aria-expanded="false"
                                                aria-controls="collapse5">
                                                5- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel.
                                            This panel is hidden
                                            by default.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                1.- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the first accordion panel. This panel is shown
                                            by default, thanks to
                                            the <code>.show</code> class.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                2.- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Some placeholder content for the second accordion panel. This panel is
                                            hidden by default.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                3- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel.
                                            This panel is hidden
                                            by default.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                                                aria-controls="collapse4">
                                                4- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel.
                                            This panel is hidden
                                            by default.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading5">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse5" aria-expanded="false"
                                                aria-controls="collapse5">
                                                5- ¿Por qué tu seguro vale lo que vale?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            And lastly, the placeholder content for the third and final accordion panel.
                                            This panel is hidden
                                            by default.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->



        <?php include 'template/footer.php';?>

        <?php include 'template/scripts.php';?>
        <script>
            $('#carouselExampleControls').on('slide.bs.carousel', function onSlide(ev) {
                var id = ev.relatedTarget.id;
                switch (id) {
                    case "1":
                        console.log("1");
                        break;
                    case "2":
                        console.log("2");
                        break;
                    case "3":
                        console.log("3");
                        break;
                    default:
                    console.log("no");
                }
            })
        </script>
    </div>
</body>

</html>