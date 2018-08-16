<?php
/*
Template Name: Сборка щитового оборудования - Текфор
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 9.2em;
		   }
		   article figcaption {
		   margin-top: -11.7em;
		   }
		   .table_blur {
		   margin-top: -1em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>ТЕКФОР</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=103">Наша продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#">Сборка щитового оборудования</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">ТЕКФОР</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=40969"><li>VIKO <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40972"><li>Schnider Electric <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40975"><li class="active">ТЕКФОР <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40977"><li>TDM <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40979"><li>NILSON <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption>Основная деятельность российской компании Текфор – производство изделий из пластика. Текфор осуществляет разработку оригинальных и современных продуктов разных областей применения. Применение современных систем автоматизированного конструирования, позволяет в кратчайшие сроки создавать изделия любой сложности. Все изделия создаются с максимальным использованием передовых решений существующих в данной области.
<br>
<cite>Купить Щитовое оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта Щитовое оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на Щитовое оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=428&orderby=title&order=asc&showposts=1000');
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