<?php get_header(); ?>

<div class="contentpage container mt-5 pt-5">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="mb-2"> <h2> <?php the_title(); ?></h2> </div>
		<div id="conteudopagina">
			<?php the_content(); ?>
		</div>
		
		<?php endwhile; else: ?>
		<p>
			<?php echo "<h3>Infelizmente, não foram encontrados resultados para sua pesquisa.<br><br>Talvez um refinamento possa ajudar. Utilize outras palavras relacionadas na busca.<br><br>Caso queira, retorne à página inicial do site.</h3>"; ?>
		</p>
		<?php endif; ?>
</div>

<?php get_footer(); ?>

<script>
$(document).ready(function(){
	$('header').addClass('header2-active');
});
</script>