<?php
/*
Template Name: Польский кабель - bitner - Шахтный кабель
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 17em;
		   }
		   article figcaption {
		   margin-top: -18em;
		   }
		   .table_blur {
		   margin-top: -3em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Шахтный кабель</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=1520#">Польша</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=1577">Bitner</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Шахтный кабель</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=1610"><li>Гибкий контрольный кабель <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1612"><li>Кабель для сервопривода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1614"><li>Кабель для кабельных цепей <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1616"><li>Кабель для установок пожарной безопасности <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1618"><li>Кабель для передачи данных <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1620"><li class="active">Шахтный кабель <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1622"><li>Кабели специального<br> назначения <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/03/bitner.jpg">Шахтные кабели предназначены для присоединения горнодобывающего электрооборудования и инструментов к сети на номинальное напряжение 660 В, 1140 В или 6000 В переменного тока частотой 50 Гц на основных жилах и до 250 В на вспомогательных жилах. Кабели используются в угольных, железорудных, соляных и сланцевых шахтах, а также на открытых разработках (карьерах).
<br>
<cite>Купить кабели и провода вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта кабели и провода со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабели и провода делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=129&orderby=title&order=asc&showposts=1000');
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