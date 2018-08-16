<?php 
/*
Template Name: Трансформаторы и подстанции - Трансформаторные подстанции
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 32.5em;;
		   }
		   article figcaption {
		   margin-top: -15em;
		   }
		   .table_blur {
		   margin-top: -3em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Трансформаторные подстанции</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=103">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="#">Трансформаторы и подстанции</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Трансформаторные подстанции</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=40928"><li class="active">Трансформаторные подстанции <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40930"><li>Трансформаторы напряжения (измерительные) <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40932"><li>Трансформаторы тока (измерительные) с азотной изоляцией <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40935"><li>Трансформаторы тока (измерительные) элегазовые <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption>Подстанции трансформаторные столбовые типа ПТС–25–63–12/0,4–...–96У1 предназначены для приема электроэнергии трехфазного переменного тока частоты 50 Гц на наибольшее рабочее напряжение 12 кВ (номинальное напряжение сети 10 кВ), ее преобразования на напряжение 0,4 кВ и распределения среди потребителей.
<br>
<cite>Купить Трансформаторы и подстанции вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта Трансформаторы и подстанции со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на Трансформаторы и подстанции делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=421&orderby=title&order=asc&showposts=10000');
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