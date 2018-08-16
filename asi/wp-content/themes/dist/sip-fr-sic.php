<?php
/*
Template Name: Арматура на СИП - Франция - Sicame GROUP
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 7.5em;
		   }
		   article figcaption {
		   margin-top: -3em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Sicame</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2446">Арматура на СИП</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2458">Франция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Sicame</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=2460"><li class="active">Sicame <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/logo-2.jpg"><strong>Группа SICAME</strong> ведет свое существование с момента образования в 1955 году фирмы SICAME S.A. в г. Помпадур (Франция).На предприятиях группы SICAME производятся: соединительная и подвесная арматура, защитное оборудование и монтажный инструмент для строительства и эксплуатации линий электропередачи низкого, среднего и высокого напряжения; молниезащитное оборудование, оборудование для сетей уличного освещения, арматура и измерительная аппаратура для телекоммуникаций, систем электроснабжения железных дорог, нефтяной и газовой отраслей, оборудование для обеспечения безопасности работ, оборудования для быстрого обнаружения мест повреждения линий электропередачи.
<br>
<cite>Купить арматуру на СИП вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта арматуру на СИП со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные муфты делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=213&orderby=title&order=asc&showposts=10000');
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