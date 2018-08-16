<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Оборудование коммутационное и устройства управления - Устройства подачи команд и сигналов - Корпуса постов для кнопок управления и пульты кнопочные
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 60em;
		   }
		   article figcaption {
		   margin-top: -8em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Корпуса постов для кнопок управления и пульты кнопочные</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=34705">Оборудование коммутационное и устройства управления</a> <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Корпуса постов для кнопок управления и пульты кнопочные</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=34740"><li>Кнопки, переключатели, светосигнальная арматура <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34742"><li class="active">Корпуса постов для кнопок управления и пульты кнопочные <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Пульты кнопочные предназначены для коммутации электрических цепей управления подъемными механизмами. Представляют собой герметичный корпус из термостойкой ABS-пластмассы с установленными кнопками. Для герметизации ввода кабеля предусмотрен защитный сальник, а между корпусом и панелью устанавливается герметизирующая прокладка.
<br>
По своим конструктивным и техническим характеристикам пульты кнопочные серии ПКТ соответствуют требованиям российского стандарта ГОСТ Р50030.5.1-99. Пульты кнопочные серии ПКТ прошли сертификационные испытания и на их серийный выпуск получен сертификат соответствия РОСС CN.ME86.B00132.
<br>
Светосигнальные индикаторы, кнопки управления и переключатели удобно монтируются в корпуса постов КП.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=378&orderby=title&order=asc&showposts=10000');
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