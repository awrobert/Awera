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

<table border="3" id="micro-zaim"> 
<tr>
	<th>Банк</th>
	<th>Рейтинг</th>
	<th>Срок</th>
	<th>Переплата</th>
</tr>

<?php $loop = new WP_Query( $args ); ?> 

<?php while ( $loop->have_posts() ) : ?>
	<?php $loop->the_post(); ?>
	<?php global $product; ?>
	<tr>
		<td><?php echo $product->get_image('custom-size'); the_title(); ?></td>
		<td><?php echo $product->get_attribute('pa_rating'); ?></td>
		<td><?php echo $product->get_attribute('pa_time'); ?></td>
		<td><?php echo $product->get_attribute('pa_overpayments'); ?></td>
	</tr>
<?php endwhile; ?>

</table>


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

<table border="3" id="bank"> 
<tr>
	<th>Банк</th>
	<th>Рейтинг</th>
	<th>Одобренные заявки</th>
</tr>

<?php $loop = new WP_Query( $args ); ?> 

<?php while ( $loop->have_posts() ) : ?>
	<?php $loop->the_post(); ?>
	<?php global $product; ?>
	<tr>
		<td><?php echo $product->get_image('custom-size'); the_title(); ?></td>
		<td><?php echo $product->get_attribute('pa_rating'); ?></td>
		<td><?php echo $product->get_attribute('pa_approved-applications'); ?></td>
	</tr>
<?php endwhile; ?>

</table>