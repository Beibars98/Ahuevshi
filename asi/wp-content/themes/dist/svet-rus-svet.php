<?php
/*
Template Name: Светотехника - Россия - Световые технологии
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 21.8em;
		   }
		   article figcaption {
		   margin-top: -3em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Световые технологии</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2490">Светотехника</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2492">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Световые технологии</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=2504"><li class="active">Световые технологии <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/7cf5e5c62195ee078ab389c11b6f42b8.png"><strong>Международная группа компаний  «Световые Технологии»</strong> – крупнейший производитель и поставщик современных энергоэффективных светотехнических решений в России и странах СНГ. Компания также работает на рынках Европы, Ближнего Востока и Азии.
<br>
Ассортимент выпускаемой продукции насчитывает более 9 000 модификаций светильников для внутреннего и наружного освещения общественно-административных зданий, спортивных сооружений, торговых комплексов, производственных объектов.
<br>
<cite>Купить светотехнику вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта светотехнику со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на светотехнику делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=162&orderby=title&order=asc&showposts=10000');
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