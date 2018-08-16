<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Шкафы, боксы и принадлежности к ним - Корпуса металлические модульные - Корпуса металлические распределительные
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 45em;
		   }
		   article figcaption {
		   margin-top: -17em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Корпуса металлические распределительные</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23880">Шкафы, боксы и принадлежности к ним</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Корпуса металлические распределительные</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=24108"><li class="active">Корпуса металлические распределительные <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24117"><li>Корпуса металлические учетно-распределительные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24110"><li>Корпуса металлические вводно-учетные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24112"><li>Корпуса металлические ЩЭ и УЭРМ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24119"><li>НКУ <span class="glyphicon glyphicon-chevron-right"></span></li></a>		
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Предназначены для сборки электрощитов с применением модульной аппаратуры (на DIN-рейку), для приема и распределения электрической энергии в жилых, административных и производственных помещениях. 
<br>
Ассортимент распределительных корпусов (навесного - ЩРн, и встраиваемого исполнения - ЩРв) представлен несколькими сериями, которые удовлетворят запросы различных, даже самых требовательных пользователей. 
<br>
Распределительные корпуса имеют степень защиты от IP31 до IP54, номинальный ток - до 125А, защитную фальш-панель (металлическую или пластиковую), климатическое исполнение - до У2 (размещение на улице под навесом), модульную емкость: от 9 до 96 модулей.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=292&orderby=title&order=asc&showposts=10000');
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