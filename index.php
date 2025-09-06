<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Romee" />
        <title>Romee - Solución Industrial</title>
        <link rel="icon" href="assets/img/favicon.ico" />
        
        <link href="css/simpleLightbox.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom-style.css" rel="stylesheet" />
        <link href="css/whatsapp.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       
    </head>
    <body id="page-top">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send?phone=541163089214&text=Hola, me gustaria Obtener más información" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float "></i>
        </a>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand mini-logo-romee" href="#page-top">
                    <img src="assets/img/romee-logo.png" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" style="filter: brightness(0) invert(1);"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#inicio_view">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sobre_nosotros">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#servicios_view">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#clientes_view">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacto_view">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php include('pages/inicio_view.php') ?>
        
        <?php include('pages/nosotros_view.php') ?>
        
        <?php include('pages/servicios_view.php') ?>
        
        <?php include('pages/proyectos_clientes_view.php') ?>


        
        <!-- Contact-->
         <!-- Modal -->
        <div class="modal fade" id="mensajeEnviadoModal" tabindex="-1" aria-labelledby="mensajeEnviadoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white" style="background-color: #5f9fc1 !important;">
                        <h5 class="modal-title" id="mensajeEnviadoLabel">¡Mensaje enviado!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        Gracias por contactarnos. Te responderemos a la brevedad.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" style="background-color: #5f9fc1 !important;">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>


        <section class="page-section bg-primary-grey-romee" id="contacto_view">
            <div class="container px-4 px-lg-5">

                <h2 class="text-white text-center mt-0">Contacto</h2>
                <hr class="divider" />
                <br>

                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form id="formContacto" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3" data-aos="fade-down" data-aos-duration="800" data-aos-delay="0">
                                <input class="form-control style-romee" id="name" name="nombre" type="text" placeholder="Ingrese su nombre..." data-sb-validations="required" />
                                <label for="name" class="label-gray">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es requerido.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3" data-aos="fade-down" data-aos-duration="800" data-aos-delay="100">
                                <input class="form-control style-romee" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email" class="label-gray">E-mail</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">El email es requerido.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email no válido.</div>
                                <input type="text" name="website" autocomplete="off" style="display:none">
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">
                                <input class="form-control style-romee" id="phone" name="telefono" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone" class="label-gray">Teléfono</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">El número de teléfono es requerido.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300">
                                <textarea class="form-control style-romee" id="message" name="mensaje" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message" class="label-gray">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es requerido.</div>
                            </div>
                        
                            <p id="status" aria-live="polite" class="alert-mensaje mt-4"></p>
                            
                            <div class="d-grid" data-aos="fade-down" data-aos-duration="800" data-aos-delay="400"><button class="btn btn-primary btn-xl" id="btnEnviar" type="submit">Solicitar presupuesto</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section>


        <div class="container px-4 px-lg-5">

            <footer class="bg-light screen-side">
                <div class="negro"></div>
            
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="banner-left">
                            <img src="assets/img/romee-logo.png" alt="Logo de presentación" class="img-logo-footer">
                            <br>
                            <p class="text-white fst-italic fs-3 lema-logo-footer">
                                Comprometidos <br> con cada proyecto.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 container-data-contact">

                        <ul class="list-unstyled">

                            <li class="mb-2">
                                <i class="bi bi-telephone-fill me-2" style="color: #5f9fc1 !important;"></i>
                                <a href="https://wa.me/541163089214"> 11 6308 9214 </a>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-linkedin me-2" style="color: #5f9fc1 !important;"></i>
                                <a href="https://www.linkedin.com"> Romee Solucion Industrial </a>
                            </li> 
                            <li class="mb-2">
                                <i class="bi bi-instagram me-2" style="color: #5f9fc1 !important;"></i>
                                <a href="https://www.instagram.com/romeesolucionindustrial/"> @Romeesolucionindustrial </a>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-envelope-fill me-2" style="color: #5f9fc1 !important;"></i>
                                <a href="mailto:info@romee.com.ar"> info@romee.com.ar </a>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-geo-alt-fill me-2" style="color: #5f9fc1 !important;"></i>
                                Quilmes Oeste, Buenos Aires
                            </li>

                        </ul>

                    </div>



                    <div class="col-12 col-md-3 container-data-contact">
                        <ul class="list-unstyled">

                            <li class="nav-item mb-2"><a class="nav-link" href="#inicio_view"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Inicio</a></li>
                            <li class="nav-item mb-2"><a class="nav-link" href="#sobre_nosotros"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Nosotros</a></li>
                            <li class="nav-item mb-2"><a class="nav-link" href="#servicios_view"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Servicios</a></li>
                            <li class="nav-item mb-2"><a class="nav-link" href="#clientes_view"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Clientes</a></li>
                            <li class="nav-item mb-2"><a class="nav-link" href="#contacto_view"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Contacto</a></li>

                        </ul>
                    </div>

                </div>
            
            </footer>
            
        </div>




        <footer class="bg-light screen-small">
            
            <div class="row">
                <div class="col-12">
                    <div class="banner-footer">
                        <img src="assets/img/romee-logo.png" alt="Logo de presentación" class="img-logo-footer">
                        <p class="text-white fst-italic fs-3 lema-logo-footer" style="margin: 0;margin-left: 15px;">
                            Comprometidos con cada proyecto.
                        </p>
                    </div>
                </div>
                <div class="col-8 d-flex justify-content-center align-items-center info-footer-small" style="padding-top: 2rem;">

                    <ul class="list-unstyled">

                        <li class="mb-2">
                            <i class="bi bi-telephone-fill me-2" style="color: #5f9fc1 !important;"></i>
                            <a href="https://wa.me/541163089214"> 11 6308 9214 </a>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-linkedin me-2" style="color: #5f9fc1 !important;"></i>
                            <a href="https://www.linkedin.com"> Romee Solucion Industrial </a>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-instagram me-2" style="color: #5f9fc1 !important;"></i>
                            <a href="https://www.instagram.com/romeesolucionindustrial/"> @Romeesolucionindustrial </a>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-envelope-fill me-2" style="color: #5f9fc1 !important;"></i>
                            <a href="mailto:info@romee.com.ar"> info@romee.com.ar </a>
                         </li>
                        <li class="mb-2">
                            <i class="bi bi-geo-alt-fill me-2" style="color: #5f9fc1 !important;"></i>
                            Quilmes Oeste, Buenos Aires
                        </li>

                    </ul>

                </div>



                <div class="col-4 d-flex justify-content-center align-items-center info-footer-small" style="padding-top: 2rem;">
                    <ul class="list-unstyled">

                        <li class="nav-item mb-2"><a class="nav-link" href="#inicio_view"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Inicio</a></li>
                        <li class="nav-item mb-2"><a class="nav-link" href="#sobre_nosotros"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Nosotros</a></li>
                        <li class="nav-item mb-2"><a class="nav-link" href="#servicios_view"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Servicios</a></li>
                        <li class="nav-item mb-2"><a class="nav-link" href="#clientes_view"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Clientes</a></li>
                        <li class="nav-item mb-2"><a class="nav-link" href="#contacto_view"><i class="bi bi-circle-fill me-2 icon-nav-footer"></i> Contacto</a></li>

                    </ul>
                </div>

            </div>
        
        </footer>

        

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/simpleLightbox.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/scripts.js"></script>
        
    </body>
</html>
