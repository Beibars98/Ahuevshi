<?php
/*
Template Name: Сборка щитового оборудования - VIKO
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 5.5em;
		   }
		   article figcaption {
		   margin-top: -11.7em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>VIKO</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=103">Наша продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#">Сборка щитового оборудования</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">VIKO</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=40969"><li class="active">VIKO <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40972"><li>Schnider Electric <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40975"><li>ТЕКФОР <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40977"><li>TDM <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40979"><li>NILSON <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption>VIKO — турецкая компания, производство в районе Санджактепе, провинция Стамбул. Продукция — групповые розетки и выключатели. Основана в 1966 году. В 2011 году приобретена компанией Panasonic.
<br>
Одна из трёх самых крупных и современных предприятий в секторе производства выключателей и розеток в мире — в год выпускает около 120 млн штук этой продукции (на 2011 год). Лидер рынка Турции, более 45 % продукции идёт на экспорт более чем в 70 стран мира.
<br>
В 2011 году стала лидером рынка на Украине с 30 процентами товарооборота, на российском рынке достигла доли в пятнадцать процентов
<br>
<cite>Купить Щитовое оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта Щитовое оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на Щитовое оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=426&orderby=title&order=asc&showposts=1000');
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