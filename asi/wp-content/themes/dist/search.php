<?php
/*
Template Name: search
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 19.2em;
		   }
		   article figcaption {
		   margin-top: -10em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
  <article>
    <h2>Результаты поиска</h2>
    <hr>
	<div class="entry">Для вашего поискового запроса "<?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('"</span>'); _e(' найдено '); echo $count . ' '; _e('маркировок. '); wp_reset_query(); ?></div>
    <?php
if (have_posts()) :
while (have_posts()) : the_post();
?>
<div id="posts">
<div class="container">
<div class="row">
<div class="col-lg-12 hui">
<div class="row">
<div class="col-lg-8">
<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
<p><?php the_excerpt() ?></p>
</div>
</div>
</div>
</div>
</div>
</div>
<?php endwhile; ?>
<?php
else :
echo "Извините по Вашему результату ничего не найдено";
endif;
?>
  </article>
<?php get_footer(); ?>