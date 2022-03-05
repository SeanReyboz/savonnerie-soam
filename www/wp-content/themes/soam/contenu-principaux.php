<?php
$contenu_en_quinconce = get_field('contenu_en_quinconce');
?>

<?php
    if(count($contenu_en_quinconce)==1):
      foreach ( $contenu_en_quinconce as $key => $content ):
  ?>
    <div class="content main-wrapper">
      <div class="content_image">
        <img src="<?php echo $content['image']['url'] ?>" alt="<?php echo $content['image']['alt']  ?>">
      </div>
      <div class="content_text">
        <h2 class="underlined_header text-xxl ft-nunito ft-bold"><?php echo $content['titre_du_contenu']; ?></h2>
        <div><?php echo $content['contenu']; ?></div>
      </div>
    </div>
  <?php
      endforeach;
    endif;
  ?>

  <?php
    if(count($contenu_en_quinconce)>1):
      foreach ( $contenu_en_quinconce as $key => $content ):
  ?>
    <?php
      if(!($key&1)):
    ?>
    <div class="content main-wrapper">
      <div class="content_image">
        <img src="<?php echo $content['image']['url'] ?>" alt="<?php echo $content['image']['alt']  ?>">
      </div>
      <div class="content_text">
        <h2 class="underlined_header text-xxl ft-nunito ft-bold"><?php echo $content['titre_du_contenu']; ?></h2>
        <div class="text-base"><?php echo $content['contenu']; ?></div>
      </div>
    </div>
    <?php
      endif;
    ?>

    <?php
      if($key&1):
    ?>
    <div class="content main-wrapper">
      <div class="content_text">
        <h2 class="underlined_header text-xxl ft-nunito ft-bold"><?php echo $content['titre_du_contenu']; ?></h2>
        <div class="text-base"><?php echo $content['contenu']; ?></div>
      </div>
      <div class="content_image">
        <img src="<?php echo $content['image']['url'] ?>" alt="<?php echo $content['image']['alt']  ?>">
      </div>
    </div>
    <?php
      endif;
    ?>

  <?php
      endforeach;
    endif;
  ?>