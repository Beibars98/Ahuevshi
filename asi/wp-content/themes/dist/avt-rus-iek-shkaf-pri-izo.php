<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Шкафы, боксы и принадлежности к ним - Принадлежности и аксессуары для шкафов - Изоляторы
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 11.5em;
		   }
		   article figcaption {
		   margin-top: -25.5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Изоляторы</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23880">Шкафы, боксы и принадлежности к ним</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Изоляторы</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=25478"><li>DIN-рейки <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25480"><li>Шины N, PE, PEN, L,<br> кросс-модули <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25482"><li>Шины соединительные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25484"><li>Зажимы и клеммные блоки <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25486"><li>Сальники и кабельные вводы <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25488"><li class="active">Изоляторы <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25490"><li>Распределительные блоки РБД <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25492"><li>Оборудование для климат-контроля <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25494"><li>Замки <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25497"><li>Принадлежности прочие <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Изоляторы шинные служат для крепления токоведущих шин внутри силовых шкафов и сборок с целью фиксации и изоляции токоведущих частей от корпуса и панелей сборки с последующим подключением силовых проводников для распределения электроэнергии внутри щита.
<br>
Изолятор крепится с одной стороны с помощью болта к монтажной пластине или корпусу, с другой стороны к изолятору крепится токоведущая шина. Каждая шина устанавливается минимум на двух изоляторах (на концах шины), а также возможна установка промежуточных изоляторов (в зависимости от схемы монтажа и длины шины).<br>
Изоляторы гарантируют отсутствие пробоев между шинами и могут быть использованы в электрооборудовании постоянного и переменного тока частотой 50 Гц и напряжением до 1000 В.<br>
Корпус изоляторов изготовлен из особого, стойкого к механическому воздействию, негорючего полимера, обладающего высокими показателями электрического сопротивления.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=307&orderby=title&order=asc&showposts=10000');
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