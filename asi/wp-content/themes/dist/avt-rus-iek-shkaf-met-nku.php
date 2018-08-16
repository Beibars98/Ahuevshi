<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Шкафы, боксы и принадлежности к ним - Корпуса металлические модульные - НКУ
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 4.5em;
		   }
		   article figcaption {
		   margin-top: -17em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>НКУ</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23880">Шкафы, боксы и принадлежности к ним</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">НКУ</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=24108"><li>Корпуса металлические распределительные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24117"><li>Корпуса металлические учетно-распределительные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24110"><li>Корпуса металлические вводно-учетные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24112"><li>Корпуса металлические ЩЭ и УЭРМ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24119"><li class="active">НКУ <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>		
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Распределительное устройство для строительных площадок (РУСП) предназначено для безопасного распределения энергии и для подключения различных электроприемников.
<br>
Ящики с рубильником и предохранителями серии ЯРП предназначены для нечастых коммутаций и защиты от токов короткого замыкания в цепях трехфазного переменного тока напряжением 400/230 В частотой 50 Гц. Внутри корпуса установлены выключатель-разъединитель ВР-32И, три держателя предохранителей ДП-33 с предохранителем ППНИ-33. Ввод и вывод кабелей предусматривается снизу. Ручка управления выключателя - разъединителя ВР-32И выведена наружу.
<br>
Ящики с понижающим трансформатором ЯТП предназначены для питания местного или ремонтного освещения, а также для подключения переносных светильников и инструмента.
<br>
Щитки освещения для производственных и общественных зданий ОЩВ, УОЩВ предназначены для приема и распределения электроэнергии в жилых и производственных помещениях, а также для защиты линий при перегрузках и коротких замыканиях в сетях переменного тока напряжением 230/400 В. Внутри корпуса установлены вводные, трехполюсные и групповые, однополюсные автоматические выключатели, а также шины N и РЕ.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=296&orderby=title&order=asc&showposts=10000');
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