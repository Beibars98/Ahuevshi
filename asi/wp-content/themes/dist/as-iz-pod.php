<?php
/*
Template Name: Арматура на AC - Изоляторы - Подвесные изоляторы
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 23em;
		   }
		   article figcaption {
		   margin-top: -9.5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Подвесные изоляторы</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2466">Арматура на АС</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Подвесные изоляторы</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=20279"><li class="active">Подвесные изоляторы <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=20282"><li>Штыревые изоляторы <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=20284"><li>Опорные изоляторы <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=20286"><li>Проходные изоляторы <span class="glyphicon glyphicon-chevron-right"></span></li></a>		
    </ul>
	<figcaption>Изоляторы линейные подвесные стеклянные типа ПС, ПСВ, ПСД предназначены для изоляции и крепления проводов и грозозащитных тросов на воздушных линиях (ВЛ) электропередачи в распределительных устройствах электростанций и подстанций переменного тока напряжением свыше 1000 В и частотой до 100 Гц.
<br>
<cite>Купить арматуру на АС вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта арматуру на АС со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на арматуру на АС делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=245&orderby=title&order=asc&showposts=10000');
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