<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>SantePam</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="SantePam - Tout ce que vous voulez recherché sur la santé">

    <meta name="keywords" content="santé, e-commerce, vente, achat, matériel médical, prix, adresse, malade, lieu, clinique, hopital, dentiste, ophtalmologue, cardiologue, 
      medecin, generaliste, haiti, commune, departement, prive, publique, specialiste,  pharmacie, médicament, centre de santé, professionnel de santé, maladie, docteur, infirmière
      chirurgien, orthopediste, dermatologue, urologue, ginecologue, cardiologue, zone, port-au-prince, delmas, carrefour, plaine, tabarre, petion-ville, croix-des-bouquets, carrefour feuilles, cap-haitien, cayes, jacmel, nord, 
      souest, sud, sud-est, nord ouest, grand'anse, centre, artibonite, nord'est, nippes">

    <meta name="author" content="SantePam">

    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url().'assets/favicon1.ico';?>" >
    <link rel="icon" type="image/png" href="<?php echo base_url().'assets/favicon1.png';?>">
    <link rel="apple-touch-icon" href="<?php echo base_url().'assets/touch-icon-iphone.png';?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url().'assets/touch-icon-ipad.png';?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url().'assets/touch-icon-iphone-retina.png';?>">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo base_url().'assets/touch-icon-ipad-retina.png';?>">


    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="<?php echo css_url('vendor.min'); ?>">
    
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo css_url('styles'); ?>">
    
    
    
    <!-- style edit -->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo css_url('style1'); ?>">-->

    <!-- Modernizr-->
    <script src="<?php echo js_url('modernizr.min'); ?>"></script>
  
  </head>

  <!-- Body-->
  <body>
    
    <!-- Header-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="site-header navbar-sticky">

        <!-- Topbar-->
        <div class="topbar d-flex justify-content-between">
            <!-- Logo-->
            <div class="site-branding d-flex">
              <a class="site-logo align-self-center" href="<?php echo base_url(); ?>">
                <img style="width:100px; height:45px;" src="<?php echo img_url('logo/logosantepam.png'); ?>" alt="SantePam">
              </a>
            </div><!-- end of logo div -->

            <!-- Search / Categories-->
            <div class="search-box-wrap d-flex">
              <div class="search-box-inner align-self-center">
                <div class="search-box d-flex">
                    <div class="btn-group categories-btn">
                        <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-menu text-lg"></i>&nbsp;Catégories
                        </button>

                        <div class="dropdown-menu mega-dropdown">
                          <div class="row">
                            <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="<?php echo base_url().'accueil/getPharmacie'; ?>"><img class="d-block" src="<?php echo img_url('shop/header-categories/syringe.jpg'); ?>"><span class="text-gray-dark">Médicaments</span></a></div>
                            <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="<?php echo img_url('shop/header-categories/heart.jpg'); ?>"><span class="text-gray-dark">Centre hospitalier</span></a></div>
                            <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="<?php echo img_url('shop/header-categories/labo.jpg'); ?>"><span class="text-gray-dark">Laboratoire médical</span></a></div>
                            <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="<?php echo img_url('shop/header-categories/stethoscope.jpg'); ?>"><span class="text-gray-dark">Professionnel de santé</span></a></div>
                          </div>
                        </div>
                    </div>

                    <form class="input-group" method="get"><span class="input-group-btn">
                        <button type="submit"><i class="icon-search"></i></button></span>
                        <input class="form-control" type="search" placeholder="Recherche sur les médicaments, hôpitaux, médecins et plus encore">
                    </form>
                </div>
              </div>
            </div><!-- End of Search / Categories-->

            <!-- Toolbar-->
            <div class="toolbar d-flex">
                <div class="toolbar-item visible-on-mobile mobile-menu-toggle">
                    <a href="#">
                        <div><i class="icon-menu"></i><span class="text-label">Menu</span></div>
                    </a>
                </div>

                <!-- Contact -->
                <div class="toolbar-item hidden-on-mobile">
                    <a href="product-comparison.html">
                        <div>
                            <i class="icon-mail"></i><span class="text-label">Contact</span>
                        </div>
                    </a>
                </div><!-- End contact -->

                <!-- FAQ -->
                <div class="toolbar-item hidden-on-mobile">
                    <a href="product-comparison.html">
                        <div>
                            <i class="icon-help-circle"></i><span class="text-label">FAQ</span>
                        </div>
                    </a>
                </div><!-- End of FAQ -->

                <!-- sign up -->
                <div class="toolbar-item hidden-on-mobile">
                    

                    <a href="<?php echo base_url().'accueil/signup'; ?>">
                        <div><i class="icon-lock"></i><span class="text-label">Se connecter</span></div>
                    </a>

                    <div class="toolbar-dropdown text-center px-3">
                      <p class="text-xs mb-3 pt-2">Connectez-vous à votre compte ou enregistrez-en un nouveau pour faire connaitre les médicaments que vous avez en stock et/ou services médicaux. Participez à des forums de discussion et plus encore.</p><a class="btn btn-primary btn-sm btn-block" href="<?php echo base_url().'accueil/signup'; ?>">Se connecter</a>
                      <p class="text-xs text-muted mb-2">Nouvel utilisateur?&nbsp;<a href="<?php echo base_url().'accueil/signup'; ?>">S'enregistrer</a></p>
                    </div>
                </div>
            </div><!-- End of Toolbar-->

            <!-- Mobile Menu-->
            <div class="mobile-menu">
                <!-- Search Box for mobile-->
                <div class="mobile-search">
                    <form class="input-group" method="get">
                        <span class="input-group-btn">
                            <button type="submit"><i class="icon-search"></i></button>
                        </span>

                        <input class="form-control" type="search" placeholder="Recherche">
                    </form>
                </div><!-- end of search box for mobil-->

                <!-- Toolbar for mobile-->
                <div class="toolbar">
                    <div class="toolbar-item">
                        <a href="product-comparison.html">
                            <div>
                                <span class="icon-mail"></span>
                                <span class="text-label">Contact</span>
                            </div>
                        </a>
                    </div>

                    <div class="toolbar-item">
                        <a href="product-comparison.html">
                            <div>
                                <span class="icon-help-circle"></span>
                                <span class="text-label">FAQ</span>
                            </div>
                        </a>
                    </div>

                    <div class="toolbar-item">
                        <a href="<?php echo base_url().'accueil/signup'; ?>">
                            <div><i class="icon-user"></i><span class="text-label">Se connecter</span></div>
                        </a>
                    </div>
                </div><!-- Toolbar for mobile-->  

                <!--Nav Slideable (Mobile) Menu-->
                <nav class="slideable-menu">
                    <ul class="menu" data-initial-height="385">
                        <li class="active">
                            <span><a href="index.html">Accueil</a><span class="sub-menu-toggle"></span></span>
                        </li>

                        <li class="has-children"><span><a href="index.html">Recherche médicale</a><span class="sub-menu-toggle"></span></span>
                            <ul class="slideable-submenu">
                                <li class="active"><a href="index.html">Centre hospitalier</a></li>
                                <li><a href="<?php echo base_url().'accueil/getPharmacie'; ?>">Pharmacie</a></li>
                                <li><a href="home-featured-categories.html">Laboratoire</a></li>
                                <li><a href="home-featured-categories.html">Professionnel de santé</a></li>
                            </ul>
                        </li>

                        <li>
                            <span><a href="index.html">Forum</a><span class="sub-menu-toggle"></span></span>
                        </li>

                        <li>
                            <span><a href="index.html">A propos</a><span class="sub-menu-toggle"></span></span>
                        </li>
                    </ul>
                </nav><!--End of Nav Slideable (Mobile) Menu-->
            </div><!--End of Mobile Menu-->
        </div><!-- end of tobar -->

        <!-- Navbar-->
        <div class="navbar">
            <div class="btn-group categories-btn">
                <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-menu text-lg"></i>&nbsp;Catégories
                </button>

                <div class="dropdown-menu mega-dropdown">
                    <div class="row">
                      <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="<?php echo base_url().'accueil/getPharmacie'; ?>"><img class="d-block" src="<?php echo img_url('shop/header-categories/syringe.jpg'); ?>"><span class="text-gray-dark">Médicament</span></a></div>
                      <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="<?php echo base_url().'accueil/getPharmacie'; ?>"><img class="d-block" src="<?php echo img_url('shop/header-categories/heart.jpg'); ?>"><span class="text-gray-dark">Centre hospitalier</span></a></div>
                      <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="<?php echo base_url().'accueil/getPharmacie'; ?>"><img class="d-block" src="<?php echo img_url('shop/header-categories/stethoscope.jpg'); ?>"><span class="text-gray-dark">Professionnels de santé</span></a></div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation-->
            <nav class="site-menu">
                <ul>
                    <li class="has-submenu active">
                        <a href="index.html">Accueil</a>
                    </li>

                    <li class="has-submenu"><a href="index.html">Recherche médicale</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">Centre hospitalier</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url().'accueil/getPharmacie'; ?>">Pharmacie</a>  
                            </li>

                            <li>
                                <a href="home-featured-categories.html">Laboratoire médicale</a>  
                            </li>

                            <li>
                                <a href="home-featured-categories.html">Professionnels de santé</a>  
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="index.html">Forum</a>
                    </li>

                    <li class="has-submenu">
                        <a href="index.html">A propos</a>
                    </li>
                </ul>
            </nav><!-- End of Main Navigation-->
        </div><!-- End of navbar -->
    </header><!-- Header end -->
    