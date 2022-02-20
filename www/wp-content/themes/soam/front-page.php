<?php
/// Homepage
$link = get_field('link');
$headerimg = get_field('image');
$products = get_field('products');
$product = get_field('product');
$values = get_field("values");
$about = get_field('about');
$advice_section = get_field('advice_section');
get_header();




?>
<section id="hero-section">
    <div id="hero-info">
        <h1 class="text-xxl ft-bold ft-nunito">
            <?= get_field("title") ?>
        </h1>
        <p class="text-base">
            <?= get_field("description"); ?>
        </p>
        <a 
            class="button-xl bg-cyan color-white" 
            href="<?= $link['url']; ?>"
        >
            <?= $link['title'] ?>
        </a>
    </div>
 
    <img src="<?= $headerimg['url'] ?>" 
         alt="<?= $headerimg['alt'] ?>">
</section>

<!--
    Valeurs
 -->
<section id="values-section" class="mg-136px-t bg-cyan-light">
    <div class="main-wrapper values-container">

        <?php 
        // Make sure that `valuesìs not empty to prevent errors

        if ( !empty($values) ) 
            foreach ( $values as $value ):

        ?>
        <div class="values ">
            <img 
                src="<?= $value['icon']['url'] ?>" 
                alt="<?= $value['icon']['alt'] ?>" 
            />
            <h3 class="text-xl ft-semibold mg-16px-t" ><?= $value['title']; ?></h3>
            <p class="text-base mg-24px-t">
                <?= $value['description']; ?>
            </p>
            <a 
                class="text-xl color-cyan mg-16px-t"
                href="<?= $value['link']['url']; ?>"
            >
                <?= $value['link']['title']; ?>
            </a>
        </div>   
        <?php

            endforeach
        
        ?>
    <!-- Respect du corps 
        <div class="values ">
            <img src="<?php echo get_template_directory_uri() . '/images/icons/icons_respect-du-corps.png'; ?>" alt="Icon ">
            <h3 class="text-xl ft-semibold mg-16px-t" >Respect du corps</h3>
            <p class="text-base mg-24px-t">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, eius mollitia minima expedita modi autem aliquid quasi quo, sequi in enim harum recusandae doloribus reprehenderit cupiditate iusto vel impedit incidunt.</p>
            <a class="ft-semibold color-cyan mg-16px-t" href="">En savoir plus</a>
        </div>
        Produits Locaux
        <div class="values ">
            <img src="<?php echo get_template_directory_uri() . '/images/icons/icons_produits-locaux.png'; ?>" alt="Icon ">
            <h3 class="text-xl ft-semibold mg-16px-t" >Produits Locaux</h3>
            <p class="text-base mg-24px-t">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, eius mollitia minima expedita modi autem aliquid quasi quo, sequi in enim harum recusandae doloribus reprehenderit cupiditate iusto vel impedit incidunt.</p>
            <a class="ft-semibold color-cyan mg-16px-t" href="">En savoir plus</a>
        </div>
         Produits naturels
        <div class="values ">
            <img src="<?php echo get_template_directory_uri() . '/images/icons/icons_produits-naturels.png'; ?>" alt="Icon ">
            <h3 class="text-xl ft-semibold mg-16px-t" >Produits naturels</h3>
            <p class="text-base mg-24px-t">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, eius mollitia minima expedita modi autem aliquid quasi quo, sequi in enim harum recusandae doloribus reprehenderit cupiditate iusto vel impedit incidunt.</p>
            <a class="ft-semibold color-cyan mg-16px-t" href="">En savoir plus</a>
        </div>

        -->
    </div>
</section>


<!--
    Savons et cosmétiques
-->
<section id="features-section" class="pg-136px-t main-wrapper">


    <h2 class="ft-nunito text-xxl ft-bold ">
       <?= $products['title']; ?>
    </h2>
    <div id="features" class="mg-96px-t">

    <?php 
    // Make sure `products` is not empty to prevent errors
    if ( !empty($products['product']) ) 
        foreach ($products['product'] as $product):

            // debug($product['image']);
    ?>
        <!-- Feature -->
        <div class="features">
            <div class="feature-image">
                <img
                    src="<?= $product['image']['url']; ?>"
                    style="--mask:url(<?= get_template_directory_uri() . '/images/blob/blob1.png'; ?>);"
                    alt="<?= $product['image']['alt'] ?>"
                />
            </div>

            <?php  if ( $product['product_name'] ): ?>
            
            <h3 class="text-lg ft-semibold mg-72px-t">
                <?= $product['product_name']; ?>
            </h3>
            
            <?php endif ?>
            
            <p class="mg-24px-t text-base">
                <?= $product['product_description']; ?>
            </p>
            <a 
                class="color-cyan ft-semibold text-base ft-mulish mg-16px-t"
                href="<?= $product['product_link']['url']; ?>"
            >
                <?= $product['product_link']['title']; ?>
            </a>
        </div>
        <!-- End feature -->
    <?php
        endforeach
    ?>
    </div>
