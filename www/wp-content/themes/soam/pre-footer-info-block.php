<?php
    $info_block = get_field('pre_footer_information_block', 'options');
?>

<section class="infos mg-136px-t">
	<article class="about color-white">
		<h2 class="text-xxl ft-nunito">À propos</h2>
		<p class="about_text text-base">
			<?=  $info_block['about']['content']  ?>
		</p>
		<a href="<?= $info_block['about']['link'] ?>"
		   class="button bg-magenta color-white text-base"
		   id="more_about"
        >
            En savoir plus
		</a>
	</article>
	<article class="find_me">
		<h2 class="text-xxl ft-nunito">Où me trouver ?</h2>
		<p class="about_text text-base">
			<?= $info_block['find_me']['content'] ?>
		</p>
		<ul>
			<?php

			$adresses = $info_block['find_me']['links']['adresses'];
			$phones   = $info_block['find_me']['links']['phones'];
			$mails    = $info_block['find_me']['links']['mails'];

			//debug($adresses);
			//debug($phones);
			//debug($mails);

			if ( $adresses )  foreach ( $adresses as $key => $adresse ):
            ?>

                <li><?=  $adresse['adresse']  ?></li>

            <?php
			endforeach;

			if ( $phones ) foreach ( $phones as $phone ):
            ?>

                <li>
                    <a href="tel:+<?= $phone['phone'] ?>"><?= $phone['phone'] ?></a>
                </li>

            <?php
			endforeach;

			if ( $mails ) foreach ( $mails as $mail ):
            ?>

                <li>
                    <a href="mailto:<?= $mail['mail'] ?>"><?= $mail['mail'] ?></a>
                </li>

			<?php
			endforeach;
			?>
		</ul>
	</article>
</section>
