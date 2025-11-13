<?php
/*
Template Name: Checkout
*/

get_header();
?>

 <section class="section section--tight" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Étape finale</span>
                    <h1 class="section__title">Validez votre commande</h1>
                    <p class="section__subtitle">Renseignez vos informations, choisissez un créneau et confirmez votre paiement sécurisé.</p>
                </header>
                <div class="checkout-layout">
                    <form class="checkout-form" action="#" method="post" data-checkout-form>
                        <section class="checkout-section" data-reveal>
                            <h2>Coordonnées</h2>
                            <div class="form-grid form-grid--cols-2">
                                <div>
                                    <label class="form-label" for="firstname">Prénom</label>
                                    <input class="form-control" id="firstname" name="firstname" type="text" required>
                                </div>
                                <div>
                                    <label class="form-label" for="lastname">Nom</label>
                                    <input class="form-control" id="lastname" name="lastname" type="text" required>
                                </div>
                                <div>
                                    <label class="form-label" for="email">Adresse e-mail</label>
                                    <input class="form-control" id="email" name="email" type="email" required>
                                </div>
                                <div>
                                    <label class="form-label" for="phone">Téléphone</label>
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="+237 6xx xx xx xx" required>
                                </div>
                            </div>
                        </section>

                        <section class="checkout-section" data-reveal>
                            <h2>Adresse de livraison</h2>
                            <div class="form-grid form-grid--cols-2">
                                <div class="form-grid__full">
                                    <label class="form-label" for="address">Adresse</label>
                                    <input class="form-control" id="address" name="address" type="text" placeholder="Quartier, rue, numéro" required>
                                </div>
                                <div>
                                    <label class="form-label" for="city">Ville</label>
                                    <select class="form-select" id="city" name="city" required>
                                        <option value="">Sélectionnez</option>
                                        <option value="yaounde">Yaoundé</option>
                                        <option value="douala">Douala</option>
                                        <option value="autre">Autre ville (appel sous 30 min)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="form-label" for="district">Quartier</label>
                                    <input class="form-control" id="district" name="district" type="text" required>
                                </div>
                                <div class="form-grid__full">
                                    <label class="form-label" for="instructions">Instructions au livreur</label>
                                    <textarea id="instructions" name="instructions" placeholder="Digicode, étage, portail, etc."></textarea>
                                </div>
                            </div>
                        </section>

                        <section class="checkout-section" data-reveal>
                            <h2>Créneau de livraison</h2>
                            <div class="slot-grid">
                                <label class="slot-card">
                                    <input type="radio" name="slot" value="7h" required>
                                    <span>
                                        <strong>7 h - 9 h</strong>
                                        <small>Paniers prioritaires</small>
                                    </span>
                                </label>
                                <label class="slot-card">
                                    <input type="radio" name="slot" value="12h">
                                    <span>
                                        <strong>12 h - 14 h</strong>
                                        <small>Livraison express entreprises</small>
                                    </span>
                                </label>
                                <label class="slot-card">
                                    <input type="radio" name="slot" value="18h">
                                    <span>
                                        <strong>18 h - 20 h</strong>
                                        <small>Créneau le plus demandé</small>
                                    </span>
                                </label>
                            </div>
                        </section>

                        <section class="checkout-section" data-reveal>
                            <h2>Paiement</h2>
                            <div class="payment-options">
                                <label class="payment-card">
                                    <input type="radio" name="payment" value="orange" required>
                                    <span>
                                        <strong>Orange Money</strong>
                                        <small>Confirmation immédiate</small>
                                    </span>
                                </label>
                                <label class="payment-card">
                                    <input type="radio" name="payment" value="mtn">
                                    <span>
                                        <strong>MTN Mobile Money</strong>
                                        <small>Code sécurisé envoyé par SMS</small>
                                    </span>
                                </label>
                                <label class="payment-card">
                                    <input type="radio" name="payment" value="card">
                                    <span>
                                        <strong>Carte bancaire</strong>
                                        <small>Visa, Mastercard, Verve</small>
                                    </span>
                                </label>
                            </div>
                            <div class="form-grid">
                                <div>
                                    <label class="form-label" for="promo">Code promo</label>
                                    <input class="form-control" id="promo" name="promo" type="text" placeholder="BIENVENUE">
                                </div>
                                <div>
                                    <label class="form-label" for="tip">Pourboire (optionnel)</label>
                                    <select class="form-select" id="tip" name="tip">
                                        <option value="0">0&nbsp;%</option>
                                        <option value="5">5&nbsp;%</option>
                                        <option value="10">10&nbsp;%</option>
                                    </select>
                                </div>
                            </div>
                        </section>

                        <section class="checkout-section" data-reveal>
                            <label class="tos-check">
                                <input type="checkbox" name="terms" required>
                                <span>Je confirme avoir vérifié ma commande et accepte les <a href="#">conditions générales</a>.</span>
                            </label>
                            <button class="btn btn--primary btn--checkout" type="submit">Confirmer et payer</button>
                            <p class="checkout-guarantee">Paiement 100&nbsp;% sécurisé · Livraison garantie le jour même</p>
                        </section>
                    </form>
                    <div class="checkout-success" data-checkout-success hidden>
                        <h2>Merci pour votre commande&nbsp;!</h2>
                        <p data-checkout-success-text>Nous préparons vos paniers avec soin.</p>
                        <a class="btn btn--primary" href="shop.html">Continuer vos achats</a>
                    </div>

                    <aside class="summary-card checkout-summary" aria-label="Récapitulatif de commande" data-checkout-summary>
                        <h2>Votre commande</h2>
                        <ul class="order-items" data-checkout-items></ul>
                        <div class="checkout-empty" data-checkout-empty hidden>
                            <p>Votre panier est vide. Ajoutez des produits avant de valider votre commande.</p>
                            <a class="btn btn--outline" href="shop.html">Explorer la boutique</a>
                        </div>
                        <div class="summary-card__row">
                            <span>Sous-total</span>
                            <span data-checkout-subtotal>0&nbsp;FCFA</span>
                        </div>
                        <div class="summary-card__row">
                            <span>Livraison</span>
                            <span data-checkout-delivery>Offerte</span>
                        </div>
                        <div class="summary-card__row" data-checkout-discount-row hidden>
                            <span>Remise</span>
                            <span data-checkout-discount>-0&nbsp;FCFA</span>
                        </div>
                        <div class="summary-card__row summary-card__row--total">
                            <span>Total TTC</span>
                            <span data-checkout-total>0&nbsp;FCFA</span>
                        </div>
                        <div class="summary-badges">
                            <span class="tag">Impact carbone compensé</span>
                            <span class="tag">Emballages consignés</span>
                        </div>
                        <div class="support-card">
                            <h3>Besoin d'aide&nbsp;?</h3>
                            <p>Chat en direct ou WhatsApp +237 650 12 34 56</p>
                            <button class="btn btn--outline" type="button" onclick="window.location.href='contact.html'">Contacter l'équipe</button>
                        </div>
                    </aside>
                </div>
            </div>
        </section>


<?php  get_footer(); ?>