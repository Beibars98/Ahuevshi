<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Шкафы, боксы и принадлежности к ним - Оболочки металлические - Корпуса металлические ВРУ
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 29em;
		   }
		   article figcaption {
		   margin-top: -7.5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Корпуса металлические ВРУ</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23880">Шкафы, боксы и принадлежности к ним</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Корпуса металлические ВРУ</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=24560"><li>Корпуса металлические ЩМП <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24562"><li class="active">Корпуса металлические ВРУ <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24564"><li>Корпуса металлические прочие <span class="glyphicon glyphicon-chevron-right"></span></li></a>    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Вводно-распределительные устройства предназначены для приема, распределения и учета электроэнергии напряжением 400/230 В в сетях трехфазного переменного тока частотой 50 Гц, для защиты линий от токов коротких замыканий и перегрузок, а также для нечастых оперативных включений и отключений.
<br>
Металлический корпус ВРУ серии TITAN IEK представляет собой цельносварной каркас из листовой стали повышенной коррозионной стойкости. Благодаря особым технологиям производства цельно - сварные корпуса имеют уникальную для современного рынка НВА жесткость и механическую прочность. Область применения ВРУ – объекты гражданского строительства и промышленные предприятия. Корпуса металлические ВРУ SMART IP31 IEK служат для дальнейшей сборки на их базе вводно-распределительных низковольтных комплектных устройств, предназначенных для электроснабжения различных объектов. На базе ВРУ SMART IP31 можно собрать большинство существующих схем НКУ.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=299&orderby=title&order=asc&showposts=10000');
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