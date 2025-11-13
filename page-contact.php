<?php
/*
Template Name: Contact
*/

get_header();
?>

   <main>
        <section class="hero hero--sub">
            <img class="hero__background" src="<?php echo wp_get_attachment_image_url(112, 'full'); ?>" alt="">
            <div class="container">
                <div class="hero__content" data-reveal>
                    <span class="hero__eyebrow">Support dédié</span>
                    <h1 class="hero__title">Parlons fraîcheur, logistique ou partenariats</h1>
                    <p class="hero__lead">
                        Notre équipe multisite basée à Yaoundé et Douala vous accompagne pour vos commandes, événements,
                        collaborations producteurs et projets corporate.
                    </p>
                    <div class="hero__actions">
                        <a class="btn btn--primary" href="#contact-form">Écrire à l'équipe</a>
                        <a class="btn btn--ghost" href="tel:+237695254578">Appeler maintenant</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="contact-grid">
                    <article class="contact-card">
                        <span class="badge">Service client</span>
                        <h3>Commandes &amp; suivi</h3>
                        <p>Du lundi au dimanche · 7h - 21h</p>
                        <a class="pill" href="mailto:support@BioPanier.cm">support@BioPanier.cm</a>
                        <a class="pill" href="tel:+237695254578">+237 695 25 45 78</a>
                    </article>
                    <article class="contact-card">
                        <span class="badge badge--accent">Producteurs</span>
                        <h3>Rejoindre la coopérative</h3>
                        <p>Accompagnement agroécologique et contrats pluriannuels.</p>
                        <a class="pill" href="mailto:agri@BioPanier.cm">agri@BioPanier.cm</a>
                        <span class="tag">WhatsApp&nbsp;: +237 650 12 34 56</span>
                    </article>
                    <article class="contact-card">
                        <span class="badge">Corporate</span>
                        <h3>Entreprises &amp; traiteurs</h3>
                        <p>Devis sur mesure, paniers salariés, cantines responsables.</p>
                        <a class="pill" href="mailto:partenariats@BioPanier.cm">partenariats@BioPanier.cm</a>
                        <span class="tag">Réponse sous 24h</span>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="layout-panel">
                    <div class="layout-split">
                        <div>
                            <h2 class="section__title">Nous rencontrer à Yaoundé</h2>
                            <p>Nos bureaux principaux sont situés à 5 minutes du carrefour Bastos. Merci de prendre rendez-vous pour garantir la disponibilité de l'équipe.</p>
                            <ul class="list list--checks">
                                <li><span aria-hidden="true">✓</span> Dégustation de produits sur place tous les vendredis.</li>
                                <li><span aria-hidden="true">✓</span> Espace logistique pour retrait express de paniers.</li>
                                <li><span aria-hidden="true">✓</span> Salle de réunion pour ateliers nutrition.</li>
                            </ul>
                        </div>
                        <div class="map-placeholder" aria-label="Localisation BioPanier à Yaoundé Bastos"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" id="contact-form" data-reveal>
            <div class="container">
                <div class="layout-panel">
                    <div class="layout-split">
                        <div>
                            <span class="badge badge--accent">Formulaire</span>
                            <h2 class="section__title">Nous écrire un message</h2>
                            <p>
                                Pour des demandes spécifiques, remplissez le formulaire et précisez votre besoin.
                                Nous répondons en moyenne sous 2 heures durant les horaires d'ouverture.
                            </p>
                        </div>
                        <form class="form-grid form-grid--cols-2 contact-form" action="#" method="post">
                            <div>
                                <label class="form-label" for="contact-name">Nom complet</label>
                                <input class="form-control" id="contact-name" name="name" type="text" placeholder="Votre nom" required>
                            </div>
                            <div>
                                <label class="form-label" for="contact-company">Organisation (optionnel)</label>
                                <input class="form-control" id="contact-company" name="company" type="text" placeholder="Entreprise / Collectif">
                            </div>
                            <div>
                                <label class="form-label" for="contact-email">Adresse e-mail</label>
                                <input class="form-control" id="contact-email" name="email" type="email" placeholder="vous@email.com" required>
                            </div>
                            <div>
                                <label class="form-label" for="contact-phone">Téléphone</label>
                                <input class="form-control" id="contact-phone" name="phone" type="tel" placeholder="+237 6xx xx xx xx">
                            </div>
                            <div>
                                <label class="form-label" for="contact-topic">Sujet</label>
                                <select class="form-select" id="contact-topic" name="topic" required>
                                    <option value="">Sélectionnez un sujet</option>
                                    <option value="commande">Suivi de commande</option>
                                    <option value="producteurs">Devenir producteur partenaire</option>
                                    <option value="entreprise">Offre entreprise</option>
                                    <option value="evenement">Événement / traiteur</option>
                                    <option value="autre">Autre demande</option>
                                </select>
                            </div>
                            <div class="form-grid__full">
                                <label class="form-label" for="contact-message">Votre message</label>
                                <textarea id="contact-message" name="message" placeholder="Décrivez votre besoin..." required></textarea>
                            </div>
                            <div class="form-grid__full contact-checkbox">
                                <label>
                                    <input type="checkbox" name="newsletter">
                                    <span>Je souhaite recevoir la newsletter hebdomadaire (optionnel)</span>
                                </label>
                            </div>
                            <div class="form-grid__full contact-submit">
                                <button class="btn btn--primary" type="submit">Envoyer la demande</button>
                                <p>Temps de réponse estimé&nbsp;: 2 h</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="layout-panel">
                    <h2 class="section__title">Questions fréquentes</h2>
                    <div class="faq-grid">
                        <article class="faq-item">
                            <h3>Comment fonctionnent les livraisons&nbsp;?</h3>
                            <p>Nous livrons tous les jours entre 7h et 19h dans Yaoundé et Douala. Les commandes passées avant 12h sont livrées le jour-même.</p>
                        </article>
                        <article class="faq-item">
                            <h3>Proposez-vous des solutions pour les entreprises&nbsp;?</h3>
                            <p>Oui&nbsp;! Paniers salariés, cantines responsables, frigos connectés... Notre équipe corporate conçoit une offre sur mesure.</p>
                        </article>
                        <article class="faq-item">
                            <h3>Puis-je visiter les fermes partenaires&nbsp;?</h3>
                            <p>Nous organisons des visites mensuelles ouvertes aux clients et aux entreprises. Contactez-nous pour réserver un créneau.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

<?php  
get_footer(); 
?>