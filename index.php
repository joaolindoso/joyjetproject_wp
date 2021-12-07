<?php get_header(); ?>

<!-- home -->

<section class="home" id="home">
    <div class="container">
        <div class="row  align-items-center text-center text-md-left">
            <div class="col-md-6 content" data-aos="fade-left">

                <h1>SPACE<span>.</span></h1>
                <h4>Lorem ipsum dolor site amet, consectetur adipiscing elit.<br>
                Quisque molestie elit at lacus...</h4>
                <a href="#"><button class="button">click</button></a>
                
            </div>
        </div>
    </div>

    <div class="row-fluid py-4" id="trending-line">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 text-align-right">
                    Trending<br>
                    <span class="text-my2blue">Today</span>
                </div>

                <?php 
                    $acao_query1 = new WP_Query( array('category_name'=>'trending-today', 'posts_per_page'=>3, 'order'=>'DESC'));
                    while ( $acao_query1->have_posts() ) : $acao_query1->the_post();
                ?>
                    <div class="col-md-3">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                <?php endwhile;	wp_reset_query(); ?>
            </div>
        </div>
    </div>

    <div id="overlay"></div>

</section>
<!-- home ends -->


<!-- including carousel - section 2 -->
<section id="carousel-posts">
    <div class="container mt-2 mt-md-5 pt-md-5">
        <div class="owl-carousel owl-theme row">

        <?php 
            $acao_query1 = new WP_Query( array('category_name'=>'news', 'posts_per_page'=>6, 'order'=>'DESC'));
            while ( $acao_query1->have_posts() ) : $acao_query1->the_post();
        ?>
            <div>
                <div class="item-box-blog">
                    <div class="item-box-blog-image">
                    
                        <!--Image-->
                        <figure> 
                            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?> 
                        </figure>

                    </div>
                    <div class="item-box-blog-body">
                        <!--Heading-->
                        <div class="item-box-blog-heading">
                            <a href="#" tabindex="0">
                            <h3><?php the_title(); ?></h3>
                            </a>
                        </div>
                    
                        <!--Text-->
                        <div class="item-box-blog-text">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    
                    </div>
                </div>
            </div>
        <?php endwhile;	wp_reset_query(); ?>

        </div> <!-- END owl-carousel owl-theme row -->
    </div>
</section>

<!-- about -->

<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

            <?php
				$argumentos = array('post_type' => 'page', name => 'about'); 
				query_posts($argumentos);
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			?>

            <div class="col-md-4" data-aos="fade-left">
                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?> 
            </div>

            <div class="col-md-8 content" data-aos="fade-right">
                <div class="box">
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about ends -->

<?php get_footer(); ?>