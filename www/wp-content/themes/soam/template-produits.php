<?php
/*
Template Name: Page produit
 */
get_header();

$groupes = get_field('categories');

?>

    <nav class="search_menu" aria-label="Product filter">
      <ul>
      <li><a href="#all" class="search_menu_products">Tous les produis</a></li>
      <li><a href="#soap" class="search_menu_soap">Savons</a></li>
      <li><a href="#oil" class="search_menu_oil">Huiles et Sérums</a></li>
      <li><a href="#balm" class="search_menu_balm">Baumes</a></li>
      </ul>
    </nav>
    <div class="main-wrapper">

	    <?php
	        foreach ( $groupes as $key => $groupe ):
	    ?>
            <section class="mg-136px-t products">

                <!-- Catégorie de produit -->
                <h2 class="ft-bold ft-nunito mg-48px-b"><?= $groupe['title']  ?></h2>
                <div class="products-list" data-product-category="<?= $groupe['slug']; ?>">

                    <?php foreach ( $groupe['products'] as $product ): ?>
                    <!-- Produit -->
                    <article>
	                    <?php  if ( $product['image'] ):   ?>
                            <button type="button" class="products-list__item--img ft-mulish ft-semibold text-lg">
                                <img src="<?= $product['image']['url'] ?>" alt="<?= $product['image']['alt']  ?>">
                            </button>
	                    <?php endif;  ?>
                        <h3 class="products-list__item--title mg-16px-t">
                            <button class="ft-mulish ft-semibold text-lg"><?=  $product['title']  ?></button>
                        </h3>
                    </article>
                    <!-- Fin produit -->
                    <?php  endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>

    <?php

        // Section "À propos | Où me trouver ?"
        include( 'pre-footer-info-block.php' );

        get_footer()
    ?>
