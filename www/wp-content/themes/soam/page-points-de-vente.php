<?php
get_header();
?>



<section class="info ft-mulish main-wrapper">
    <h1 class="text-xxl ft-nunito ft-bold">Où me trouver ?</h1>
    <div class="part1">
        <div class="left">
            <div class="days text-lg ft-semibold">
                <ul>
                    <li>Mardi</li>
                    <li>Mercredi</li>
                    <li>Jeudi</li>
                    <li>Vendredi</li>
                    <li>Samedi</li>
                </ul>
                <ul>
                    <li>Fermé</li>
                    <li>10h - 12h15</li>
                    <li>10h - 12h15</li>
                    <li>10h - 12h15</li>
                    <li>10h - 12h15</li>
                </ul>
                <ul>
                    <li>15h - 18h</li>
                    <li>15h - 18h</li>
                    <li>15h - 18h</li>
                    <li>15h - 18h</li>
                    <li>15h - 18h</li>
                </ul>
            </div>
            <p class="note text-sm">Ouvert toute l'année</p>

            <div class="data text-base ft-semibold">
                <ul>
                    <li>
                        <img src="<?= get_template_directory_uri() . '/images/icons/map_pin.svg'; ?>" alt="">
                        <p>1177 Route des Croës,
                            73340 Lescheraines</p>
                    </li>
                    <li>
                        <img src="<?= get_template_directory_uri() . '/images/icons/phone.svg'; ?>" alt="">
                        <p>0651600314</p>
                    </li>
                    <li>
                        <img src="<?= get_template_directory_uri() . '/images/icons/mail.svg'; ?>" alt="">
                        <p>Email@mail.com</p>
                    </li>

                </ul>
            </div>
        </div>

        <div class="right">
            <img src="<?= get_template_directory_uri() . '/images/points_de_vente/heart.svg'; ?>" alt="">
        </div>
    </div>
</section>
<section class="map">

    <img src="https://source.unsplash.com/random/1440x697/" alt="">

</section>
<section class="partenaire bg-cyan pg-112px-l pg-64px-y">
    <div class="main-wrapper">
        <h2 class="text-xxl ft-bold ft-nunito">Les partenaires</h2>
        <p class="text-lg">Soâm est une savonnerie qui s’engage à respecter votre peau en utilisant des
            ingrédients 100%
            naturels. Implanté en Savoie, dans le massif des Bauges, tous les savons et cosmétiques sont
            confectionnés à la main pour répondre au mieux aux besoins de chacun.</p>
        <button class="button ft-semibold">
            En savoir plus
        </button>
    </div>
</section>



<?php

var_dump(get_footer());

?>