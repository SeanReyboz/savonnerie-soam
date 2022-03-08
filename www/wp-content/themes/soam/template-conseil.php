
<?php
/*
Template Name: Page conseils


TODO: Vérifier + faire la version responsive
TODO: Vérifier dynamisation
 */
get_header();
?>

    <!-- Bloc de contenu princpale -->
    <?php include "contenu-principaux.php"; ?>

    <div class="contact">
      <div class="formulaire_image">
        <img class="form_image" src="<?= get_template_directory_uri().'/images/conseils/contacter.png' ?>" alt="contact_image"/>
      </div>
      <div class="formulaire">
        <h2 class="contact-me text-xxl ft-nunito ft-bold">Me contacter</h2>
        <p class="desc text-base mg-32px-y">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit
            pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed
            tincidunt.
        </p>
        <form action="" method="post">
            <div class="form-control">
                <label for="name">Nom</label>
                <input type="text" name="nom" id="name" />
            </div>
            <div class="form-control">
                <label for="mail">Mail</label>
                <input type="email" name="mail" id="mail" />
            </div>
            <div class="form-control">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" />
            </div>
            <input type="submit" value="Envoyer" />
        </form>
      </div>
    </div>

    <!-- Bloc d'infos complémentaires -->
    <?php include "pre-footer-info-block.php"; ?>

<?php

get_footer();

?>