<?php
/*
Template Name: Кабельные муфты - Германия - Tyco Electronics Raychem - Ответвительные муфты
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 24.3em;
		   }
		   article figcaption {
		   margin-top: -9.5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Ответвительные муфты</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2424">Кабельные муфты</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2426">Германия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2428">Tyco Electronics Raychem</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Ответвительные муфты</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=2433"><li class="active">Ответвительные муфты <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=2435"><li>Переходные муфты <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=2437"><li>Соединительные муфты <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=2439"><li>Концевые муфты <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/03/Raychem.png"><strong>Ответвительные муфты</strong> применяются для монтажа 4-х, 3 ½ жильных кабелей с пластмассовой и бумажной изоляцией с броней или без брони напряжением до 1кВ, в частности при монтаже сетей уличного и паркового освещения (отводы к фонарным опорам от основного кабеля).
<br>
<cite>Купить кабельные муфты вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта кабельные муфты со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные муфты делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=134&orderby=title&order=asc&showposts=1000');
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