<?php
/*
Template Name: Shop
*/

get_header();
?>

<main>
        <section class="hero hero--sub">
            <img class="hero__background" src="<?php echo wp_get_attachment_image_url(110, 'full'); ?>" alt="">
            <div class="container">
                <div class="hero__content" data-reveal>
                    <span class="hero__eyebrow">Boutique en ligne</span>
                    <h1 class="hero__title">Sélectionnez vos produits de saison en quelques clics</h1>
                    <p class="hero__lead">
                        Des paniers hebdomadaires personnalisables, des fruits et légumes à l'unité, des jus pressés
                        et des pépites du terroir camerounais.
                    </p>
                    <div class="hero__actions">
                        <a class="btn btn--primary" href="#catalogue">Voir les nouveautés</a>
                        <a class="btn btn--ghost" href="product-single.html">Exemple de fiche produit</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <form method="GET" class="filter-bar" role="search">
            <div class="filter-bar__controls">
                <label class="sr-only" for="category-filter">Filtrer par catégorie</label>
                <select class="form-select" id="category-filter" name="product_cat" onchange="this.form.submit()">
                    <option value="">Toutes les catégories</option>
                    <?php
                    $categories = get_terms(array(
                        'taxonomy'   => 'product_cat',
                        'hide_empty' => true,
                    ));
                    
                    $selected_cat = isset($_GET['product_cat']) ? $_GET['product_cat'] : '';
                    
                    foreach ($categories as $category) {
                        $selected = ($selected_cat == $category->slug) ? 'selected' : '';
                        echo '<option value="' . esc_attr($category->slug) . '" ' . $selected . '>';
                        echo esc_html($category->name);
                        echo '</option>';
                    }
                    ?>
                </select>
            </div>
            
            <div class="filter-bar__controls">
                <label class="sr-only" for="sort-filter">Trier par</label>
                <select class="form-select" id="sort-filter" name="orderby" onchange="this.form.submit()">
                    <option value="date" <?php selected(isset($_GET['orderby']) && $_GET['orderby'] == 'date'); ?>>Nouveautés</option>
                    <option value="price" <?php selected(isset($_GET['orderby']) && $_GET['orderby'] == 'price'); ?>>Prix croissant</option>
                    <option value="price-desc" <?php selected(isset($_GET['orderby']) && $_GET['orderby'] == 'price-desc'); ?>>Prix décroissant</option>
                </select>
            </div>
            
            <div class="filter-bar__actions">
                <a href="<?php echo get_permalink(); ?>" class="btn btn--outline">Réinitialiser</a>
            </div>
        </form>
            </div>
        </section>

        <section class="section" id="catalogue" data-reveal>
            <div class="container">
                <header class="section__header">
                    <span class="section__eyebrow">Catalogue</span>
                    <h2 class="section__title">Nos meilleures ventes de la semaine</h2>
                    <p class="section__subtitle">Profitez d'une remise de 10&nbsp;% à partir de 25&nbsp;000&nbsp;FCFA et de la livraison offerte dès 40&nbsp;000&nbsp;FCFA.</p>
                </header>
                
                <div class="product-grid">
                                <?php
                                // ===== RÉCUPÉRATION DES PRODUITS WOOCOMMERCE =====
                                // Récupérer les paramètres de filtre
                                $selected_cat = isset($_GET['product_cat']) ? sanitize_text_field($_GET['product_cat']) : '';
                                $orderby = isset($_GET['orderby']) ? sanitize_text_field($_GET['orderby']) : 'date';

                                $args = array(
                                    'post_type'      => 'product',
                                    'posts_per_page' => 12,
                                    'post_status'    => 'publish'
                                );

                                // Filtre par catégorie
                                if ($selected_cat) {
                                    $args['tax_query'] = array(
                                        array(
                                            'taxonomy' => 'product_cat',
                                            'field'    => 'slug',
                                            'terms'    => $selected_cat,
                                        ),
                                    );
                                }

                                // Tri
                                switch ($orderby) {
                                    case 'price':
                                        $args['meta_key'] = '_price';
                                        $args['orderby'] = 'meta_value_num';
                                        $args['order'] = 'ASC';
                                        break;
                                    case 'price-desc':
                                        $args['meta_key'] = '_price';
                                        $args['orderby'] = 'meta_value_num';
                                        $args['order'] = 'DESC';
                                        break;
                                    default:
                                        $args['orderby'] = 'date';
                                        $args['order'] = 'DESC';
                                }

                                $products_query = new WP_Query($args);
                                
                                $products_query = new WP_Query($args);
                                
                                // ===== SI DES PRODUITS EXISTENT =====
                                if ($products_query->have_posts()) :
                                    
                                    while ($products_query->have_posts()) : $products_query->the_post();
                                        
                                        global $product; // Objet produit WooCommerce
                                        
                                        // ===== RÉCUPÉRER LES DONNÉES DU PRODUIT =====
                                        $product_id = get_the_ID();
                                        $product_name = get_the_title();
                                        $product_url = get_permalink();
                                        $product_price = $product->get_price();
                                        $product_price_html = $product->get_price_html();
                                        $product_description = wp_trim_words(get_the_excerpt(), 15, '...');
                                        
                                        // Image du produit
                                        $product_image_id = get_post_thumbnail_id($product_id);
                                        if ($product_image_id) {
                                            $product_image = wp_get_attachment_image_url($product_image_id, 'full');
                                        } else {
                                            $product_image = get_template_directory_uri() . '/assets/images/placeholder.jpg';
                                        }
                                        
                                        // Catégorie du produit
                                        $categories = get_the_terms($product_id, 'product_cat');
                                        $first_category = 'Produit';
                                        if ($categories && !is_wp_error($categories)) {
                                            $first_category = $categories[0]->name;
                                        }
                                        
                                        // Stock disponible
                                        $in_stock = $product->is_in_stock();
                                        
                                        // ===== AFFICHER AVEC VOTRE HTML =====
                                        ?>
                                        <article class="product-card" 
                                                data-reveal 
                                                data-product-card 
                                                data-product-id="<?php echo esc_attr($product->get_slug()); ?>" 
                                                data-product-name="<?php echo esc_attr($product_name); ?>" 
                                                data-product-price="<?php echo esc_attr($product_price); ?>" 
                                                data-product-category="<?php echo esc_attr($first_category); ?>">
                                            
                                            <div class="product-card__image">
                                                <img src="<?php echo esc_url($product_image); ?>" 
                                                    alt="<?php echo esc_attr($product_name); ?>">
                                            </div>
                                            
                                            <div class="product-card__body">
                                                <span class="product-card__category">
                                                    <?php echo esc_html($first_category); ?>
                                                </span>
                                                
                                                <h3 class="product-card__title">
                                                    <a href="<?php echo esc_url($product_url); ?>">
                                                        <?php echo esc_html($product_name); ?>
                                                    </a>
                                                </h3>
                                                
                                                <p><?php echo esc_html($product_description); ?></p>
                                                
                                                <p class="product-card__price">
                                                    <?php echo $product_price_html; ?>
                                                </p>
                                                
                                                <div class="product-card__actions">
                                                    <?php if ($in_stock) : ?>
                                                        <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" 
                                                        class="btn btn--primary" 
                                                        data-product-id="<?php echo esc_attr($product_id); ?>">
                                                            Ajouter
                                                        </a>
                                                    <?php else : ?>
                                                        <button class="btn btn--primary" disabled>
                                                            Rupture de stock
                                                        </button>
                                                    <?php endif; ?>
                                                    
                                                    <a class="btn btn--outline" 
                                                    href="<?php echo esc_url($product_url); ?>">
                                                        Détails
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                        <?php
                                        
                                    endwhile;
                                    
                                    wp_reset_postdata(); 
                                    
                                else :
                                    ?>
                                    <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                                        <h3>Aucun produit disponible pour le moment</h3>
                                        <p>Les produits apparaîtront ici une fois ajoutés dans WooCommerce.</p>
                                        <?php if (current_user_can('manage_woocommerce')) : ?>
                                            <a href="<?php echo admin_url('post-new.php?post_type=product'); ?>" 
                                            class="btn btn--primary">
                                                Ajouter votre premier produit
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <?php
                                endif;
                                ?>
                </div>

                <nav class="pagination" aria-label="Pagination boutique">
                    <a class="pagination__control is-disabled" href="#" aria-disabled="true">Précédent</a>
                    <a class="pagination__page is-active" href="#">1</a>
                    <a class="pagination__page" href="#">2</a>
                    <a class="pagination__page" href="#">3</a>
                    <a class="pagination__control" href="#">Suivant</a>
                </nav>
            </div>
        </section>

        <section class="section section--tight" data-reveal>
            <div class="container">
                <div class="layout-panel">
                    <div class="layout-split">
                        <div>
                            <span class="badge badge--accent">Abonnements</span>
                            <h2 class="section__title">Passez en abonnement flexible</h2>
                            <p>Recevez votre panier chaque semaine avec la possibilité de mettre en pause ou de modifier les contenus jusqu'à 12 h la veille.</p>
                            <ul class="list list--checks">
                                <li><span aria-hidden="true">✓</span> Remise supplémentaire de 8&nbsp;%.</li>
                                <li><span aria-hidden="true">✓</span> Livraison prioritaire dès 7 h.</li>
                                <li><span aria-hidden="true">✓</span> Accès exclusif aux nouveautés.</li>
                            </ul>
                        </div>
                        <div class="subscription-panel">
                            <p class="subscription-panel__title">Choisissez votre rythme</p>
                            <ul class="subscription-panel__list">
                                <li>
                                    <span>Hebdomadaire</span>
                                    <strong>-8&nbsp;%</strong>
                                </li>
                                <li>
                                    <span>Bi-mensuel</span>
                                    <strong>-5&nbsp;%</strong>
                                </li>
                                <li>
                                    <span>Mensuel</span>
                                    <strong>-3&nbsp;%</strong>
                                </li>
                            </ul>
                            <a class="btn btn--primary" href="checkout.html">Activer mon abonnement</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php  get_footer(); ?>