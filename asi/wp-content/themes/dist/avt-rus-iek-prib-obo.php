<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Приборы учета, контроля, измерения и оборудование электропитания - Оборудование электропитания
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 31.3em;
		   }
		   article figcaption {
		   margin-top: -3em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Оборудование электропитания</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23188">Приборы учета, контроля, измерения и оборудование электропитания</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Оборудование электропитания</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=23196"><li class="active">Оборудование электропитания <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>	
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Стабилизаторы напряжения электромеханического типа торговой марки IEK предназначены для поддержания стабильного однофазного/трехфазного напряжения питания нагрузок бытового и промышленного назначения 220 B/3x220 В, 50 Гц при отклонениях сетевого напряжения в широких пределах по значению и длительности.<br>
Применяются для стабилизации напряжения при работе с высокочувствительной техникой на промышленных объектах, в медицинских организациях, телекоммуникационных компаниях, в малоэтажном жилищном строительстве, в жилищно-коммунальном хозяйстве. Позволяют продлить срок эксплуатации систем освещения, компьютерного оборудования и др.<br>
Соответствуют стандартам ГОСТ Р 52161.1, ГОСТ Р 30805.14.1, ГОСТ Р 51317.3.2, ГОСТ Р 51317.3.2, ГОСТ Р 51318.14.1, ГОСТ Р 51318.14.2.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=281&orderby=title&order=asc&showposts=10000');
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