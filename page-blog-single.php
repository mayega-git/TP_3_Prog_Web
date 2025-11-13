<?php
/*
Template Name: Blog-Single
*/

get_header();
?>
<main>
        <section class="section section--tight" data-reveal>
            <div class="container">
                <nav class="breadcrumb" aria-label="Fil d'Ariane">
                    <a href="index.html">Accueil</a>
                    <span aria-hidden="true">›</span>
                    <a href="blog.html">Blog</a>
                    <span aria-hidden="true">›</span>
                    <span aria-current="page">Réduire son empreinte carbone en cuisinant local</span>
                </nav>
                <div class="article-layout">
                    <article class="article">
                        <header class="article__header">
                            <span class="badge badge--accent">Impact</span>
                            <h1>Réduire son empreinte carbone en cuisinant local</h1>
                            <div class="article__meta">
                                <span>15 mai 2024</span>
                                <span>12 minutes de lecture</span>
                            </div>
                        </header>
                            <div>
                                    <img src="<?php echo wp_get_attachment_image_url(113, 'full'); ?>" alt="Cheffe cuisinant des légumes locaux">
                                    <p>Adopter une cuisine responsable ne signifie pas renoncer au plaisir gustatif. Chez BioPanier, nous accompagnons plus de 12&nbsp;000 familles et 80 restaurants à travers le Cameroun pour élaborer des menus qui respectent la planète tout en sublimant les produits du terroir.</p>

                                    <h2>1. Valoriser les circuits ultra-courts</h2>
                                    <p>En choisissant des produits issus de fermes situées à moins de 150 km, vous réduisez drastiquement l'empreinte carbone liée au transport. Grâce à notre hub logistique, nous mutualisons les trajets de livraison et limitons les retours à vide.</p>

                                    <blockquote>«&nbsp;Chaque panier livré représente 1,2 kg de CO₂ économisé par rapport à une chaîne conventionnelle&nbsp;» — Boris Ngoa, Lead logistique.</blockquote>

                                    <h3>Conseils à mettre en place</h3>
                                    <ul>
                                        <li>Privilégiez une organisation hebdomadaire de vos menus pour limiter les achats impulsifs.</li>
                                        <li>Transformez les surplus en bocaux : pickles, pestos, confitures.</li>
                                        <li>Optimisez votre frigo en respectant les zones de température (laitages en haut, légumes en bas).</li>
                                    </ul>

                                    <h2>2. Cuisiner les légumes de saison</h2>
                                    <p>Nos fiches de saisonnalité vous aident à identifier les meilleures périodes pour savourer chaque produit. Une aubergine récoltée sous serre hors saison peut générer jusqu'à 4 fois plus d'émissions qu'une aubergine d'été.</p>

                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image_3.jpg" alt="Assiette de légumes grillés de saison">

                                    <p>Penser local, c'est également encourager la biodiversité. Nos producteurs cultivent différentes variétés pour renforcer la résilience face aux aléas climatiques. En cuisine, cela se traduit par des couleurs et des textures variées.</p>

                                    <h2>3. Passer en énergie verte</h2>
                                    <p>Installer des plaques à induction, utiliser des fours éco-performants, favoriser la cuisson à la vapeur douce sont autant d'actions qui réduisent la consommation énergétique. Retrouvez dans notre kit de transition une checklist pour évaluer vos équipements.</p>

                                    <!-- <div class="article__cta">
                                        <h3>Téléchargez notre guide transition cuisine durable</h3>
                                        <p>Un PDF de 20 pages avec des recettes, des conseils pratico-pratiques et des retours d'expérience de nos partenaires.</p>
                                        <a class="btn btn--primary" href="#">Télécharger le guide</a>
                                    </div>

                                    <h2>4. Réduire le gaspillage à la source</h2>
                                    <p>Avec notre programme «&nbsp;Zéro déchet&nbsp;», nous livrons des fiches anti-gaspi personnalisées à partir des produits reçus. Par exemple, les épluchures de carottes se transforment en chips croustillantes au four, et les fanes en pesto minute.</p>

                                    <p>En adoptant ces pratiques, vous contribuez à une économie locale plus juste tout en gagnant en créativité culinaire. Partagez vos recettes sur Instagram avec <strong>#BioPanierZeroWaste</strong> pour inspirer la communauté.</p> -->

                            </div>
                        <footer class="article__footer">
                            <div class="article__author">
                                <img src="<?php echo wp_get_attachment_image_url(131, 'full'); ?>" alt="Portrait de l'autrice Alima Kane">
                                <div>
                                    <strong>Alima Kane</strong>
                                    <span>Cheffe nutritionniste · Co-fondatrice BioPanier</span>
                                </div>
                            </div>
                            <div class="article__share">
                                <span>Partager&nbsp;:</span>
                                <a href="#">WhatsApp</a>
                                <a href="#">LinkedIn</a>
                                <a href="#">Facebook</a>
                            </div>
                        </footer>
                    </article>

                    <aside class="article-sidebar" aria-label="Compléments de lecture">
                        <section class="sidebar-section" data-reveal>
                            <h2>Articles recommandés</h2>
                            <div class="related-articles">
                                <article>
                                    <a href="blog-single.html">Meal prep d'été&nbsp;: 5 idées prêtes en 30 minutes</a>
                                    <span>Organisation · 10 min</span>
                                </article>
                                <article>
                                    <a href="blog-single.html">Smoothies verts&nbsp;: recettes prêtes en 5 minutes</a>
                                    <span>Recettes · 8 min</span>
                                </article>
                                <article>
                                    <a href="blog-single.html">Transition agroécologique&nbsp;: le témoignage de Rosine</a>
                                    <span>Portraits · 6 min</span>
                                </article>
                            </div>
                        </section>

                        <section class="sidebar-section" data-reveal>
                            <h2>Podcast</h2>
                            <div class="podcast-card">
                                <strong>Episode 14 · Cuisine basse empreinte</strong>
                                <p>Écoutez Rosine et Alima discuter recettes low waste et organisation.</p>
                                <button class="btn btn--outline" type="button">Écouter l'épisode</button>
                            </div>
                        </section>

                        <section class="sidebar-section sidebar-newsletter" data-reveal>
                            <h2>Restez inspiré·e</h2>
                            <p>Un email chaque jeudi avec nos articles, ateliers et bons plans partenaires.</p>
                            <form class="newsletter-card__form" action="#" method="post">
                                <label class="sr-only" for="single-news-email">Adresse e-mail</label>
                                <div class="input-group">
                                    <input id="single-news-email" type="email" placeholder="prenom@exemple.com" required>
                                </div>
                                <button class="btn btn--primary" type="submit">S'abonner</button>
                            </form>
                        </section>
                    </aside>
                </div>
            </div>
        </section>


<?php  get_footer(); ?>