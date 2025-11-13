<?php
/*
Template Name: Blog
*/

get_header();
?>

   <main>
        <section class="hero hero--sub">
            <img class="hero__background" src="<?php echo wp_get_attachment_image_url(111, 'full'); ?>" alt="">
            <div class="container">
                <div class="hero__content" data-reveal>
                    <span class="hero__eyebrow">Blog &amp; inspirations</span>
                    <h1 class="hero__title">Recettes de saison, portraits de producteurs et nutrition positive</h1>
                    <p class="hero__lead">Découvrez chaque semaine des conseils pratiques, des idées de menus et des innovations agroécologiques portées par la communauté BioPanier.</p>
                    <div class="hero__actions">
                        <a class="btn btn--primary" href="#articles">Voir les derniers articles</a>
                        <a class="btn btn--ghost" href="blog-single.html">Lire l'article à la une</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" id="articles" data-reveal>
            <div class="container">
                <div class="blog-highlight">
                    <article class="blog-highlight__content">
                        <span class="badge badge--accent">À la une</span>
                        <h2 class="section__title">Comment réduire son empreinte carbone en cuisinant local</h2>
                        <p class="section__subtitle">Moins de gaspillage, plus de goût. Découvrez les conseils de notre cheffe Alima et les astuces des producteurs pour cuisiner durablement.</p>
                        <div class="blog-meta">
                            <span>Publié le 15 mai 2024</span>
                            <span>12 min de lecture</span>
                        </div>
                        <a class="btn btn--primary" href="blog-single.html">Lire l'article</a>
                    </article>
                    <div class="blog-highlight__media">
                        <img src="<?php echo wp_get_attachment_image_url(113, 'full'); ?>" alt="Cheffe cuisinant des légumes">
                    </div>
                </div>
            </div>
        </section>

        <section class="section" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Derniers articles</span>
                    <h2 class="section__title">Ce que nous publions en ce moment</h2>
                </header>
                <div class="blog-grid">
                    <article class="blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_1.jpg" alt="Smoothies verts alignés">
                        <div class="blog-card__body">
                            <h3><a href="blog-single.html">3 smoothies verts pour booster votre matinée</a></h3>
                            <p>Des recettes rapides, riches en fibres et adaptées aux produits du panier vitaminé.</p>
                            <div class="blog-meta">
                                <span>Recettes</span>
                                <span>8 min de lecture</span>
                            </div>
                        </div>
                    </article>
                    <article class="blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_2.jpg" alt="Producteurs au champ">
                        <div class="blog-card__body">
                            <h3><a href="blog-single.html">Portrait · Rosine, productrice à Nkometou</a></h3>
                            <p>Elle cultive des légumes-feuilles en agroforesterie et forme d'autres agriculteurs.</p>
                            <div class="blog-meta">
                                <span>Portraits</span>
                                <span>6 min de lecture</span>
                            </div>
                        </div>
                    </article>
                    <article class="blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_3.jpg" alt="Légumes grillés dans un plat">
                        <div class="blog-card__body">
                            <h3><a href="blog-single.html">Meal prep d'été&nbsp;: 5 idées prêtes en 30 minutes</a></h3>
                            <p>Des plats colorés et équilibrés avec les légumes disponibles cette semaine.</p>
                            <div class="blog-meta">
                                <span>Organisation</span>
                                <span>10 min de lecture</span>
                            </div>
                        </div>
                    </article>
                    <article class="blog-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_4.jpg" alt="Chef cuisinier en cuisine professionnelle">
                        <div class="blog-card__body">
                            <h3><a href="blog-single.html">Partenaires foodservice&nbsp;: nos 3 dernières innovations</a></h3>
                            <p>Nouveaux formats de paniers, carte saisonnière et logistique verte sur mesure.</p>
                            <div class="blog-meta">
                                <span>Professionnels</span>
                                <span>7 min de lecture</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="layout-panel">
                    <div class="layout-split">
                        <div>
                            <span class="badge">Catégories</span>
                            <ul class="tag-list blog-tags">
                                <li><a class="tag" href="#">Recettes</a></li>
                                <li><a class="tag" href="#">Nutrition</a></li>
                                <li><a class="tag" href="#">Producteurs</a></li>
                                <li><a class="tag" href="#">Logistique</a></li>
                                <li><a class="tag" href="#">Impact</a></li>
                                <li><a class="tag" href="#">Corporate</a></li>
                            </ul>
                        </div>
                        <div class="newsletter-widget">
                            <h3>Recevez le digest du jeudi</h3>
                            <p>Nos meilleurs articles, menus de saison, podcasts et bons plans partenaires.</p>
                            <form class="newsletter-card__form" action="#" method="post">
                                <label class="sr-only" for="blog-news-email">Adresse e-mail</label>
                                <div class="input-group">
                                    <input id="blog-news-email" type="email" placeholder="prenom@exemple.com" required>
                                </div>
                                <button class="btn btn--primary" type="submit">Je m'abonne</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>