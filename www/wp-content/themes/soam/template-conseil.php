
<?php
/*
Template Name: Page conseils
 */
get_header();
?>
    <div class="hair_care main-wrapper">
      <div class="hair_image">
        <img src=<?php echo get_template_directory_uri().'/images/conseils/hair.png';?>  alt="Cheveux"/>
      </div>
      <div class="hair_text">
        <h2 class="underlined_header text-xxl">Soin des Cheveux</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. </p>
      </div>
    </div>

    <div class="skin_care main-wrapper">
      <div class="skin_text">
        <h2 class="underlined_header text-xxl">Soin de la peau</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.</p>
      </div>
      <div class="skin_image">
      <img src=<?php echo get_template_directory_uri().'/images/conseils/hair.png';?>  alt="Cheveux"/>
      </div>
    </div>

    <div class="contact">
      <div class="formulaire_image">
      <img class="form_image" src=<?php echo get_template_directory_uri().'/images/conseils/contacter.png';?>  alt="contact_image"/>
      </div>
      <div class="formulaire">
        <h2 class=" contact-me text-xxl">Me contacter</h2>
        <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. At malesuada quis non consectetur hendrerit pellentesque hac. Elementum orci et egestas ut sit amet, enim est. Massa sed porta viverra sed tincidunt.</p>
        <form action="action.php" method="post">
          <p >Name</p>
          <p id="name"> <input type="text" name="nom" placeholder="Amandine..." /></p>
          <p >Mail</p>
          <p id="mail"><input type="text" name="mail" placeholder="@..."/></p>
          <p >Message</p>
          <p id="message"><input type="text" name="message" placeholder="Message..."></p>
          <p ><input type="submit" value="Envoyer"></p>
        </form>
      </div>
    </div>

    <div class="infos">
      <div class="about">
        <h2 class="text-xxl">A propos</h2>
        <p class="about_text text-base">Soâm est une savonnerie qui s’engage à respecter votre peau en utilisant des ingrédients 100% naturels. Implanté en Savoie, dans le massif des Bauges, tous les savons et cosmétiques sont confectionnés à la main pour répondre au mieux aux besoins de chacun.</p>
        <a class="button bg-magenta color-white" name="more">En savoir plus</a>
      </div>

      <div class="find_me">
        <h2 class="text-xxl">Où me trouver ?</h2>
        <p class="about_text text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In integer eu porta fusce vitae, nunc nunc turpis sagittis. Sit pulvinar placerat posuere tincidunt at pulvinar proin facilisis tortor. Viverra in erat sed pharetra odio vulputate ut malesuada eget. Curabitur donec.</p>
        <a href="#adress">1177 Route des Croës,73340 Lescheraines</a>
        <a href="#phone">0651600314</a>
        <a href="#mail">Email@mail.com</a>
      </div>
    </div>

<?php

get_footer();

?>