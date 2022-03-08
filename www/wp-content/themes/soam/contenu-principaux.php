<?php
$contenu_en_quinconce = get_field('contenu_en_quinconce');

//debug($contenu_en_quinconce);

// TODO: modifier le nom de la classe "content" pour éviter des conflits avec le markup existant...
?>

<?php
    foreach ( $contenu_en_quinconce as $key => $content ) :

        $even_or_odd = $key % 2 === 0 ? "even" : "odd";
?>
    <div
        class="content-wrapper main-wrapper"
	    data-is-<?= $even_or_odd ?>
    >
        <div class="content_image" style="--color: <?= $content['background_color'] ?>">
            <img src="<?= $content['image']['url'] ?>" alt="<?= $content['image']['alt']  ?>">
        </div>
        <div class="content_text">
            <h2 class="underlined_header text-xxl ft-nunito ft-bold"><?= $content['titre_du_contenu']; ?></h2>
            <div class="text-base"><?= $content['contenu']; ?></div>
        </div>
    </div>
<?php
    endforeach;
?>
