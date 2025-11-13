
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BioPanier | Fruits et légumes biologiques livrés frais</title>
    <meta name="description" content="BioPanier propose des paniers de fruits et légumes biologiques, cueillis à maturité et livrés sous 24 heures dans tout le Cameroun.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-complete_index.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-complete_about.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-complete_blog.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-complete_blog-single.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-complete_product-single.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-complete_shop.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-complete_cart.css">



    <?php wp_head(); ?>
</head>
<body class="page-home" <?php body_class('goto-here'); ?>>
    <div class="top-bar" role="presentation">
        <div class="container top-bar__inner">
            <div class="top-bar__group">
                <span aria-hidden="true">📞</span>
                <span>+237 695 25 45 78</span>
            </div>
            <div class="top-bar__group">
                <span aria-hidden="true">✉️</span>
                <a href="mailto:hello@BioPanier.cm">hello@BioPanier.cm</a>
            </div>
            <div class="top-bar__group">
                <span aria-hidden="true">🚚</span>
                <span>Livraison express &amp; retours offerts</span>
            </div>
        </div>
    </div>

    <header class="site-header">
        <div class="container site-header__inner">
            <a class="site-brand" href="<?php echo home_url('/'); ?>">BioPanier</a>
            <button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="site-nav">
                <span class="sr-only">Basculer la navigation</span>
                <span class="nav-toggle__line"></span>
            </button>
            <nav class="site-nav" id="site-nav" data-nav>
                <ul class="site-nav__list">
                    <li><a class="site-nav__link" href="<?php echo home_url('/'); ?>" aria-current="page">Accueil</a></li>
                    <li><a class="site-nav__link" href="<?php echo home_url('/shop'); ?>">Boutique</a></li>
                    <li><a class="site-nav__link" href="<?php echo home_url('/about'); ?>">À propos</a></li>
                    <li><a class="site-nav__link" href="<?php echo home_url('/Blog'); ?>">Blog</a></li>
                    <li><a class="site-nav__link" href="<?php echo home_url('/Contact'); ?>">Contact</a></li>
                </ul>
                <a class="site-nav__cta" href="<?php echo home_url('/Cart'); ?>">
                    Panier
                    <span class="site-nav__badge" aria-label="0 articles dans le panier" data-cart-count>0</span>
                </a>
            </nav>
           </div>
    </header>
    