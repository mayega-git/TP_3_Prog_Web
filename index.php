<?php get_header(); ?>

 </div>
</header>

    <main>
        <section class="hero hero--home">
            <img class="hero__background" src="<?php echo wp_get_attachment_image_url(176, 'full'); ?>" alt="">
            <div class="container">
                <div class="hero__content" data-reveal>
                    <span class="hero__eyebrow">Agriculture régénérative</span>
                    <h1 class="hero__title">Des fruits et légumes bio, récoltés le matin et livrés le soir.</h1>
                    <p class="hero__lead">
                        Nous collaborons avec 35 fermes partenaires autour de Yaoundé pour offrir une alimentation saine,
                        locale et respectueuse de la planète.
                    </p>
                    <div class="hero__actions">
                        <a class="btn btn--primary" href="<?php echo home_url('/Contact'); ?>">Découvrir la boutique</a>
                        <a class="btn btn--ghost" href="<?php echo home_url('/about'); ?>">Visiter nos fermes</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Nos engagements</span>
                    <h2 class="section__title">Une expérience ultra-fraîche pensée pour les épicuriens responsables</h2>
                    <p class="section__subtitle">
                        Du champ à votre table, nous maîtrisons chaque étape de la chaîne du froid pour préserver la qualité
                        nutritive et organoleptique de chaque produit.
                    </p>
                </header>
                <div class="card-grid">
                    <article class="card">
                        <span class="card__icon" aria-hidden="true">🚜</span>
                        <h3 class="card__title">Cueilli sur commande</h3>
                        <p class="card__body">Vos paniers sont récoltés à l'aube pour garantir un maximum de fraîcheur et de vitamines.</p>
                    </article>
                    <article class="card">
                        <span class="card__icon" aria-hidden="true">🧊</span>
                        <h3 class="card__title">Chaîne du froid contrôlée</h3>
                        <p class="card__body">Nos véhicules isothermes maintiennent 4&nbsp;°C durant toute la livraison.</p>
                    </article>
                    <article class="card">
                        <span class="card__icon" aria-hidden="true">🥗</span>
                        <h3 class="card__title">Menus inspirants</h3>
                        <p class="card__body">Recevez chaque semaine une fiche recette équilibrée élaborée par notre cheffe Alima.</p>
                    </article>
                    <article class="card">
                        <span class="card__icon" aria-hidden="true">♻️</span>
                        <h3 class="card__title">Impact mesuré</h3>
                        <p class="card__body">Nous réutilisons 92&nbsp;% de nos emballages et compensons chaque livraison à 200&nbsp;%.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Explorez nos familles</span>
                    <h2 class="section__title">Des produits pour chaque moment de la journée</h2>
                </header>
                <div class="category-grid">
                    <article class="category-card">
                        <img class="category-card__img" src="<?php echo wp_get_attachment_image_url(114, 'full'); ?>" alt="Fruits colorés disposés sur une table">
                        <div class="category-card__content">
                            <h3 class="category-card__title">Fruits vitaminés</h3>
                            <p>Kiwi, ananas, papaye, mangue&nbsp;: faites le plein d'énergie dès le matin.</p>
                            <a class="pill" href="<?php echo home_url('/Shop'); ?>">Voir la sélection</a>
                        </div>
                    </article>
                    <article class="category-card">
                        <img class="category-card__img" src="<?php echo wp_get_attachment_image_url(115, 'full'); ?>" alt="Légumes verts">
                        <div class="category-card__content">
                            <h3 class="category-card__title">Légumes de saison</h3>
                            <p>Des récoltes tournantes pour cuisiner selon le cycle des saisons.</p>
                            <a class="pill" href="<?php echo home_url('/Shop'); ?>">Composer un panier</a>
                        </div>
                    </article>
                    <article class="category-card">
                        <img class="category-card__img" src="<?php echo wp_get_attachment_image_url(116, 'full'); ?>" alt="Bouteilles de jus naturel">
                        <div class="category-card__content">
                            <h3 class="category-card__title">Jus pressés</h3>
                            <p>Des jus cold-press sans sucres ajoutés, parfaits pour la pause detox.</p>
                            <a class="pill" href="<?php echo home_url('/Shop'); ?>">Commander mes jus</a>
                        </div>
                    </article>
                    <article class="category-card">
                        <img class="category-card__img" src="<?php echo wp_get_attachment_image_url(117, 'full'); ?>" alt="Fruits et légumes séchés">
                        <div class="category-card__content">
                            <h3 class="category-card__title">Sélection gourmande</h3>
                            <p>Fruits séchés, chips de plantain, confitures artisanales et condiments.</p>
                            <a class="pill" href="<?php echo home_url('/Shop'); ?>">Faire le plein</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="layout-panel">
                    <div class="stat-grid">
                        <div class="stat-card">
                            <p class="stat-card__value">35</p>
                            <p class="stat-card__label">Producteurs partenaires</p>
                        </div>
                        <div class="stat-card">
                            <p class="stat-card__value">24 h</p>
                            <p class="stat-card__label">Du champ à votre assiette</p>
                        </div>
                        <div class="stat-card">
                            <p class="stat-card__value">12&nbsp;000</p>
                            <p class="stat-card__label">Familles livrées en 2023</p>
                        </div>
                        <div class="stat-card">
                            <p class="stat-card__value">92&nbsp;%</p>
                            <p class="stat-card__label">Clients satisfaits</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Produits en vedette</span>
                    <h2 class="section__title">Nos best-sellers de la semaine</h2>
                    <p class="section__subtitle">Disponibles en quantité limitée. Tous les prix incluent la livraison dans Yaoundé et Douala.</p>
                </header>
                <div class="product-grid">
                    <article class="product-card" data-reveal data-product-card data-product-id="panier-vitamine-8kg" data-product-name="Panier vitaminé 8kg" data-product-price="12500" data-product-image="images/product-1.jpg" data-product-url="product-single.html" data-product-category="Panier découverte">
                        <div class="product-card__image">
                            <img src="<?php echo wp_get_attachment_image_url(133, 'full'); ?>" alt="Panier de poivrons rouges et verts">
                        </div>
                        <div class="product-card__body">
                            <span class="product-card__category">Panier découverte</span>
                            <h3 class="product-card__title"><a href="product-single.html">Panier vitaminé 8kg</a></h3>
                            <p>Un assortiment de fruits exotiques à partager en famille.</p>
                            <p class="product-card__price">12&nbsp;500&nbsp;FCFA</p>
                            <div class="product-card__actions">
                                <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                <a class="btn btn--outline" href="product-single.html">Voir détails</a>
                            </div>
                        </div>
                    </article>
                    <article class="product-card" data-reveal data-product-card data-product-id="box-famille-veggie" data-product-name="Box famille veggie" data-product-price="15900" data-product-image="images/product-5.jpg" data-product-url="product-single.html" data-product-category="Box hebdo">
                        <div class="product-card__image">
                            <img src="<?php echo wp_get_attachment_image_url(137, 'full'); ?>" alt="Salade verte avec tomates cerises">
                        </div>
                        <div class="product-card__body">
                            <span class="product-card__category">Box hebdo</span>
                            <h3 class="product-card__title"><a href="product-single.html">Box famille veggie</a></h3>
                            <p>14 variétés de légumes bio pour 5 repas complets.</p>
                            <p class="product-card__price">15&nbsp;900&nbsp;FCFA</p>
                            <div class="product-card__actions">
                                <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                <a class="btn btn--outline" href="product-single.html">Voir détails</a>
                            </div>
                        </div>
                    </article>
                    <article class="product-card" data-reveal data-product-card data-product-id="haricots-verts-croquants" data-product-name="Haricots verts croquants" data-product-price="2400" data-product-image="images/product-3.jpg" data-product-url="product-single.html" data-product-category="Primeur">
                        <div class="product-card__image">
                            <img src="<?php echo wp_get_attachment_image_url(135, 'full'); ?>" alt="Haricots verts frais">
                        </div>
                        <div class="product-card__body">
                            <span class="product-card__category">Primeur</span>
                            <h3 class="product-card__title"><a href="product-single.html">Haricots verts croquants</a></h3>
                            <p>Récoltés à Obala, conditionnés sous 2 heures.</p>
                            <p class="product-card__price">2&nbsp;400&nbsp;FCFA / kg</p>
                            <div class="product-card__actions">
                                <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                <a class="btn btn--outline" href="product-single.html">Voir détails</a>
                            </div>
                        </div>
                    </article>
                    <article class="product-card" data-reveal data-product-card data-product-id="pack-detox-3-jours" data-product-name="Pack detox 3 jours" data-product-price="17500" data-product-image="images/product-8.jpg" data-product-url="product-single.html" data-product-category="Atelier jus">
                        <div class="product-card__image">
                            <img src="<?php echo wp_get_attachment_image_url(140, 'full'); ?>" alt="Bouteilles de jus">
                        </div>
                        <div class="product-card__body">
                            <span class="product-card__category">Atelier jus</span>
                            <h3 class="product-card__title"><a href="product-single.html">Pack detox 3 jours</a></h3>
                            <p>Six jus pressés à froid et deux shots booster au gingembre.</p>
                            <p class="product-card__price">17&nbsp;500&nbsp;FCFA</p>
                            <div class="product-card__actions">
                                <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                <a class="btn btn--outline" href="product-single.html">Voir détails</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="layout-split">
                    <div class="layout-panel">
                        <span class="badge badge--accent">Pourquoi BioPanier&nbsp;?</span>
                        <h2 class="section__title">Une coopérative digitale qui valorise les petits producteurs</h2>
                        <p>Notre équipe accompagne les agriculteurs dans la transition agroécologique et garantit un revenu juste grâce à des contrats pluriannuels.</p>
                        <ul class="list list--checks">
                            <li><span aria-hidden="true">✓</span> Certification en cours avec Ecocert et ACT All Africa.</li>
                            <li><span aria-hidden="true">✓</span> Audit qualité hebdomadaire sur la maturité, la texture et le goût.</li>
                            <li><span aria-hidden="true">✓</span> Programme anti-gaspillage avec revente aux cantines partenaires.</li>
                        </ul>
                        <div class="hero__actions home-highlight__actions">
                            <a class="btn btn--primary" href="<?php echo home_url('/about'); ?>">Rencontrer les producteurs</a>
                        </div>
                    </div>
                    <div class="layout-panel layout-panel--media">
                        <img src="<?php echo wp_get_attachment_image_url(128, 'full'); ?>" alt="Producteurs BioPanier récoltant des légumes">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Nouveautés du blog</span>
                    <h2 class="section__title">Conseils nutrition et recettes de saison</h2>
                </header>
                <div class="card-grid">
                    <article class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_1.jpg" alt="Bol de smoothies colorés">
                        <h3 class="card__title"><a href="<?php echo home_url('/blog-single'); ?>">Smoothies verts&nbsp;: 3 recettes prêtes en 5 minutes</a></h3>
                        <p class="card__body">Notre cheffe vous partage ses combinaisons préférées pour booster votre énergie sans sucre ajouté.</p>
                        <a class="pill" href="<?php echo home_url('/blog-single'); ?>">Lire l'article</a>
                    </article>
                    <article class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_3.jpg" alt="Assiette de légumes grillés">
                        <h3 class="card__title"><a href="<?php echo home_url('/blog-single'); ?>">Cuisiner les légumes oubliés du terroir camerounais</a></h3>
                        <p class="card__body">Djéka, morelle noire, macabo&nbsp;: on vous guide pour les sublimer dans des plats modernes.</p>
                        <a class="pill" href="<?php echo home_url('/blog-single'); ?>">Lire l'article</a>
                    </article>
                    <article class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_2.jpg" alt="Fermier dans son champ">
                        <h3 class="card__title"><a href="<?php echo home_url('/blog-single'); ?>">Comment nous réduisons de 47&nbsp;% l'empreinte carbone</a></h3>
                        <p class="card__body">Process logistique, emballages réutilisables, sensibilisation clients&nbsp;: découvrez nos actions concrètes.</p>
                        <a class="pill" href="<?php echo home_url('/blog-single'); ?>">Lire l'article</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--tight">
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Ils nous font confiance</span>
                    <h2 class="section__title">Ce que disent nos clients</h2>
                </header>
                <div class="testimonial-grid">
                    <article class="testimonial-card">
                        <p class="testimonial-card__quote">«&nbsp;Les paniers BioPanier ont transformé notre cantine d'entreprise. Les salariés adorent la diversité et on réduit nos déchets alimentaires.&nbsp;»</p>
                        <p class="testimonial-card__author">Clarisse, Responsable RSE chez Nexttel</p>
                    </article>
                    <article class="testimonial-card">
                        <p class="testimonial-card__quote">«&nbsp;Je suis impressionnée par la fraîcheur des produits. Même mes enfants redemandent des légumes verts&nbsp;!&nbsp;»</p>
                        <p class="testimonial-card__author">Awa, maman de trois enfants</p>
                    </article>
                    <article class="testimonial-card">
                        <p class="testimonial-card__quote">«&nbsp;Le pack detox m'aide à relancer mon énergie après mes séances intensives. Livraison ponctuelle et service client impeccable.&nbsp;»</p>
                        <p class="testimonial-card__author">Loïc, coach sportif</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--tight">
            <div class="container">
                <div class="layout-panel">
                    <header class="section__header home-partners__header">
                        <span class="section__eyebrow">Ils cuisinent avec nous</span>
                        <h2 class="section__title">Chefs, hôtels et traiteurs partenaires</h2>
                        <p class="section__subtitle">Des professionnels de la gastronomie qui comptent sur BioPanier pour une qualité constante.</p>
                    </header>
                    <div class="partner-rail">
                        <img src="<?php echo wp_get_attachment_image_url(124, 'full'); ?>" alt="Restaurant Le Safoutier">
                        <img src="<?php echo wp_get_attachment_image_url(125, 'full'); ?>" alt="Traiteur Green Table">
                        <img src="<?php echo wp_get_attachment_image_url(126, 'full'); ?>" alt="Chef Academy">
                        <img src="<?php echo wp_get_attachment_image_url(127, 'full'); ?>" alt="Hôtel Mont Febe">
                        <img src="<?php echo wp_get_attachment_image_url(128, 'full'); ?>" alt="Collectif Bio Cameroun">
                    </div>
                </div>
            </div>
        </section>

        <section class="section" data-reveal>
            <div class="container">
                <div class="newsletter-card">
                    <div>
                        <h2 class="newsletter-card__title">Recevez chaque jeudi nos suggestions de menus et promos privées</h2>
                        <p>Un email par semaine, pas de spam. Bonus&nbsp;: un ebook de 10 recettes végétales signé par la cheffe Alima.</p>
                    </div>
                    <form class="newsletter-card__form" action="#" method="post">
                        <label class="sr-only" for="newsletter-email">Adresse e-mail</label>
                        <div class="input-group">
                            <input id="newsletter-email" type="email" name="email" placeholder="votrenom@email.com" required>
                        </div>
                        <button class="btn btn--primary" type="submit">Je m'inscris</button>
                    </form>
                </div>
            </div>
        </section>

<?php get_footer(); ?>