<?php
/**
 * Template Name: Template Index Page
 */
get_header(); ?>

<section class="wrap wrap-content">
    <div class="con con-content">
        <div class="row">
            <div class="col-md-9">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6 rating-title"><h2 id="rating-bank"><i class="fa fa-star" aria-hidden="true"></i> Рейтинг Банков</h2></div>
<div class="col-md-6 col-sm-6 col-xs-6 rating-title"><h2 id="rating-micro"><i class="fa fa-star" aria-hidden="true"></i> Рейтинг микрозаймов</h2></div>
</div>

<?php $args = array( 
'tax_query' => array( // массив массивов состояящий из:
 array( 
'taxonomy' => 'product_cat', // название Таксономии
'field' => 'slug', // Производить выбор по 'id' или 'slug' 
'terms' => 'microzaim' //  ID(ы) или ярлык(и) таксономии, в зависимости от предыдущего параметра
)), 
'posts_per_page' => '7', // Кол-во выводимых товаров на одной странице
'post_type' => 'product', // Тип записи
'order' => 'ASC' // порядок сортировки ASC - по возрастанию, DESC - по убыванию(по умолчанию)
); ?>

<?php  add_image_size( 'custom-size', 100, 50, true ); ?> <!-- Задаёт размер изображение -->

<div border="3" id="micro-zaim"> 
<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3">Банк</div>
    <div class="col-md-3 col-sm-4 col-xs-3">Рейтинг</div>
    <div class="col-md-3 col-sm-4 col-xs-3">Срок</div>
    <div class="col-md-3 col-sm-4 col-xs-3">Переплата</div>
</div>
<?php $loop = new WP_Query( $args ); ?> 

<?php while ( $loop->have_posts() ) : ?>
    <?php $loop->the_post(); ?>
    <?php global $product; ?>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3"><?php echo $product->get_image('custom-size'); the_title(); ?></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><?php echo $product->get_attribute('pa_rating'); ?></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><?php echo $product->get_attribute('pa_time'); ?></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><?php echo $product->get_attribute('pa_overpayments'); ?></div>
    </div>
<?php endwhile; ?>
</div>


<?php $args = array( 
'tax_query' => array( // массив массивов состояящий из:
 array( 
'taxonomy' => 'product_cat', // название Таксономии
'field' => 'slug', // Производить выбор по 'id' или 'slug' 
'terms' => 'bank' //  ID(ы) или ярлык(и) таксономии, в зависимости от предыдущего параметра
)), 
'posts_per_page' => '7', // Кол-во выводимых товаров на одной странице
'post_type' => 'product', // Тип записи
'order' => 'ASC' // порядок сортировки ASC - по возрастанию, DESC - по убыванию(по умолчанию)
); ?>

<div border="3" id="bank"> 
<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-4">Банк</div>
    <div class="col-md-4 col-sm-4 col-xs-4">Рейтинг</div>
    <div class="col-md-4 col-sm-4 col-xs-4">Одобренные заявки</div>
</div>
<?php $loop = new WP_Query( $args ); ?> 
<?php while ( $loop->have_posts() ) : ?>
    <?php $loop->the_post(); ?>
    <?php global $product; ?>
<div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4"><?php echo $product->get_image('custom-size'); the_title(); ?></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><?php echo $product->get_attribute('pa_rating'); ?></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><?php echo $product->get_attribute('pa_approved-applications'); ?></div>
</div>
<?php endwhile; ?>
</div>
            </div>


            <div class="col-md-3">

                <div class="left-sidebar">
                    <div class="left-sidebar-title">ПОПУЛЯРНЫЕ ВОПРОСЫ</div>
                    <div class="left-sidebar-content">
<?php
$id=12; // ID заданной рубрики
$n=3;   // количество выводимых записей
$recent = new WP_Query("cat=$id&showposts=$n");
while($recent->have_posts()) : $recent->the_post(); ?>

                <p class="question-sidebar"><a href="<?php the_permalink(); ?>"><i class="fa fa-question-circle-o" aria-hidden="true"></i> <?php the_title(''); ?></a></p>

 <?php endwhile; ?>
                    </div>
                </div>

                <div class="left-sidebar">
                    <div class="left-sidebar-title">НОВОСТИ</div>
                    <div class="left-sidebar-content">
<?php
$id=34; // ID заданной рубрики
$n=3;   // количество выводимых записей
$recent = new WP_Query("cat=$id&showposts=$n");
while($recent->have_posts()) : $recent->the_post(); ?>

                <p class="news-sidebar"><a href="<?php the_permalink(); ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?php the_title(''); ?></a></p>
                <p class="news-sidebar-date"><?php echo get_the_date('n-j-Y'); ?></p>

<?php endwhile; ?>
                    </div>
                </div>

                <div class="left-sidebar">
                    <div class="left-sidebar-title">СВЕЖИЕ ПРЕДЛОЖЕНИЯ</div>
                    <div class="left-sidebar-content"></div>     
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>