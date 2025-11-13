<?php
/*
Template Name: About
*/

get_header();
?>

   

<main>
<section class="hero hero--sub">
            <img class="hero__background" src="<?php echo wp_get_attachment_image_url(111, 'full'); ?>" alt="">
            <div class="container">
                <div class="hero__content" data-reveal>
                    <span class="hero__eyebrow">Notre raison dêtre</span>
                    <h1 class="hero__title">Construire la chaîne alimentaire la plus transparente du Cameroun</h1>
                    <p class="hero__lead">
                        BioPanier relie des producteurs engagés et des familles exigeantes grâce à un modèle coopératif,
                        traçable et à impact positif.
                    </p>
                    <div class="hero__actions">
                        <a class="btn btn--primary" href="contact.html">Planifier une visite de ferme</a>
                        <a class="btn btn--ghost" href="#timeline">Voir nos jalons</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" data-reveal>
            <div class="container">
                <div class="layout-split">
                    <div class="layout-panel">
                        <span class="badge">Depuis 2019</span>
                        <h2 class="section__title">Une coopérative née sur les collines de Nkolbisson</h2>
                        <p>
                            En 2019, trois amis agronomes et une cheffe nutritionniste fondent BioPanier pour répondre
                            à un double défi&nbsp;: rémunérer justement les producteurs et offrir aux citadins une
                            alimentation ultra-fraîche.
                        </p>
                        <p>
                            Aujourd"\'"hui, nous accompagnons 35 fermes sur les axes Yaoundé, Mbalmayo et Obala avec des
                            contrats stables, des formations agroécologiques et un accès partagé à la logistique froide.
                        </p>
                        <ul class="list list--checks">
                            <li><span aria-hidden="true">✓</span> Traçabilité intégrale via notre plateforme numérique.</li>
                            <li><span aria-hidden="true">✓</span> Prime qualité garantie pour chaque parcelle certifiée.</li>
                            <li><span aria-hidden="true">✓</span> 1&nbsp;% du chiffre daffaires reversé au fonds semences.</li>
                        </ul>
                    </div>
                    <div class="layout-panel">
                        <h3 class="section__title">Un modèle coopératif éprouvé</h3>
                        <p class="section__subtitle">
                            Nos productrices et producteurs siègent au comité stratégique BioPanier pour co-construire la
                            feuille de route et partager les revenus.
                        </p>
                        <div class="timeline" id="timeline">
                            <div class="timeline__item">
                                <h4>2019 · Premiers paniers solidaires</h4>
                                <p>10 familles pionnières à Yaoundé reçoivent nos paniers en circuit court.</p>
                            </div>
                            <div class="timeline__item">
                                <h4>2020 · Lancement du hub logistique</h4>
                                <p>Ouverture de notre plateforme isotherme et recrutement de chauffeurs formés.</p>
                            </div>
                            <div class="timeline__item">
                                <h4>2022 · Extension à Douala</h4>
                                <p>Partenariat avec des coopératives littorales pour diversifier les produits.</p>
                            </div>
                            <div class="timeline__item">
                                <h4>2023 · Programme Impact 2030</h4>
                                <p>Objectif zéro gaspillage et certification B-Corp en cours de validation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Nos piliers</span>
                    <h2 class="section__title">Une organisation responsable à 360°</h2>
                    <p class="section__subtitle">Qualité, justice sociale, data et pédagogie sont les quatre axes qui orientent chacune de nos décisions.</p>
                </header>
                <div class="card-grid">
                    <article class="card">
                        <span class="card__icon" aria-hidden="true">🧪</span>
                        <h3 class="card__title">Qualité sensorielle</h3>
                        <p class="card__body">Dégustations hebdomadaires, analyses Brix et traçabilité complète des parcelles.</p>
                    </article>
                    <article class="card">
                        <span class="card__icon" aria-hidden="true">🤝</span>
                        <h3 class="card__title">Justice sociale</h3>
                        <p class="card__body">Prix planchers révisés chaque trimestre et accès mutualisé aux intrants bio.</p>
                    </article>
                    <article class="card">
                        <span class="card__icon" aria-hidden="true">📊</span>
                        <h3 class="card__title">Pilotage par la donnée</h3>
                        <p class="card__body">Suivi en temps réel des récoltes et prévisions pour limiter la surproduction.</p>
                    </article>
                    <article class="card">
                        <span class="card__icon" aria-hidden="true">🎓</span>
                        <h3 class="card__title">Éducation nutritive</h3>
                        <p class="card__body">Workshops, fiches pédagogiques et accompagnement des cantines scolaires.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section" data-reveal>
            <div class="container">
                <div class="layout-panel layout-panel--accent">
                    <div class="layout-split">
                        <div>
                            <span class="badge badge--accent">Impact 2030</span>
                            <h2 class="section__title">Notre feuille de route climat &amp; biodiversité</h2>
                            <p>Nous visons une empreinte carbone divisée par deux dici 2026 grâce à la logistique verte, la production dénergie solaire et la mutualisation des livraisons.</p>
                            <ul class="list list--checks">
                                <li><span aria-hidden="true">✓</span> 15&nbsp;000 arbres agroforestiers plantés avec nos coopératives.</li>
                                <li><span aria-hidden="true">✓</span> Conversion de 60&nbsp;% de nos véhicules à lélectrique.</li>
                                <li><span aria-hidden="true">✓</span> Programme de compostage partagé pour 20 villes.</li>
                            </ul>
                        </div>
                        <div class="impact-cards">
                            <article class="impact-card">
                                <h3>+28&nbsp;%</h3>
                                <p>de revenu moyen par agriculteur depuis 2021.</p>
                            </article>
                            <article class="impact-card">
                                <h3>3&nbsp;500</h3>
                                <p>élèves sensibilisés à lalimentation durable.</p>
                            </article>
                            <article class="impact-card">
                                <h3>0 gaspillage</h3>
                                <p>Tous nos invendus sont transformés en jus, soupes ou dons solidaires.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">L'équipe</span>
                    <h2 class="section__title">Des passionnés de terroir et d'innovation</h2>
                    <p class="section__subtitle">BioPanier rassemble des experts de lagronomie, de la logistique et de la gastronomie.</p>
                </header>
                <div class="team-grid">
                    <article class="profile-card">
                        <img src="<?php echo wp_get_attachment_image_url(131, 'full'); ?>" alt="Portrait de Salomé">
                        <div class="profile-card__body">
                            <h3 class="profile-card__name">Salomé Douala</h3>
                            <p class="profile-card__role">Co-fondatrice · Directrice des opérations</p>
                        </div>
                    </article>
                    <article class="profile-card">
                        <img src="<?php echo wp_get_attachment_image_url(129, 'full'); ?>" alt="Portrait de Roland">
                        <div class="profile-card__body">
                            <h3 class="profile-card__name">Roland Ndedi</h3>
                            <p class="profile-card__role">Responsable agroécologie</p>
                        </div>
                    </article>
                    <article class="profile-card">
                        <img src="<?php echo wp_get_attachment_image_url(131, 'full'); ?>" alt="Portrait d'Alima">
                        <div class="profile-card__body">
                            <h3 class="profile-card__name">Alima Kane</h3>
                            <p class="profile-card__role">Cheffe nutritionniste</p>
                        </div>
                    </article>
                    <article class="profile-card">
                        <img src="<?php echo wp_get_attachment_image_url(132, 'full'); ?>" alt="Portrait de Boris">
                        <div class="profile-card__body">
                            <h3 class="profile-card__name">Boris Ngoa</h3>
                            <p class="profile-card__role">Lead logistique &amp; data</p>
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
                            <h2 class="section__title">Envie de rejoindre laventure&nbsp;?</h2>
                            <p>Nous recrutons des profils passionnés par lagriculture durable, la relation producteurs et la logistique responsable.</p>
                            <div class="hero__actions">
                                <a class="btn btn--primary" href="contact.html">Candidature spontanée</a>
                                <a class="btn btn--outline" href="blog.html">Découvrir la vie déquipe</a>
                            </div>
                        </div>
                        <div>
                            <p class="section__subtitle">Nos bureaux sont situés à Yaoundé Bastos avec un laboratoire culinaire et un hub logistique. Des immersions sur les fermes partenaires sont organisées chaque mois.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
<?php  get_footer(); ?>