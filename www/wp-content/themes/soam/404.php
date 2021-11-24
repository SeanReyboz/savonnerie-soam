<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Agence Pikoom">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body>
    <div id="page404">
      <h1 class="ft-nunito mg-136px-t">Oups, erreur 404</h1>
      <p class="mg-40px-t">Il semblerait que la page ne soit plus disponible...</p>
      <a id="button404" class="button-xl color-white bg-cyan mg-40px-t">Retour à l'accueil</a>

      <img id="page404-blue"src="<?php echo get_template_directory_uri() . "/images/blot/blueblot.png"; ?>" alt="blueblot">
      <img id="page404-purple"src="<?php echo get_template_directory_uri() . "/images/blot/purpleblot.png"; ?>" alt="purpleblot">
      <img id="page404-yellow"src="<?php echo get_template_directory_uri() . "/images/blot/yellowblot.png"; ?>" alt="yellowblot">
    </div>

  </body>
</html>
