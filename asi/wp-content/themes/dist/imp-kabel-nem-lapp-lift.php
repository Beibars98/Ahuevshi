<?php
/*
Template Name: Немецкий кабель - Lapp group - Кабели для лифтов и подъемных механизмов
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 45.7em;
		   }
		   article figcaption {
		   margin-top: -22.5em;
		   }
		   .table_blur {
		   margin-top: -8em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Кабели для лифтов и подъемных механизмов</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40640">Германия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=1563">Lapp Group</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Кабели для лифтов и подъемных механизмовли</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=1594"><li>Силовые и контрольные кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1596"><li>Кабели для передачи данных <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1598"><li>Кабели для серводвигателей <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1600"><li>Кабели для буксируемых кабельных цепей <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1602"><li>Спиральные кабели<span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1604"><li class="active">Кабели для лифтов и подъемных механизмов <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1606"><li>Термостойкие кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1608"><li>Кабели для экстремальных условий эксплуатации <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/03/lappgroup.jpg">Плоским кабелям требуется меньше места, чем круглым. Имеют гораздо меньший радиус изгиба в сравнении с круглыми кабелями. Для грузоподъёмных механизмов, транспортных устройств. Подъёмные краны в помещениях и высокостеллажные склады. Кабели силовые для подвижных частей машин. Согласно стандартам VDE кабели могут использоваться в качестве кабелей управления в лифтах с длиной подвешивания до 35 метров и максимальной скоростью движения 1,6 м/сек.
<br>
<cite>Купить кабели и провода вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта кабели и провода со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабели и провода делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=109&orderby=title&order=asc&showposts=1000');
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