</section>

<!--
    A propos
-->
<section id="about-section" class="bg-magenta mg-136px-t pg-112px-l pg-64px-y">
    <!-- About section flex container and wrapper -->
    <div class="about-container main-wrapper">
        <!-- About double image -->
        <div class="doubled-image" style="--bg-img-height: 520px; --fg-img-height: 392px; --fg-img-width: 280px; --margin-left: 30%;">
            <img 
                class="doubled-image-bg box-shadow-lg" 
                src="<?= $about['background_img']['url'] ?>" 
                alt=""
            />
            <img 
                class="doubled-image-fg box-shadow-lg" 
                src="<?= $about['image']['url'] ?>"
                alt=""
             />
        </div>


        <!-- About text -->
        <div id="about-text">
            <h2 class="ft-nunito text-xxl ft-bold color-white">
                <?= $about['title'] ?> 
            </h2>
            <p class="mg-24px-t color-white text-base">
                <?= $about['text'] ?> 
            </p>
            <a 
                class="mg-32px-t button bg-cyan color-white text-base"
                href="<?= $about['link']['url'] ?>"
            > 
                <?= $about['link']['title'] ?>
            </a>
        </div>
    </div>
</section>

<!--
    Besoin de conseils ?
-->

<section id="advice-section" class="pg-136px-y" style="--background-img: url(<?=  get_template_directory_uri() . '/images/home/background-image-conseils.png' ?>)">
    <div id="advice-info" class="mg-136px-l">
        <h2 class="ft-nunito text-xxl ft-bold ">
            <?= $advice_section['title'] ?>
        </h2>
        <p class="text-base mg-16px-t">
            <?= $advice_section['text'] ?>
        </p>
        <a 
            class="mg-32px-t button bg-cyan color-white text-base"
            href="<?= $advice_section['link']['url'] ?>"
        >
            <?= $advice_section['link']['title'] ?>
        </a>
        <div id="advice-links">
        <?php
            // Make sure advice_section is not empty to prevent errors
            if ( !empty($advice_section['care']) ):
                foreach ($advice_section['care'] as $care):
        ?>
            <div class="advice-link">

                <?php if ( $care['image'] ): ?>
                    <img
                        src="<?= $care['image']['url'] ?>"
                        alt="<?= $care['image']['alt'] ?>"
                        class="mg-16px-r"
                    />
                <?php endif; ?>

                <a
                    href="<?= $care['link']['url'] ?>" 
                    class="text-base ft-semibold color-black text-base"
                >
                    <?= $care['link']['title'] ?>
                </a>
            </div>

        <?php
                endforeach;
            endif;
        ?>
        </div>
    </div>
    <!-- image décorative -->
    <img 
        src="<?= $advice_section['image']['url'] ?>" 
        alt=""
    />

</section>

<!--
    points de ventes
-->
<section id="selling-points-section" class="pg-40px-y bg-cyan"
         style="--background-img: url(<?= get_template_directory_uri() . '/images/home/mountain.png' ?>)"
