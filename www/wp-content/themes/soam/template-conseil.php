
<?php
/*
Template Name: Page conseils


TODO: Refactor
TODO: Vérifier + faire la version responsive
TODO: Vérifier dynamisation
 */
get_header();

$soins = get_field('soins');
?>

<?php
    if(count($soins)==1):
      foreach ( $soins as $key => $care ):
  ?>
    <div class="care main-wrapper">
      <div class="care_image">
        <img src="<?php echo $care['image_du_soin']['url'] ?>" alt="<?php echo $care['image_du_soin']['alt']  ?>">
      </div>
      <div class="care_text">
        <h2 class="underlined_header text-xxl ft-nunito ft-bold"><?php echo $care['type_du_soin']; ?></h2>
        <div><?php echo $care['contenu_du_soin']; ?></div>
      </div>
    </div>
  <?php
      endforeach;
    endif;
  ?>

  <?php
    if(count($soins)>1):
      foreach ( $soins as $key => $care ):
  ?>
    <?php
      if(!($key&1)):
    ?>
    <div class="care main-wrapper">
      <div class="care_image">
        <img src="<?php echo $care['image_du_soin']['url'] ?>" alt="<?php echo $care['image_du_soin']['alt']  ?>">
      </div>
      <div class="care_text">
        <h2 class="underlined_header text-xxl ft-nunito ft-bold"><?php echo $care['type_du_soin']; ?></h2>
        <div class="text-base"><?php echo $care['contenu_du_soin']; ?></div>
      </div>
    </div>
    <?php
      endif;
    ?>

    <?php
      if($key&1):
    ?>
    <div class="care main-wrapper">
      <div class="care_text">
        <h2 class="underlined_header text-xxl ft-nunito ft-bold"><?php echo $care['type_du_soin']; ?></h2>
        <div class="text-base"><?php echo $care['contenu_du_soin']; ?></div>
      </div>
      <div class="care_image">
        <img src="<?php echo $care['image_du_soin']['url'] ?>" alt="<?php echo $care['image_du_soin']['alt']  ?>">
      </div>
    </div>
    <?php
      endif;
    ?>

  <?php
      endforeach;
    endif;
  ?>
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