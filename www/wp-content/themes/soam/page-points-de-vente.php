<?php
$agenda_jours = get_field('agenda')[0]['jours'];
$agenda_annotation = get_field('agenda')[0]['annotation'];
$informations = get_field('informations');
$partenaires = get_field('les_partenaires');

get_header();
?>



<section class="info ft-mulish main-wrapper">
    <h1 class="text-xxl ft-nunito ft-bold">Où me trouver ?</h1>
    <div class="part1">
        <div class="left">
            <div class="days text-lg ft-semibold">


                <ul>
                    <?php
                    if (!empty($agenda_jours))
                        // Make sure that `valuesìs not empty to prevent errors

                        foreach ($agenda_jours as $value) :

                    ?>
                    <li><?= $value['jour_de_la_semaine'] ?></li>
                    <?php

                        endforeach

                    ?>
                </ul>
                <ul>
                    <?php
                    if (!empty($agenda_jours))
                        // Make sure that `valuesìs not empty to prevent errors

                        foreach ($agenda_jours as $value) :

                    ?>
                    <li><?= $value['horaire_de_la_matinee'] ?></li>
                    <?php

                        endforeach

                    ?>
                </ul>
                <ul><?php
                    if (!empty($agenda_jours))
                        // Make sure that `valuesìs not empty to prevent errors

                        foreach ($agenda_jours as $value) :

                    ?>
                    <li><?= $value['horaire_de_lapres-midi'] ?></li>
                    <?php

                        endforeach

                    ?>
                </ul>
            </div>
            <p class="note text-sm"><?= $agenda_annotation ?></p>

            <div class="data text-base ft-semibold">
                <ul>
                    <li>
                        <img src="<?= get_template_directory_uri() . '/images/icons/map_pin.svg'; ?>" alt="">
                        <p><?= $informations['adresse'] ?></p>
                    </li>
                    <li>
                        <img src="<?= get_template_directory_uri() . '/images/icons/phone.svg'; ?>" alt="">
                        <a href="tel:+<?= $informations['telephone'] ?>" class="text"><?= $informations['telephone'] ?></a>
                    </li>
                    <li>
                        <img src="<?= get_template_directory_uri() . '/images/icons/mail.svg'; ?>" alt="">
                        <a href="mailto:<?= $informations['mail'] ?>" class="text"><?= $informations['mail'] ?></a>
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

    <iframe
        src="https://www.google.com/maps/embed?pb=!4v1646648913465!6m8!1m7!1sZnU47Z-5ZOkDsfppC1q_6A!2m2!1d45.70840037878335!2d6.10548575648052!3f49.42238668731225!4f4.850992337515365!5f0.7820865974627469"
        width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</section>
<?php if ( $partenaires ): ?>
    <section class="partenaire bg-cyan pg-112px-l pg-64px-y">
        <div class="main-wrapper">
            <h2 class="text-xxl ft-bold ft-nunito"><?= $partenaires['titre'] ?></h2>
            <p class="text-lg"><?= $partenaires['texte'] ?></p>
            <a href="<?= $partenaires['link'] ?>" class="button-xl bg-magenta color-white ft-semibold ft-mulish">
                En savoir plus
            </a>
        </div>
    </section>
<?php endif; ?>



<?php

get_footer();

?>