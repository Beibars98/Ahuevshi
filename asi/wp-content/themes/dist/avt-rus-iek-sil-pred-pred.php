<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Силовое оборудование защиты и коммутации - Предохранители -  Предохранители ППНИ и доп. устройства
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 42.3em;
		   }
		   article figcaption {
		   margin-top: -4.3em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Предохранители ППНИ и доп. устройства</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=22560">Силовое оборудование защиты и коммутации</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Предохранители ППНИ и доп. устройства</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=22567"><li class="active">Предохранители ППНИ и доп. устройства <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg"><strong>Предохранители плавкие серии ППНИ</strong> типа gG общего применения предназначены для защиты промышленных электроустановок и кабельных линий от перегрузки и короткого замыкания и выпускаются на номинальные токи от 2 до 630 А.
<br>
Используются в однофазных и трехфазных сетях напряжением до 660 В частоты 50 Гц.
<br>
Области применения предохранителей ППНИ: вводно-распределительные устройства (ВРУ); шкафы и пункты распределительные (ШРС, ШР, ПР); оборудование трансформаторных подстанций (ЩО); шкафы низкого напряжения (ШРПНН); шкафы и ящики управления.
<br>
Соответствуют требованиям ГОСТ Р 50339.0, 50339.2.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=272&orderby=title&order=asc&showposts=10000');
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