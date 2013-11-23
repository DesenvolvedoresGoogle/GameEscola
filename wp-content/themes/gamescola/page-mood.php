<?php
/* Template Name: Mood */

get_header(); 
?>

 <section class="int-home">
	<div class="row fundo-int">
		<section class="head-int">
			<h2 class="large-10 columns">Como você está se <strong>sentindo</strong> hoje</h2>
			<div class="large-2 columns sound-bl">
				<span>ouvir</span>
				<img class="icon-som" src="<?php bloginfo('template_url'); ?>/images/sound.png" alt="Como você esta se sentindo hoje?" />
			</div>		
		</section>
		<section class="answ">
			<section class="slide-int">
				<ul>
					<li class="mood">
						<section class="large-4 columns">
							<img src="<?php bloginfo('template_url'); ?>/images/bee.png" alt="Imagem de som" />
							<h3>Cansado</h3>
						</section>
						<section class="large-4 columns">
							<img src="<?php bloginfo('template_url'); ?>/images/bee.png" alt="Imagem de som" />
							<h3>Triste</h3>
						</section>
						<section class="large-4 columns">
							<img src="<?php bloginfo('template_url'); ?>/images/bee.png" alt="Imagem de som" />
							<h3>Feliz</h3>
						</section>
					</li>
				</ul>				
			</section>
			
		</section>
		
		<section class="large-12 columns foot-int">
			
		</section>
	</div>
 </section>

<?php get_footer(); ?>