<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Модульное оборудование - Автоматические выключатели -  Автоматические выключатели ВА47-29
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 39.4em;
		   }
		   article figcaption {
		   margin-top: -15.5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Автоматические выключатели ВА47-29</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=20612">Модульное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Автоматические выключатели ВА47-29</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=20620"><li class="active">Автоматические выключатели ВА47-29 <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=20622"><li>Автоматические выключатели ВА47-29М <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=20624"><li>Автоматические выключатели ВА47-60 <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=20626"><li>Автоматические выключатели ВА47-100 <span class="glyphicon glyphicon-chevron-right"></span></li></a>		
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Автоматические выключатели ВА47-29 предназначены для защиты распределительных и групповых цепей, имеющих различную нагрузку:<br>
– электроприборы, освещение – выключатели с характеристикой В,<br>
– двигатели с небольшими пусковыми токами (компрессор, вентилятор) – выключатели с характеристикой C,<br>
– двигатели с большими пусковыми токами (подъемные механизмы, насосы) – выключатели с характеристикой D.<br>
<br>
Рекомендуются к применению в вводно-распределительных устройствах для жилых и общественных зданий.
<br>
200 типоисполнений на 18 номинальных токов от 0,5 до 63 А.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=256&orderby=title&order=asc&showposts=10000');
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