>
    <!-- Swiper container -->
    <div class="selling-points-container main-wrapper mg-40px-t">
        <h2 class="text-center ft-nunito text-xxl ft-bold color-white mg-88px-b">Points de vente</h2>
        <div class="swiper selling-points-content">
            <div class="swiper-wrapper">
                <?php 
                    // Go through each "slider" item and put it in a `swiper-slider` div
                    //foreach ($variable as $key => $value) {
                ?>
                    <!-- Debut slide -->
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="//picsum.photos/500" alt="Pic">
                            <div class="swiper-navigation"></div>
                        </div>
                        <div class="slider-content color-white">
                            <div class="slider-content-what ">
                                <h3 class="ft-nunito ft-semibold text-xl mg-24px-b">La boutique de Samy</h3>
                                <p class="text-base ft-mulish">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Ipsam inventore mollitia
                                    repellat quod placeat deserunt quis minima.
                                </p>
                                <button class="button bg-magenta color-white mg-32px-t ft-semibold ft-mulish">En savoir plus</button>
                            </div>
                            <div class="slider-content-who mg-32px-t">
                                <h3 class="ft-nunito ft-semibold text-xl mg-24px-b text-xl">Avec qui ?</h3>
                                <div class="collaborators-container mg-24px-t">
                                    <div class="collaborator">
                                        <img class="collaborator-image mg-24px-b" src="//picsum.photos/100" alt="">
                                        <h5 class="text-base ft-semibold">Samy</h5>
                                        <p class="text-center mg-16px-t">lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <div class="collaborator">
                                        <img class="collaborator-image mg-24px-b" src="//picsum.photos/100" alt="">
                                        <h5 class="text-base ft-semibold">Samy</h5>
                                        <p class="text-center mg-16px-t">lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <div class="collaborator">
                                        <img class="collaborator-image mg-24px-b" src="//picsum.photos/100" alt="">
                                        <h5 class="text-base ft-semibold">Samy</h5>
                                        <p class="text-center mg-16px-t">lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Fin slide -->
                    <!-- Debut slide -->
                    <div class="swiper-slide">
                        <div class="slider-image ">
                            <img src="//picsum.photos/500" alt="Pic">
                            <div class="swiper-navigation"></div>
                        </div>
                        <div class="slider-content color-white">
                            <div class="slider-content-what ">
                                <h3 class="ft-nunito ft-semibold text-xl mg-24px-b">La boutique de Samy</h3>
                                <p class="text-base ft-mulish">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Ipsam inventore mollitia
                                    repellat quod placeat deserunt quis minima.
                                </p>
                                <button class="button bg-magenta color-white mg-32px-t ft-semibold ft-mulish">En savoir plus</button>
                            </div>
                            <div class="slider-content-who mg-32px-t">
                                <h3 class="ft-nunito ft-semibold text-xl mg-24px-b text-xl">Avec qui ?</h3>
                                <div class="collaborators-container mg-24px-t">
                                    <div class="collaborator">
                                        <img class="collaborator-image mg-24px-b" src="//picsum.photos/100" alt="">
                                        <h5 class="text-base ft-semibold">Samy</h5>
                                        <p class="text-center mg-16px-t">lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <div class="collaborator">
                                        <img class="collaborator-image mg-24px-b" src="//picsum.photos/100" alt="">
                                        <h5 class="text-base ft-semibold">Samy</h5>
                                        <p class="text-center mg-16px-t">lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <div class="collaborator">
                                        <img class="collaborator-image mg-24px-b" src="//picsum.photos/100" alt="">
                                        <h5 class="text-base ft-semibold">Samy</h5>
                                        <p class="text-center mg-16px-t">lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Fin slide -->
                    <!-- Debut slide -->
                    <div class="swiper-slide">
                        <div class="slider-image ">
                            <img src="//picsum.photos/500" alt="Pic">
                            <div class="swiper-navigation"></div>
                        </div>
                        <div class="slider-content color-white">
                            <div class="slider-content-what ">
                                <h3 class="ft-nunito ft-semibold text-xl mg-24px-b">La boutique de Samy</h3>
                                <p class="text-base ft-mulish">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Ipsam inventore mollitia
                                    repellat quod placeat deserunt quis minima.
                                </p>
                                <button class="button bg-magenta color-white mg-32px-t ft-semibold ft-mulish">En savoir plus</button>
                            </div>
                            <div class="slider-content-who mg-32px-t">
                                <h3 class="ft-nunito ft-semibold text-xl mg-24px-b text-xl">Avec qui ?</h3>
                                <div class="collaborators-container mg-24px-t">
                                    <div class="collaborator">
                                        <img class="collaborator-image mg-24px-b" src="//picsum.photos/100" alt="">
                                        <h5 class="text-base ft-semibold">Samy</h5>
                                        <p class="text-center mg-16px-t">lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <div class="collaborator">
                                        <img class="collaborator-image mg-24px-b" src="//picsum.photos/100" alt="">
                                        <h5 class="text-base ft-semibold">Samy</h5>
                                        <p class="text-center mg-16px-t">lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <div class="collaborator">
                                        <img class="collaborator-image mg-24px-b" src="//picsum.photos/100" alt="">
                                        <h5 class="text-base ft-semibold">Samy</h5>
                                        <p class="text-center mg-16px-t">lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- Fin slide -->
                <?php //} ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

</section>
<?php

get_footer();

?>
