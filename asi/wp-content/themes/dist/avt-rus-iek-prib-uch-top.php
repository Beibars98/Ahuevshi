<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Приборы учета, контроля, измерения и оборудование электропитания - Приборы учета - Трансформаторы тока ТОП-0,66 и ТШП-0,66
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 45em;
		   }
		   article figcaption {
		   margin-top: -9em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Трансформаторы тока ТОП-0,66 и ТШП-0,66</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23188">Приборы учета, контроля, измерения и оборудование электропитания</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Трансформаторы тока ТОП-0,66 и ТШП-0,66</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=23198"><li>Трансформаторы тока ТТИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=23200"><li>Трансформаторы тока ТРП <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=23203"><li class="active">Трансформаторы тока ТОП-0,66 и ТШП-0,66 <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>	
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Трансформаторы тока опорные в пластиковом корпусе (ТОП-0,66) и трансформаторы тока шинные в пластиковом корпусе (ТШП-0,66) предназначены:<br>
- для применения в схемах учета электроэнергии при расчетах с потребителями;<br>
- для применения в схемах коммерческого учета электроэнергии;<br>
- для передачи сигнала измерительной информации измерительным приборам или устройствам защиты и управления. 
<br>
Соответствуют требованиям ГОСТ 7746.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=284&orderby=title&order=asc&showposts=10000');
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