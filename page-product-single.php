<?php
/*
Template Name: Product-Single
*/

get_header();
?>


    <main>
        <section class="section section--tight" data-reveal>
            <div class="container">
                <nav class="breadcrumb" aria-label="Fil d'Ariane">
                    <a href="index.html">Accueil</a>
                    <span aria-hidden="true">›</span>
                    <a href="shop.html">Boutique</a>
                    <span aria-hidden="true">›</span>
                    <span aria-current="page">Panier vitaminé 8kg</span>
                </nav>
                <div class="product-detail" data-product-card data-product-id="panier-vitamine-8kg" data-product-name="Panier vitaminé 8kg" data-product-price="12500" data-product-image="images/product-1.jpg" data-product-url="product-single.html" data-product-category="Panier découverte">
                    <div class="product-gallery">
                        <img src="<?php echo wp_get_attachment_image_url(133, 'full'); ?>" alt="Panier vitaminé 8kg BioPanier">
                        <div class="product-gallery__thumbnails">
                            <img src="<?php echo wp_get_attachment_image_url(134, 'full'); ?>" alt="Fraises et kiwis">
                            <img src="<?php echo wp_get_attachment_image_url(135, 'full'); ?>" alt="Haricots verts frais">
                            <img src="<?php echo wp_get_attachment_image_url(140, 'full'); ?>" alt="Jus detox vert">
                            <!--die(var_dump("bonjour"));-->
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="badge badge--accent">Best-seller</span>
                        <h1>Panier vitaminé 8kg</h1>
                        <p class="product-info__intro">
                            Une sélection énergisante de fruits et légumes pour éveiller vos papilles et booster votre immunité.
                            Idéal pour une famille de 3 à 4 personnes pendant 4 jours.
                        </p>
                        <div class="product-meta">
                            <p class="price-label">
                                12&nbsp;500&nbsp;FCFA
                                <small>Livraison incluse à Yaoundé</small>
                            </p>
                            <div class="tag-list" data-product-tags>
                                <span class="tag">Semaine 22</span>
                                <span class="tag">Origine Cameroun</span>
                                <span class="tag">100&nbsp;% bio</span>
                            </div>
                            <div class="quantity-selector" data-quantity-selector>
                                <button type="button" aria-label="Diminuer la quantité" data-quantity-decrease>−</button>
                                <input type="number" value="1" min="1" aria-label="Quantité" data-quantity-input>
                                <button type="button" aria-label="Augmenter la quantité" data-quantity-increase>+</button>
                            </div>
                            <div class="product-card__actions">
                                <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter au panier</button>
                                <button class="btn btn--outline" type="button" data-buy-now>Commander maintenant</button>
                            </div>
                        </div>
                        <div class="composition">
                            <h2>Composition de la semaine</h2>
                            <ul class="list list--checks">
                                <li><span aria-hidden="true">✓</span> 1 kg de mangues Kent de Mbalmayo</li>
                                <li><span aria-hidden="true">✓</span> 1 kg d'ananas bouteille</li>
                                <li><span aria-hidden="true">✓</span> 1 kg de kiwi gold (Espagne)</li>
                                <li><span aria-hidden="true">✓</span> 1,5 kg d'haricots verts Obala</li>
                                <li><span aria-hidden="true">✓</span> 1 kg de carottes Arc-en-ciel</li>
                                <li><span aria-hidden="true">✓</span> 0,5 kg de gingembre frais bio</li>
                                <li><span aria-hidden="true">✓</span> 3 bouteilles de jus detox 250 ml</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="layout-panel">
                    <div class="layout-split">
                        <div>
                            <h2 class="section__title">Valeurs nutritionnelles</h2>
                            <p class="section__subtitle">Apports moyens pour une part de 400 g (hors jus)</p>
                            <div class="nutrition-grid">
                                <article class="nutrition-card">
                                    <h3>Énergie</h3>
                                    <p>215 kcal</p>
                                    <span>Seulement 3,5 g de lipides</span>
                                </article>
                                <article class="nutrition-card">
                                    <h3>Fibres</h3>
                                    <p>12 g</p>
                                    <span>48&nbsp;% des AJR conseillés</span>
                                </article>
                                <article class="nutrition-card">
                                    <h3>Vitamine C</h3>
                                    <p>92 mg</p>
                                    <span>115&nbsp;% des besoins quotidiens</span>
                                </article>
                                <article class="nutrition-card">
                                    <h3>Antioxydants</h3>
                                    <p>Score ORAC 5 800</p>
                                    <span>Très riche en flavonoïdes</span>
                                </article>
                            </div>
                        </div>
                        <div class="care-panel">
                            <h3>Conseils de conservation</h3>
                            <ul class="list">
                                <li>Conserver les fruits exotiques entre 10 et 12&nbsp;°C.</li>
                                <li>Les jus se gardent 3 jours au réfrigérateur après ouverture.</li>
                                <li>Consommer les haricots verts dans les 48 h pour préserver le croquant.</li>
                            </ul>
                            <p class="section__subtitle">Astuce cheffe&nbsp;: réalisez un pickles ananas-gingembre pour accompagner vos bowls.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Avis clients</span>
                    <h2 class="section__title">Ce qu'ils en pensent</h2>
                </header>
                <div class="testimonial-grid">
                    <article class="review-card">
                        <div class="review-card__meta">
                            <strong>Jacques · Yaoundé</strong>
                            <span>Note&nbsp;: ★★★★★</span>
                        </div>
                        <p class="review-card__body">«&nbsp;Les fruits sont incroyablement parfumés. La livraison arrive toujours à l'heure et le panier est très généreux.&nbsp;»</p>
                    </article>
                    <article class="review-card">
                        <div class="review-card__meta">
                            <strong>Claudia · Douala</strong>
                            <span>Note&nbsp;: ★★★★☆</span>
                        </div>
                        <p class="review-card__body">«&nbsp;J'adore la diversité des légumes. Je suggère d'ajouter une option sans gingembre pour les enfants.&nbsp;»</p>
                    </article>
                    <article class="review-card">
                        <div class="review-card__meta">
                            <strong>Raymond · Bonapriso</strong>
                            <span>Note&nbsp;: ★★★★★</span>
                        </div>
                        <p class="review-card__body">«&nbsp;Le rapport qualité-prix est excellent. Le support client est très réactif.&nbsp;»</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="layout-panel">
                    <header class="section__header">
                        <span class="section__eyebrow">Vous aimerez aussi</span>
                        <h2 class="section__title">Produits complémentaires</h2>
                    </header>
                    <div class="product-grid">
                        <article class="product-card" data-reveal data-product-card data-product-id="pack-soupes-glacees" data-product-name="Pack soupes glacées" data-product-price="8900" data-product-image="images/product-10.jpg" data-product-url="product-single.html" data-product-category="Soupe fraîche">
                            <div class="product-card__image">
                                <img src="<?php echo wp_get_attachment_image_url(142, 'full'); ?>" alt="Pack soupes glacées">
                            </div>
                            <div class="product-card__body">
                                <span class="product-card__category">Soupe fraîche</span>
                                <h3 class="product-card__title"><a href="product-single.html">Pack soupes glacées</a></h3>
                                <p>4 recettes saisonnières à déguster froides ou chaudes.</p>
                                <p class="product-card__price">8&nbsp;900&nbsp;FCFA</p>
                                <div class="product-card__actions">
                                    <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                    <a class="btn btn--outline" href="product-single.html">Détails</a>
                                </div>
                            </div>
                        </article>
                        <article class="product-card" data-reveal data-product-card data-product-id="granola-cacao-noix" data-product-name="Granola cacao &amp; noix" data-product-price="4700" data-product-image="images/product-9.jpg" data-product-url="product-single.html" data-product-category="Épicerie">
                            <div class="product-card__image">
                                <img src="<?php echo wp_get_attachment_image_url(141, 'full'); ?>" alt="Granola croustillant">
                            </div>
                            <div class="product-card__body">
                                <span class="product-card__category">Épicerie</span>
                                <h3 class="product-card__title"><a href="product-single.html">Granola cacao &amp; noix</a></h3>
                                <p>Sans sucre raffiné, enrichi en graines de chia.</p>
                                <p class="product-card__price">4&nbsp;700&nbsp;FCFA</p>
                                <div class="product-card__actions">
                                    <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                    <a class="btn btn--outline" href="product-single.html">Détails</a>
                                </div>
                            </div>
                        </article>
                        <article class="product-card" data-reveal data-product-card data-product-id="pack-detox-3-jours" data-product-name="Pack detox 3 jours" data-product-price="17500" data-product-image="images/product-8.jpg" data-product-url="product-single.html" data-product-category="Jus pressé">
                            <div class="product-card__image">
                                <img src="<?php echo wp_get_attachment_image_url(140, 'full'); ?>" alt="Pack detox">
                            </div>
                            <div class="product-card__body">
                                <span class="product-card__category">Jus pressé</span>
                                <h3 class="product-card__title"><a href="product-single.html">Pack detox 3 jours</a></h3>
                                <p>Combine parfaitement avec le panier vitaminé pour une semaine light.</p>
                                <p class="product-card__price">17&nbsp;500&nbsp;FCFA</p>
                                <div class="product-card__actions">
                                    <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                    <a class="btn btn--outline" href="product-single.html">Détails</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

<?php  get_footer(); ?>