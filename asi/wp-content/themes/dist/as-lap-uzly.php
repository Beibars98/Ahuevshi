<?php
/*
Template Name: Арматура на AC - Арматура для ЛЭП - Узлы крепления
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 16.5em;
		   }
		   article figcaption {
		   margin-top: -18.5em;
		   }
		   .table_blur {
		   margin-top: -9em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Узлы крепления</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2466">Арматура на АС</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Узлы крепления</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=19483"><li>Гасители вибрации <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19503"><li>Зажимы <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19489"><li>Звенья промежуточные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19491"><li>Серьги <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19493"><li>Скобы <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19495"><li>Термопатроны, термоспички <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19497"><li class="active">Узлы крепления <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19499"><li>Ушки <span class="glyphicon glyphicon-chevron-right"></a>
    </ul>
	<figcaption>Узлы крепления типов КГП, КГ, КГТ и КГН предназначены для крепления натяжных и поддерживающих изолирующих подвесок к опорам воздушных линий электропередачи и распределительных устройств. 
<br>
<cite>Купить арматуру на АС вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта арматуру на АС со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на арматуру на АС делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=218&orderby=title&order=asc&showposts=10000');
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