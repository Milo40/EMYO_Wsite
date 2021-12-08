<!DOCTYPE html>
<html lang="en">

<head>
	<title>EMYO SARL - @yield('title')
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

	<link rel="stylesheet" href="/index/css/animate.css">

	<link rel="stylesheet" href="/index/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/index/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/index/css/magnific-popup.css">
    <link rel="shortcut icon" href="/assets/images/emyo.png">
	<link rel="stylesheet" href="/index/css/ionicons.min.css">
	<link rel="stylesheet" href="/index/css/flaticon.css">
	<link rel="stylesheet" href="/index/css/icomoon.css">
	<link rel="stylesheet" href="/index/css/style.css">
    @yield('style')
</head>

<body>
        <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->
    
    <div class="container pt-5 pb-4">
        <div class="row justify-content-between">
            <div class="col-md-8 order-md-last">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <a class="navbar-brand" href="/"><img src="/index/images/emyo.png" alt="logo"
                                style="margin:-100px;width:150px;"></a>
                    </div>
                    <div class="col-md-6 d-none d-md-flex justify-content-end mb-md-0 mb-3">
                      <a href="/contact"><button class="btn btn-primary"> <i class="fas fa-mail-bulk"></i> Nous contacter</button></a>
                       </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="https://mobile.facebook.com/Emergence-YOUTH-676813262682962/"
                            class="d-flex align-items-center justify-content-center"><span class="fab fa-facebook"><i
                                    class="sr-only">Facebook</i></span></a>
                        <a href="https://cm.linkedin.com/in/emyo-sarl-921b801b4"
                            class="d-flex align-items-center justify-content-center"><span class="fab fa-linkedin"><i
                                    class="sr-only">Linkedin</i></span></a>
                        <a href="https://www.youtube.com/channel/UCuILeOISssox1pmGiXa0lvg"
                            class="d-flex align-items-center justify-content-center"><span class="fab fa-youtube"><i
                                    class="sr-only">Youtube</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid">
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item @yield('home')"><a href="/" class="nav-link">Acceuil</a></li>
                    <li class="nav-item @yield('about')"><a href="/a-propos" class="nav-link">A propos</a></li>
                    <li class="nav-item @yield('galery')"><a href="/galerie" class="nav-link">Galerie</a></li>
                    <li class="nav-item @yield('blog')"><a href="/blog" class="nav-link">Blog</a></li>
                    <li class="nav-item @yield('contact')"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item @yield('boutique')"><a href="/boutique" class="nav-link">Boutique</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- END nav -->
    

	@yield('wcontent')

    
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="logo text-center"><a href="#"><img src="/index/images/emyo.png" alt="logo"
                                style="margin:-100px;width:100px;"></a></h2>
                    <p>EMYO SARL est une entreprise environnementale qui vous apporte des services dans le
                        consulting environnementale et la promotion de l'entrepreneuriat jeune pour un développement
                        durable</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="https://cm.linkedin.com/in/emyo-sarl-921b801b4"><span
                                    class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate"><a
                                href="https://mobile.facebook.com/Emergence-YOUTH-676813262682962/"><span
                                    class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a
                                href="https://www.youtube.com/channel/UCuILeOISssox1pmGiXa0lvg"><span
                                    class="icon-youtube"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Services</h2>
            
                    <p class="list-unstyled">
                        <span class="ion-ios-arrow-forward mr-3"></span>	Formation <br>
                            <span class="ion-ios-arrow-forward mr-3"></span> Incubations <br>
                                <span class="ion-ios-arrow-forward mr-3"></span> Réseautages <br>
                                    <span class="ion-ios-arrow-forward mr-3"></span> Consulting<br>
                                        <span class="ion-ios-arrow-forward mr-3"></span>Stages <br>
                                            <span class="ion-ios-arrow-forward mr-3"></span>Commercialisation<br>
                   </p>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Contact information</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Yaounde,Mokolo en bas, Immeuble Pharmacie Royale</span></li>
                            <li><span class="icon icon-phone"></span><span class="text">+237
                                        654568940</span></li>
                            <li><span class="icon icon-envelope"></span><span
                                        class="text mr-2">emyo.consulting.enviro@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Horaires d'ouverture</h2>
                    <div class="opening-hours">
                        <p class="pl-3 text-justify">
                            lundi 09:00 – 17:00 <br>
                            mardi 09:00 – 17:00<br>
                            mercredi 09:00 – 17:00<br>
                            jeudi 09:00 – 17:00<br>
                            vendredi 09:00 – 17:00<br>
                            samedi 09:00 – 15:00<br>
                            dimanche Fermé
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    &copy;
                    <script>document.write(new Date().getFullYear());</script> Tous droits réservés | Emyo SARL <i
                        class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>

    

	<script src="/index/js/jquery.min.js"></script>
    <script src="/index/js/jquery-migrate-3.0.1.min.js"></script>
    <script type="text/javascript" src="/assets/scripts/main.js"></script>
	<script src="/index/js/popper.min.js"></script>
	<script src="/index/js/bootstrap.min.js"></script>
	<script src="/index/js/jquery.easing.1.3.js"></script>
	<script src="/index/js/jquery.waypoints.min.js"></script>
	<script src="/index/js/jquery.stellar.min.js"></script>
	<script src="/index/js/owl.carousel.min.js"></script>
	<script src="/index/js/jquery.magnific-popup.min.js"></script>
	<script src="/index/js/scrollax.min.js"></script>
	<script src="/index/js/main.js"></script>
    @yield('script')

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>

</html>