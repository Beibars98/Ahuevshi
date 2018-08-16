<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Шкафы, боксы и принадлежности к ним - Корпуса пластиковые - Корпуса пластиковые с повышенной степенью защиты IP5x-6x
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 63em;
		   }
		   article figcaption {
		   margin-top: -14em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Корпуса пластиковые с повышенной степенью защиты IP5x-6x</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23880">Шкафы, боксы и принадлежности к ним</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Корпуса пластиковые с повышенной степенью защиты IP5x-6x</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=23885"><li>Корпуса пластиковые IP2x-3x-4x <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=23887"><li class="active">Корпуса пластиковые с повышенной степенью защиты IP5x-6x <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=23889"><li>Корпуса и панели пластиковые для установки счетчика <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=23891"><li>Корпуса полиэстерные <span class="glyphicon glyphicon-chevron-right"></span></li></a> 		
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Предназначены для ввода и распределения электроэнергии и используются для установки модульных устройств: автоматических выключателей, устройств защитного отключения, дифференциальных автоматических выключателей, таймеров, устройств управления освещением и т.д.
<br>
Корпуса могут устанавливаться в помещениях с высоким уровнем влажности или со значительной запыленностью, а также на открытом воздухе. Идеальны для эксплуатации в гаражах, автомойках, подвалах, лабораториях, мастерских и т.д., а также для установки на открытом воздухе.
Гарантированное качество продукции обеспечивается соответствием требованиям государственных российских и международных стандартов.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=288&orderby=title&order=asc&showposts=10000');
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