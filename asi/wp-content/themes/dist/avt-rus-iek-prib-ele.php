<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Приборы учета, контроля, измерения и оборудование электропитания - Приборы электроизмерительные
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 33.5em;
		   }
		   article figcaption {
		   margin-top: -3em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Приборы электроизмерительные</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23188">Приборы учета, контроля, измерения и оборудование электропитания</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Приборы электроизмерительные</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=23192"><li class="active">Приборы электроизмерительные <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>	
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Применяются в низковольтных комплектных устройствах в распределительных электрических сетях жилых, коммерческих и производственных объектов.
<br>
Амперметры и вольтметры Э47 относятся к приборам с электромагнитной системой. В составе имеют круглую катушку с помещенными внутрь подвижным и неподвижным сердечниками. При протекании тока через витки катушки, создается магнитное поле, намагничивающее оба сердечника. Вследствие чего, одноименные полюса сердечников отталкиваются, и подвижный сердечник поворачивает ось со стрелкой. Для защиты от негативного влияния внешних магнитных полей, катушка и сердечники защищены металлическим экраном.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=279&orderby=title&order=asc&showposts=10000');
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