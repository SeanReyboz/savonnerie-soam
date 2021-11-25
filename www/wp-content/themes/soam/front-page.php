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
            <?php echo get_field("title"); ?>
        </h1>
        <p class="text-base">
            <?php echo get_field("description"); ?>
        </p>
        <a class="button-xl bg-cyan color-white" href="<?php  echo $link['url']; ?>">
             <?php 
                echo $link['title'];
             ?> 
        </a>
    </div>
    <img src="
        <?php 
            echo $headerimg['url'];
         ?>" 
         alt="Image savons">
</section>

<!--
    Valeurs
 -->
<section id="values-section" class="mg-136px-t bg-cyan-light">
    <div class="main-wrapper values-container">

        <?php 
            
            foreach ($values as $value) {
                ?>
                     <div class="values ">
                        <img src="<?php echo $value['icon']['url']; ?>" alt="Icon ">
                        <h3 class="text-xl ft-semibold mg-16px-t" ><?php echo $value['title']; ?></h3>
                        <p class="text-base mg-24px-t"><?php echo $value['description']; ?></p>
                        <a class="ft-semibold color-cyan mg-16px-t" href="<?php echo $value['link']['url']; ?>"><?php echo $value['link']['title']; ?></a>
                    </div>   
                <?php
            }
        
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
       <?php echo $products['title']; ?>
    </h2>
    <div id="features" class="mg-96px-t">

        <?php foreach ($products['product'] as $product) {
        ?>
        <!-- Features 1 -->
        <div class="features">
            <div class="feature-image">
                <img src="<?php echo $product['image']['url']; ?>" style=" --mask:url(<?php echo get_template_directory_uri() . '/images/blob/blob1.png'; ?>);" alt="png mask blob">
            </div>
            <?php if ($product['product_name']){ ?>
            <h3 class="text-lg ft-semibold mg-72px-t "><?php echo $product['product_name']; ?></h3>
                <?php } ?>
            <p class="mg-24px-t"> <?php echo $product['product_description']; ?> </p>
            <a class="color-cyan ft-semibold mg-16px-t" href="<?php echo $product['product_link']['url']; ?>"><?php echo $product['product_link']['title']; ?></a>
        </div>

        <?php

        }
        
        
        
        ?>


      

        
        <!-- <div class="features">
            <div class="feature-image">
                <img src="https://picsum.photos/300/300" style=" --mask:url(<?php echo get_template_directory_uri() . '/images/blob/blob2.png'; ?>);" alt="png mask blob">
            </div>
            <h3 class="text-lg ft-semibold mg-72px-t ">Les Baumes</h3>
            <p class="mg-24px-t">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fusce eros, at massa dictum nulla a. </p>
            <a class="color-cyan ft-semibold mg-16px-t" href="">En savoir plus</a>
        </div>

        
        <div class="features">
            <div class="feature-image">
                <img src="https://picsum.photos/300/300" style=" --mask:url(<?php echo get_template_directory_uri() . '/images/blob/blob3.png'; ?>);" alt="png mask blob">
            </div>
            <h3 class="text-lg ft-semibold mg-72px-t ">Huiles & Sérums</h3>
            <p class="mg-24px-t">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fusce eros, at massa dictum nulla a. </p>
            <a class="color-cyan ft-semibold mg-16px-t" href="">En savoir plus</a>
        </div> -->
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
            <img class="doubled-image-bg box-shadow-lg" src=" 
            <?php 
                echo $about['background_img']['url'];
            ?> " alt="background image">
            <img class="doubled-image-fg box-shadow-lg" src=" 
            <?php 
                echo $about['image']['url'];
             ?> " alt="foreground image">
        </div>


        <!-- About text -->
        <div id="about-text">
            <h2 class="ft-nunito text-xxl ft-bold color-white" >
            <?php 
                echo $about['title'];
             ?> 
            </h2>
            <p class="mg-24px-t color-white">
            <?php 
                echo $about['text'];
             ?> 
            </p>
            <a id="about-button" class="mg-32px-t button bg-cyan color-white" href=" <?php echo $about['link']['url'];?>"> 
                <?php 
                    echo $about['link']['title'];
                ?> </a>
        </div>
    </div>

</section>

<!--
    Besoin de conseils ?
-->

<section id="advice-section" class="mg-136px-t">
    <div id="advice-info" class="mg-136px-l">
        <h2 class="ft-nunito text-xxl ft-bold ">
        <?php 
            echo $advice_section['title'];
        ?>
        </h2>
        <p class="text-base mg-16px-t">
        <?php 
            echo $advice_section['text'];
        ?>
        </p>
        <a class="mg-32px-t button bg-cyan color-white" href="<?php echo $advice_section['link']['url'];?>"><?php 
            echo $advice_section['link']['title'];
        ?></a>
        <div id="advice-links">

       
        <?php foreach ($advice_section['care'] as $care) {
        ?>


            <div class="advice-link mg-88px-r">
                <img src="<?php echo $care['image']['url'] ?>" alt="" class="mg-16px-r">
                <a href="<?php echo $care['link']['url'] ?>" class="text-base ft-semibold color-black"><?php echo $care['link']['title'] ?></a>
            </div>


            <?php } ?>
            <!-- <div class="advice-link">
                <img src="https://picsum.photos/64" alt="" class="mg-16px-r">
                <a href="" class="text-base ft-semibold color-black">Soins de la peau</a>
            </div> -->
        </div>
    </div>
    <img src="
    <?php 
            echo $advice_section['image']['url'];
        ?>
    " alt="Image savons">


</section>

<!--
    points de ventes
-->
<section id="selling-points-section" class="mg-136px-t pg-40px-y bg-cyan">
    <!-- Swiper container -->
    <div class="selling-points-container main-wrapper mg-40px-t">
        <h2 class="text-center ft-nunito text-xxl ft-bold color-white mg-88px-b">Points de vente</h2>
        <div class="swiper selling-points-content">
            <div class="swiper-wrapper">
                <?php 
                    // Go through each "slider" item and put it in a `swiper-slider` div
                    //foreach ($variable as $key => $value) { ?>
                    <div class="swiper-slider">
                        

                    </div>
                <?php //} ?>
            </div>
            <div class="swiper-pagination">

            </div>
        </div>
    </div>

</section>
<?php

get_footer();

?>
