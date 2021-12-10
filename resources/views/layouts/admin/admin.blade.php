<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="fr">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> EMYO SARL ADMIN | @yield('title') </title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link href="/assets/styles/main.css" rel="stylesheet">
    <link href="/fontawesome/css/all.css" rel="stylesheet">
  <!--  <link rel="stylesheet" href="{{ asset('assets/styles/tailwind.css') }}"> -->
    <link rel="shortcut icon" href="/assets/images/emyo.png">
    <script src="/assets/ckeditor/ckeditor.js"></script>
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

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo text-center"> <a href="/"><img src="/assets/images/emyo.png" alt="logo" style="width: 30%;"></a></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="/assets/images/avatar.png"
                                                alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">Mon
                                                profil</button>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" tabindex="0"
                                                    class="dropdown-item">Déconnexion</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{ Auth::user()->name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li>
                                <a href="{{ route('dashboard') }}">
                                    <i class="metismenu-icon far fa-clipboard" style="font-size: 15px;"></i>
                                    Tableau de bord
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fas fa-newspaper" style="font-size: 15px;"></i>
                                    Articles
                                    <i class="metismenu-state-icon fas fa-angle-down caret-left"
                                        style="font-size: 15px;"></i>
                                </a>
                                <ul>

                                    <li>
                                        <a href="{{ route('Ajouter un article') }}">
                                            <i class="metismenu-icon">
                                            </i>Ajouter un article
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Tous les articles') }}">
                                            <i class="metismenu-icon">
                                            </i>Liste d'articles
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fas fa-filter" style="font-size: 15px;"></i>
                                    Catégories
                                    <i class="metismenu-state-icon fas fa-angle-down caret-left"
                                        style="font-size: 15px;"></i>
                                </a>
                                <ul>

                                    <li>
                                        <a href="{{ route('Ajouter une categorie') }}">
                                            <i class="metismenu-icon">
                                            </i>Ajouter une catégorie
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Toutes les categories') }}">
                                            <i class="metismenu-icon">
                                            </i>Liste de Catégories
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fas fa-image" style="font-size: 15px;"></i>
                                    Images
                                    <i class="metismenu-state-icon fas fa-angle-down caret-left"
                                        style="font-size: 15px;"></i>
                                </a>
                                <ul>

                                    <li>
                                        <a href="{{ route('Vue Ajout img') }}">
                                            <i class="metismenu-icon">
                                            </i>Ajouter une image
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Toutes les images') }}">
                                            <i class="metismenu-icon">
                                            </i>Liste d'images
                                        </a>
                                    </li>
                                </ul>
                            </li>



                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fas fa-tshirt" style="font-size: 15px;"></i>
                                    Produits
                                    <i class="metismenu-state-icon fas fa-angle-down caret-left"
                                        style="font-size: 15px;"></i>
                                </a>
                                <ul>

                                    <li>
                                        <a href="{{ route('Ajouter un produit') }}">
                                            <i class="metismenu-icon">
                                            </i>Ajouter un produit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Tous les produits') }}">
                                            <i class="metismenu-icon">
                                            </i>Liste de produits
                                        </a>
                                    </li>
                                </ul>
                            </li>




                            <li>
                                <a href="#">
                                    <i class="metismenu-icon fas fa-users" style="font-size: 15px;"></i>
                                    Utilisateurs
                                    <i class="metismenu-state-icon fas fa-angle-down caret-left"
                                        style="font-size: 15px;"></i>
                                </a>
                                <ul>

                                    <li>
                                        <a href="{{ route('Ajouter un utilisateur') }}">
                                            <i class="metismenu-icon">
                                            </i>Ajouter un utilisateur
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Tous les utilisateurs') }}">
                                            <i class="metismenu-icon">
                                            </i>Liste d'utilisateurs
                                        </a>
                                    </li>
                                </ul>
                            </li>





                            <li>
                                <a href="{{ route('Tous les messages') }}">
                                    <i class="metismenu-icon fas fa-mail-bulk" style="font-size: 15px;"></i>
                                    Messages
                                </a>

                            </li>


                            <li>
                                <a href="{{ route('Toutes les reservations') }}">
                                    <i class="metismenu-icon fas fa-lock" style="font-size: 15px;"></i>
                                    Reservations
                                </a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="@yield('icon') icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>

                                    @yield('entity')

                                </div>
                            </div>
                        </div>
                    </div>

                    @yield('content')

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/assets/scripts/main2.js"></script>
    <script type="text/javascript" src="/assets/scripts/jquery.js"></script>
    <script type="text/javascript" src="/assets/scripts/main.js"></script>
    <script>
        CKEDITOR.replace('exampleText');
    </script>
</body>

</html>
