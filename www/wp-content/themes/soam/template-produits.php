<?php
/*
Template Name: Page produit
 */
get_header();
?>


    <div class="search_menu">
      <a href="#all">Tous les produis</a>
      <a href="#soap">Savons</a>
      <a href="#oil">Huiles et Sérums</a>
      <a href="#balm">Baumes</a>
    </div>
    <div class="products">

      <div class="soap">
        <h2>Les savons à froid</h2>
        <div class="soap_window">
          <button type="button" name="neemteem">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Le savon Neem Teem"> 
            <h3>Neem Teem</h3>
          </button>


          <button type="button" name="dendelion">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Le savon Dendelion">
            <h3>Dendelion</h3>
          </button>

          <button type="button" name="sativa">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Le savon Sativa">
            <h3>Sativa</h3>
          </button>

          <button type="button" name="yemanjah">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Le savon Yemanjah">
            <h3>Yemanjah</h3>
          </button>

          <button type="button" name="rebelle">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Le savon le Rebelle">
            <h3>Le Rebelle</h3>
          </button>

          <button type="button" name="kaoline">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Le savon Kaoline">
            <h3>Kaoline</h3>
          </button>

        </div>

      </div>

      <div class="oil">
        <h2>Les huiles et sérums</h2>
        <div class="oil_window">
          <button type="button" name="bonnemine">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile sèche bonne mine">
            <h3>Huile sèche bonne mine anti-âge</h3>
          </button>

          <button type="button" name="protectionsolaire">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile sèche protection solaire">
            <h3>Huile sèche protection solaire</h3>
          </button>

          <button type="button" name="apressoleil">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile apaisante après-soleil">
            <h3>Huile apaisante après-soleil</h3>
          </button>

          <button type="button" name="sublimante">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile sèche sublimante">
            <h3>Huile sèche sublimante</h3>
          </button>

          <button type="button" name="coutouryeux">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Sérum les 3C coutours des yeux">
            <h3>Sérum "les 3C" Coutours des yeux</h3>
          </button>

          <button type="button" name="postepilation">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile sèche post-épilation">
            <h3>Huile sèche post-épilation</h3>
          </button>

          <button type="button" name="vergetureenceinte">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile de massage anti-vergeture (femme enceinte)">
            <h3>Huile de massage anti-vergeture (femme enceinte)</h3>
          </button>

          <button type="button" name="soincheveuxsecs">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile soin cheveux secs">
            <h3>Huile de soins cheveux secs</h3>
          </button>

          <button type="button" name="barbeoil">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Barb'Oil soin de la barbe">
            <h3>Barb'Oil soin de la barbe</h3>
          </button>

          <button type="button" name="sportif">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile des sportifs avant et après">
            <h3>Huile des sportifs avant et après</h3>
          </button>

          <button type="button" name="peauacnéique">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile apaisante et hydratante peau acnéique">
            <h3>Huile apaisante et hydratante peau acnéique</h3>
          </button>

          <button type="button" name="vergeture">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Huile de massage anti-vergeture corps">
            <h3>Huile de massage anti-vergeture corps</h3>
          </button>

        </div>

      </div>

      <div class="balm">
        <h2>Les baumes</h2>
        <div class="balm_window">
          <button type="button" name="yallah">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Baume Yallah nutrition">
            <h3>Baume Yallah nutrition</h3>
          </button>

          <button type="button" name="miracle">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Baume miracle amande douce">
            <h3>Baume miracle amande douce</h3>
          </button>

          <button type="button" name="demaquillant">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Baume nettoyant démaquillant">
            <h3>Baume nettoyant démaquillant</h3>
          </button>

          <button type="button" name="relaxant">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Baume de massage relaxant">
            <h3>Baume de massage relaxant</h3>
          </button>

          <button type="button" name="miracle2">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Baume miracle huile d'olive">
            <h3>Baume miracle huile d'olive</h3>
          </button>

          <button type="button" name="intense">
            <img src=<?php echo get_template_directory_uri() . '/images/produit.png'; ?> alt="Baume réparateur intense ++">
            <h3>Baume réparateur intense ++</h3>
          </button>

        </div>

      </div>

    </div>
    <div class="infos">
      <div class="about">
        <h2>A propos</h2>
        <p>Soâm est une savonnerie qui s’engage à respecter votre peau en utilisant des ingrédients 100% naturels. Implanté en Savoie, dans le massif des Bauges, tous les savons et cosmétiques sont confectionnés à la main pour répondre au mieux aux besoins de chacun.</p>
        <button type="button" name="more">En savoir plus</button>
      </div>

      <div class="find_me">
        <h2>Où me trouver ?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In integer eu porta fusce vitae, nunc nunc turpis sagittis. Sit pulvinar placerat posuere tincidunt at pulvinar proin facilisis tortor. Viverra in erat sed pharetra odio vulputate ut malesuada eget. Curabitur donec.</p>
        <a href="#adress">1177 Route des Croës,73340 Lescheraines</a>
        <a href="#phone">0651600314</a>
        <a href="#mail">Email@mail.com</a>
      </div>
    </div>

    <?php 
    get_footer()
    ?>