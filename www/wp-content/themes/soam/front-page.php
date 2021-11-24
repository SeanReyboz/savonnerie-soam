<?php
/// Homepage

get_header();

?>
<section id="hero-section">
    <div id="hero-info">
        <h1 class="text-xxl ft-bold">
            Artisant Savonnier responsable, local et respectueux de l’environnement !
        </h1>
        <p class="text-base">
            Soâm est une savonnerie qui s’engage à respecter votre peau en utilisant des ingrédients 100% naturels.
            Implanté en Savoie, dans le massif des Bauges, tous les savons et cosmétiques sont confectionnés
             à la main pour répondre au mieux aux besoins de chacun.
        </p>
        <a class="button-xl bg-cyan color-white" href="">Viens me découvrir !</a>
    </div>
    <img src="https://picsum.photos/488/515" alt="Image savons">
</section>

<!--
    Valeurs
 -->
<section id="values-section" class="mg-136px-t bg-cyan-light">
    <div class="main-wrapper values-container">
        <!-- Respect du corps -->
        <div class="values ">
            <img src="<?php echo get_template_directory_uri() . '/images/icons/icons_respect-du-corps.png'; ?>" alt="Icon ">
            <h3 class="text-xl ft-semibold mg-16px-t" >Respect du corps</h3>
            <p class="text-base mg-24px-t">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, eius mollitia minima expedita modi autem aliquid quasi quo, sequi in enim harum recusandae doloribus reprehenderit cupiditate iusto vel impedit incidunt.</p>
            <a class="ft-semibold color-cyan mg-16px-t" href="">En savoir plus</a>
        </div>
        <!-- Produits Locaux -->
        <div class="values ">
            <img src="<?php echo get_template_directory_uri() . '/images/icons/icons_produits-locaux.png'; ?>" alt="Icon ">
            <h3 class="text-xl ft-semibold mg-16px-t" >Produits Locaux</h3>
            <p class="text-base mg-24px-t">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, eius mollitia minima expedita modi autem aliquid quasi quo, sequi in enim harum recusandae doloribus reprehenderit cupiditate iusto vel impedit incidunt.</p>
            <a class="ft-semibold color-cyan mg-16px-t" href="">En savoir plus</a>
        </div>
        <!-- Produits naturels -->
        <div class="values ">
            <img src="<?php echo get_template_directory_uri() . '/images/icons/icons_produits-naturels.png'; ?>" alt="Icon ">
            <h3 class="text-xl ft-semibold mg-16px-t" >Produits naturels</h3>
            <p class="text-base mg-24px-t">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, eius mollitia minima expedita modi autem aliquid quasi quo, sequi in enim harum recusandae doloribus reprehenderit cupiditate iusto vel impedit incidunt.</p>
            <a class="ft-semibold color-cyan mg-16px-t" href="">En savoir plus</a>
        </div>
    </div>
</section>


<!--
    Savons et cosmétiques
-->
<section id="features-section" class="pg-136px-t main-wrapper">


    <h2 class="ft-nunito text-xxl ft-bold ">
        Savons et cosmétiques
    </h2>
    <div id="features" class="mg-96px-t">
        <!-- Features 1 -->
        <div class="features">
            <div class="feature-image">
                <img src="https://picsum.photos/300/300" style=" --mask:url(<?php echo get_template_directory_uri() . '/images/blob/blob1.png'; ?>);" alt="png mask blob">
            </div>
            <h3 class="text-lg ft-semibold mg-72px-t ">Les Savons</h3>
            <p class="mg-24px-t">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fusce eros, at massa dictum nulla a. </p>
            <a class="color-cyan ft-semibold mg-16px-t" href="">En savoir plus</a>
        </div>

        <!-- Features 2 -->
        <div class="features">
            <div class="feature-image">
                <img src="https://picsum.photos/300/300" style=" --mask:url(<?php echo get_template_directory_uri() . '/images/blob/blob2.png'; ?>);" alt="png mask blob">
            </div>
            <h3 class="text-lg ft-semibold mg-72px-t ">Les Baumes</h3>
            <p class="mg-24px-t">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fusce eros, at massa dictum nulla a. </p>
            <a class="color-cyan ft-semibold mg-16px-t" href="">En savoir plus</a>
        </div>

        <!-- Features 3 -->
        <div class="features">
            <div class="feature-image">
                <img src="https://picsum.photos/300/300" style=" --mask:url(<?php echo get_template_directory_uri() . '/images/blob/blob3.png'; ?>);" alt="png mask blob">
            </div>
            <h3 class="text-lg ft-semibold mg-72px-t ">Huiles & Sérums</h3>
            <p class="mg-24px-t">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fusce eros, at massa dictum nulla a. </p>
            <a class="color-cyan ft-semibold mg-16px-t" href="">En savoir plus</a>
        </div>
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
            <img class="doubled-image-bg" src="//picsum.photos/800" alt="background image">
            <img class="doubled-image-fg" src="//picsum.photos/850" alt="foreground image">
        </div>


        <!-- About text -->
        <div id="about-text">
            <h2 class="ft-nunito text-xxl ft-bold color-white" >
                À Propos
            </h2>
            <p class="mg-24px-t color-white">
            Soâm est une savonnerie qui s’engage à respecter votre peau en utilisant des ingrédients 100% naturels. Implanté en Savoie, dans le massif des Bauges, tous les savons et cosmétiques sont confectionnés à la main pour répondre au mieux aux besoins de chacun.
            </p>
            <a id="about-button" class="mg-32px-t button bg-cyan color-white" href="">En savoir plus</a>
        </div>
    </div>

</section>

<!--
    Besoin de conseils ?
-->
<section id="advice-section">

</section>

<!--
    points de ventes
-->
<section id="selling-points-section">

</section>
<?php

get_footer();

?>
