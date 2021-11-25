<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
  <title></title>
</head>


<!-- Je ne sais pas ce que vous voulez faire avec vos css donc j'y met ici, à changer -->

<style type="text/css">
  .product {
    display: flex;
    margin: auto;
    margin-top: 2vh;
    flex-direction: column;
    border: 1px solid black;
    border-radius: 100px;
    background-color: white;
    background-image: url("images/popin/background_popin.png");
    background-repeat: no-repeat;
    background-size: 35em;
    background-position-x: 0px;
    width: 80vw;
    height: 600pw;
  }

  h2 {
    font-weight: bold;
    font-size: xxx-large;
    text-align: center;
  }

  #close {
    width: 4%;
    position: absolute;
    top: 50px;
    left: 82%;
  }

  #close:hover {
    cursor: pointer;
  }

  .product_presentation {
    display: flex;
    padding-bottom: 50px;
  }

  .image_product {
    display: flex;
    align-items: center;
    width: 55vw;
    margin-left: 5vw;
  }

  .image_product img {
    width: 25vw;
  }

  .about_product {
    max-width: 35vw;
    margin-right: 5vw;
  }

  h3.product_effect {
    color: #47A0B0;
    font-weight: bold;
    font-size: x-large;
  }

  h4 {
    color: #F2A42E;
    font-weight: bold;
    font-size: larger;
  }

  .composition div {
    padding-top: 1vw;
    padding-bottom: 1vw;
    font-size: medium;
  }

  div.skin {
    display: flex;
  }

  div.skin div {
    padding-top: unset;
    padding-bottom: unset;
    margin: auto;
    color: white;
    background-color: #9D2450;
    padding: 5px;
    border-radius: 5px;
    text-align: center;
    font-size: 1.2vw;
    box-shadow: 8px 8px 10px #222222;
    ;
  }
</style>

<!-- ------------------------------------------------------- -->

<body>
  <div class="product">
    <h2>Savon Neem Teen</h2>
    <img id="close" src="<?php echo get_template_directory_uri() . "/images/popin/close.svg"; ?>" alt="close popin" />
    <script type="text/javascript">
      document.getElementById("close").addEventListener("click", function() {
        TweenMax.to(".product", 1, {
          delay: 0,
          opacity: 0,
          y: -700,
          ease: Expo.easeInOut,
        })
        setTimeout(disappear, 1000);

        function disappear() {
          document.querySelector("product").style.display = "none";
        }
      })
    </script>
    <div class="product_presentation">
      <div class="image_product">
        <img src="<?php echo get_template_directory_uri() . "/images/popin/neem_teen.png"; ?>" alt="Savon neem teen">
      </div>

      <div class="about_product">
        <h3 class="product_effect">Répare et protège en illuminant la peau.</h3>
        <h4>Les actifs : </h4>
        <div class="composition">
          <div>
            <b>Huile de Neem :</b> antibactérienne et antifongique, aide à lutter contre les infections de la peau, de l’acné aux mycoses, en passant par l’eczéma et le psoriasis.
          </div>
          <div>
            <b>Beurre de Mangue :</b> adoucissant et assouplissant, maintient l’hydratation de la peau.
          </div>
          <div>
            <b>Huile Onagre :</b> restaure la souplesse de l’épiderme, également adoucissante et revitalisant.
          </div>
          <div>
            <b>Huile de Cameline :</b> riche en oméga 3 et 6 elle est apaisante et revitalisante.
          </div>
          <div>
            Surgras 8 %
          </div>
          <div class="skin">
            <div>Peaux acnéique</div>
            <div>Peaux mixtes</div>
            <div>Peaux à problèmes</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>