<?php
/*
Template Name: Кабельные муфты - США - 3М
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 3.5em;
		   }
		   article figcaption {
		   margin-top: -3em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>3M</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2424">Кабельные муфты</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=11608">США</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">3M</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=2439"><li class="active">3M <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/Без-названия.jpg">Группа компаний 3М предлагает соединительные, ответвительные кабельные муфты для низкого напряжения, изготовленные на основе различных технологий: заливной, ленточной, холодной и термоусаживаемой. 
Термоусаживаемые и холодноусаживаемые муфты кабельные 3М завоевали популярность у электромонтажников благодаря стойкости к воздействию окружающей среды (колебаниям температуры, смещению грунта), электрической прочности, влагостойкости и герметичности. Оба вида муфт помогают снизить трудо- и временные затраты на прокладку кабеля, выполнять работу в тесных помещениях.
<br>
<cite>Купить кабельные муфты вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта кабельные муфты со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные муфты делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=212&orderby=title&order=asc&showposts=1000');
        while ($wp_query->have_posts()) : $wp_query->the_post();?>
      <tr>
		  <td></td>
		  <td class="neim"><?php the_title() ?></td>
		  <td><?php the_excerpt() ?></td>
	  </tr>
	      <?php endwhile; ?>
    </table>
  </article>
<?php get_footer(); ?>	  