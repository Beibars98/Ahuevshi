<?php
/*
Template Name: Низковольтное оборудование - Казахстан - Saiman - Трансформаторы тока
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 22.8em;
		   }
		   article figcaption {
		   margin-top: -7.5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Трансформаторы тока</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2538">Казахстан</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2554">Saiman</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Трансформаторы тока</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=20321"><li>Счетчики <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=20323"><li class="active">Трансформаторы тока <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=20325"><li>Шкафы учета <span class="glyphicon glyphicon-chevron-right"></span></li></a>		
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/200d15dd.png"><strong>ТОО «Корпорация Сайман»</strong> - ведущее предприятие отечественного приборостроения с полным циклом производства измерительных приборов учета электроэнергии. Приборостроительный завод «SAIMAN» территориально расположен в г. Алматы. Хорошо известен в республике и в странах СНГ как ведущий производитель и поставщик собственной продукции – широкой линейки электронных электросчетчиков, трансформаторов тока, шкафов учета электроэнергии внутренней и наружной установки, светодиодной продукции, автоматизированной системы коммерческого учета электроэнергии (АСКУЭ), автоматизированной системы управления наружным освещением (АСУНО).
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=250&orderby=title&order=asc&showposts=10000');
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