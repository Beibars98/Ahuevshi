<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Силовое оборудование защиты и коммутации - Выключатели-разъединители -  Предохранители-выключатели-разъединители
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 47em;
		   }
		   article figcaption {
		   margin-top: -9em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Предохранители-выключатели-разъединители</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=22560">Силовое оборудование защиты и коммутации</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Предохранители-выключатели-разъединители</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=22575"><li>Выключатели-разъединители <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=22577"><li class="active">Предохранители-выключатели-разъединители <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=22579"><li>Разъединители <span class="glyphicon glyphicon-chevron-right"></span></li></a>	
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Выключатели-разъединители предназначены для неавтоматической коммутации цепей переменного тока номинальным напряжением до 690 В номинальной частоты 50 Гц.
<br>
Используются для установки в низковольтные комплектные устройства, такие как ВРУ жилых, общественных и промышленных зданий, шкафы и пункты распределительные, шкафы и ящики управления, ящики силовые и т.п.
<br>
Выключатели-разъединители IEK соответствуют требованиям ГОСТ Р 50030.3 и изготовлены по техническим условиям ТУ 3424-029-18461115-2009.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=275&orderby=title&order=asc&showposts=10000');
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