<?php
/*
Theme Name: GamEscola
Theme URI: 
Author: GamEscola - Hussani - Michelli - Tiago - Silvia
Author URI: https://plus.google.com/u/0/b/112977374414232772041/
Description: Aplicação online que visa promover a melhoria no ensino básico
Version: 0.1

*/

if ( ! is_user_logged_in() ) { 
	wp_redirect( bloginfo('url') );
	exit;
}

get_header(); 
?>

 <section class="int-home">
	<div class="row fundo-int">
		<section class="head-int">
			<h2 class="large-10 columns" id="item_post"><strong>INSTRUÇÕES</strong> para jogo: <?php single_cat_title(); ?></h2>
			<div class="large-2 columns sound-bl">
				<span>ouvir</span>
				<img class="icon-som" src="<?php bloginfo('template_url'); ?>/images/sound.png" alt="Imagem de som" />
			</div>		
		</section>
		<section class="answ">
			<section class="slide-int">
				<ul class="bxslider">
					<li class="instrucoes"><?php echo term_description(); ?></li>
					<li class="iniciar_jogo">
						<img src="<?php bloginfo('template_url'); ?>/images/abelha_big.png" alt="Iniciar Jogo" />
						<span>inicar jogo <i class="fa fa-arrow-right"></i></span>
					</li>
					
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); $id = get_the_id(); ?>
					
					<?php
					$images = rwmb_meta( 'quiz_images', 'type=image' );
					foreach ( $images as $image ){
					    echo "<li class='pergunta_item' id='item_".$id."' data-title='".get_the_title()."'><img src='".$image['full_url']."' alt='".$image['alt']."' /></li>";
					}
					?>
					
					<?php endwhile; ?>
					<li class="medals">
						<!--<div class="top-ranking">
							<div class="large-2 columns"><img src="<?php bloginfo('template_url'); ?>/images/bee.png" alt="Imagem de som" /></div>
							<div class="large-10 columns"><h3>Você ganhou 5 abelhas!</h3></div>
						</div>-->
						<section class="large-4 columns medal-awd">
							<img src="<?php bloginfo('template_url'); ?>/images/bee.png" alt="Imagem de som" />
							<h3>Tiago Nicastro</h3>
						</section>
						<section class="large-4 columns medal-awd">
							<img src="<?php bloginfo('template_url'); ?>/images/bee.png" alt="Imagem de som" />
							<h3>Hussani Oliveira</h3>
						</section>
						<section class="large-4 columns medal-awd">
							<img src="<?php bloginfo('template_url'); ?>/images/bee.png" alt="Imagem de som" />
							<h3>Silvia Rodrigues</h3>
						</section>
					</li>
					<?php else : ?>
					<li><img src="<?php bloginfo('template_url'); ?>/images/rectangle.png" alt="Figura geométrica com quatro lados" /></li>
					<?php endif; ?>
				</ul>				
			</section>
			
		</section>
		
		<section class="large-12 columns foot-int">
			<div class="small_bee"><img src="<?php bloginfo('template_url'); ?>/images/abelha-small.png" alt="Etapa do Quiz" /></div>
		</section>
	</div>
 </section>


<?php get_footer(); ?>