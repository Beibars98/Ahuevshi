<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Модульное оборудование - Дополнительные модульные устройства - Дополнительные устройства модульной серии
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
		   margin-top: -12.5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Дополнительные устройства модульной серии</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=20612">Модульное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Дополнительные устройства модульной серии</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=22286"><li>Выключатели нагрузки ВН-32 <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=22288"><li>Ограничители импульсных перенапряжений ОПС1 <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=22290"><li class="active">Дополнительные устройства модульной серии <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>	
  <a href="http://asiaelectro.kz/?page_id=22292"><li>Контакторы модульные КМ <span class="glyphicon glyphicon-chevron-right"></span></li></a>		
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Дополнительные устройства IEK – предназначены для работы только с модульной автоматикой IEK. Имеют уникальный фирменный дизайн. Позволяют расширить опциональность модульной автоматики.
<br>
Предохранители-разъединители ПР и плавкие вставки ПВЦ IEK предназначены для защиты кабельных линий, а также бытового и промышленного оборудования от перегрузок и коротких замыканий. Полное соответствие ГОСТ Р МЭК 60269-1-2010 и ГОСТ Р 50030.3-2012.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=265&orderby=title&order=asc&showposts=10000');
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