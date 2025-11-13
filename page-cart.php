<?php
/*
Template Name: Cart
*/

get_header();
?>

 <main>
        <section class="section section--tight" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Votre sélection</span>
                    <h1 class="section__title">Préparez votre commande</h1>
                    <p class="section__subtitle">Vous pouvez ajuster les quantités, ajouter des notes ou sauvegarder des produits pour plus tard.</p>
                </header>
                <div class="cart-layout">
                    <div class="cart-table-wrapper">
                        <table class="table" aria-describedby="cart-table-caption">
                            <caption id="cart-table-caption" class="sr-only">Détail des articles du panier</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Produit</th>
                                    <th scope="col">Prix unitaire</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"><span class="sr-only">Actions</span></th>
                                </tr>
                            </thead>
                            <tbody data-cart-items>
                                <tr data-cart-empty-row>
                                    <td colspan="5">
                                        <div class="cart-empty" data-cart-empty>
                                            <h2>Votre panier est vide</h2>
                                            <p>Ajoutez vos fruits et légumes biologiques préférés pour commencer votre commande.</p>
                                            <a class="btn btn--primary" href="shop.html">Découvrir la boutique</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-message" data-cart-message hidden>
                            <span aria-hidden="true">🌱</span>
                            <p>Astuce anti-gaspi&nbsp;: retrouvez des produits déclassés à -30&nbsp;% dans la rubrique «&nbsp;Épicerie&nbsp;».</p>
                        </div>
                    </div>
                    <aside class="summary-card cart-summary" aria-label="Résumé du panier">
                        <h2>Résumé</h2>
                        <div class="summary-card__row">
                            <span>Sous-total</span>
                            <span data-cart-subtotal>0&nbsp;FCFA</span>
                        </div>
                        <div class="summary-card__row">
                            <span>Frais de livraison</span>
                            <span data-cart-delivery>0&nbsp;FCFA</span>
                        </div>
                        <div class="summary-card__row">
                            <span>Code promo</span>
                            <button class="link-apply" type="button" data-cart-toggle-promo>Ajouter un code</button>
                        </div>
                        <div class="summary-card__row" data-cart-discount-row hidden>
                            <span>Remise</span>
                            <span data-cart-discount>-0&nbsp;FCFA</span>
                        </div>
                        <div class="summary-card__row summary-card__row--total">
                            <span>Total TTC</span>
                            <span data-cart-total>0&nbsp;FCFA</span>
                        </div>
                        <div class="summary-promo" data-cart-promo hidden>
                            <label class="form-label" for="cart-promo-code">Code promotionnel</label>
                            <div class="input-group">
                                <input id="cart-promo-code" type="text" placeholder="Saisir votre code" data-cart-promo-input>
                            </div>
                            <button class="btn btn--outline" type="button" data-cart-apply-promo>Appliquer</button>
                            <p class="summary-note" data-cart-promo-feedback></p>
                        </div>
                        <button class="btn btn--primary" type="button" data-checkout-button>Passer au paiement</button>
                        <p class="summary-note" data-cart-note>Paiement sécurisé · Orange Money, MTN, cartes Visa/Mastercard</p>
                    </aside>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="layout-panel">
                    <header class="section__header">
                        <span class="section__eyebrow">Suggestion</span>
                        <h2 class="section__title">Complétez votre panier</h2>
                    </header>
                    <div class="product-grid">
                        <article class="product-card" data-reveal data-product-card data-product-id="jus-green-glow" data-product-name="Jus Green Glow" data-product-price="2200" data-product-image="<?php echo wp_get_attachment_image_url(143, 'full'); ?>" data-product-url="product-single.html" data-product-category="Jus pressés">
                            <div class="product-card__image">
                                <img src="<?php echo wp_get_attachment_image_url(143, 'full'); ?>" alt="Jus Green Glow">
                            </div>
                            <div class="product-card__body">
                                <span class="product-card__category">Jus pressés</span>
                                <h3 class="product-card__title"><a href="product-single.html">Jus Green Glow</a></h3>
                                <p>Concombre, pomme, persil et citron · 250 ml.</p>
                                <p class="product-card__price">2&nbsp;200&nbsp;FCFA</p>
                                <div class="product-card__actions">
                                    <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                    <a class="btn btn--outline" href="product-single.html">Comparer</a>
                                </div>
                            </div>
                        </article>
                        <article class="product-card" data-reveal data-product-card data-product-id="pack-smoothies-energie" data-product-name="Pack smoothies énergie" data-product-price="12000" data-product-image="<?php echo wp_get_attachment_image_url(144, 'full'); ?>" data-product-url="product-single.html" data-product-category="Smoothies">
                            <div class="product-card__image">
                                <img src="<?php echo wp_get_attachment_image_url(144, 'full'); ?>" alt="Pack smoothies">
                            </div>
                            <div class="product-card__body">
                                <span class="product-card__category">Smoothies</span>
                                <h3 class="product-card__title"><a href="product-single.html">Pack smoothies énergie</a></h3>
                                <p>6 bouteilles · Boost gingembre, tropical, cacao.</p>
                                <p class="product-card__price">12&nbsp;000&nbsp;FCFA</p>
                                <div class="product-card__actions">
                                    <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                    <a class="btn btn--outline" href="product-single.html">Comparer</a>
                                </div>
                            </div>
                        </article>
                        <article class="product-card" data-reveal data-product-card data-product-id="mix-crudites-15kg" data-product-name="Mix crudités 1,5kg" data-product-price="4500" data-product-image="<?php echo wp_get_attachment_image_url(137, 'full'); ?>" data-product-url="product-single.html" data-product-category="Légumes prêts">
                            <div class="product-card__image">
                                <img src="<?php echo wp_get_attachment_image_url(137, 'full'); ?>" alt="Mix crudités">
                            </div>
                            <div class="product-card__body">
                                <span class="product-card__category">Légumes prêts</span>
                                <h3 class="product-card__title"><a href="product-single.html">Mix crudités 1,5kg</a></h3>
                                <p>Idéal pour compléter vos repas de la semaine.</p>
                                <p class="product-card__price">4&nbsp;500&nbsp;FCFA</p>
                                <div class="product-card__actions">
                                    <button class="btn btn--primary" type="button" data-add-to-cart>Ajouter</button>
                                    <a class="btn btn--outline" href="product-single.html">Comparer</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

<?php  get_footer(); ?>