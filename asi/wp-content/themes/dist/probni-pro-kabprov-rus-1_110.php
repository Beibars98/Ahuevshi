<?php 
/*
Template Name: Пробная страница - Кабельно-проводниковая продукция - Россия - Силовые 1-110
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
  <?php get_header(); ?>
    <article>
    <h2>Cиловые кабели в БПИ 1-110 кВ</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=133">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40637">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Cиловые кабели в БПИ 1-110 кВ</a></p>
    <table class="table_blur">
      <script>
                $('table tr').each(function(i) {
                var number = i + 1;
                $(this).find('td:first').text(number+".");
                });
          </script>		
      <tr>
		  <th>№</th>
		  <th class="neim">Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=81&orderby=title&order=asc&showposts=1000');
        while ($wp_query->have_posts()) : $wp_query->the_post();?>
      <tr>
		  <td></td>
		  <td><?php the_title() ?></td>
		  <td><?php the_excerpt() ?></td>
	  </tr>
	      <?php endwhile; ?>
    </table>
  </article>
<?php get_footer(); ?>	  