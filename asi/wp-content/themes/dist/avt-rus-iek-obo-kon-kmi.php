<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Оборудование коммутационное и устройства управления - Контакторы - Контакторы КМИ
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 17.3em;
		   }
		   article figcaption {
		   margin-top: -13em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Контакторы КМИ</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=34705">Оборудование коммутационное и устройства управления</a> <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Контакторы КМИ</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=34718"><li class="active">Контакторы КМИ <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34720"><li>Контакторы КТИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34722"><li>Контакторы ПМ12 <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34724"><li>Миниконтакторы МКИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34726"><li>Контакторы КТ 6600И,<br> КТП 6600И <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Малогабаритные контакторы переменного тока общепромышленного применения КМИ на ток нагрузки от 9 до 95 А предназначены для пуска, остановки и реверсирования асинхронных электродвигателей с короткозамкнутым ротором на напряжение до 660 В (категория применения АС-3), а также для дистанционного управления цепями освещения, нагревательными цепями и различными малоиндуктивными нагрузками (категория применения АС-1). Все исполнения на ток нагрузки до 40 А имеют одну группу замыкающих или размыкающих дополнительных контактов. Исполнения на ток нагрузки свыше 40 А - две группы (замыкающую и размыкающую).
<br>
Область применения малогабаритных контакторов серии КМИ - управление вентиляторами, насосами, тепловыми завесами, печами, кран-балками, станками, освещением, в системах автоматического ввода резерва (АВР).
<br>
По своим конструктивным и техническим характеристикам контакторы малогабаритные серии КМИ соответствуют требованиям международных и российских стандартов М Э К60947-4-1-2000, ГОСТ Р50030.4.1-2002.
<br>
Контакторы малогабаритные серии КМИ прошли сертификационные испытания и на их серийный выпуск получен сертификат соответствия РОСС CN.ME86.B00144.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=363&orderby=title&order=asc&showposts=10000');
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