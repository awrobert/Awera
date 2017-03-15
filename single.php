<?php get_header(); ?>

<section class="wrap wrap-content">
    <div class="con con-content">
        <div class="row">
            <div class="col-md-9">
<?php if (have_posts()) : ?> 
<?php while (have_posts()) : the_post(); ?> 

	<?php get_template_part( 'template-parts/content', 'single' ); ?>

<?php endwhile; ?> 
<?php endif; ?>
						</div>
            <div class="col-md-3">
                <div class="left-sidebar">
                    <div class="left-sidebar-title">СВЕЖИЕ ПРЕДЛОЖЕНИЯ</div>
                    <div class="left-sidebar-content"></div>     
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
