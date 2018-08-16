<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Приборы учета, контроля, измерения и оборудование электропитания - Счетчики электрической энергии
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
    <h2>Счетчики электрической энергии</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23188">Приборы учета, контроля, измерения и оборудование электропитания</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Счетчики электрической энергии</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=23194"><li class="active">Счетчики электрической энергии <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>	
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Счётчики электрической энергии STAR 1 непосредственного включения предназначены для учёта активной электрической энергии в однофазных сетях переменного тока напряжением 230 В частотой 50 Гц. Соответствуют требованиям ГОСТ 31818.11, ГОСТ 31819.21 и техническим условиям CCE1.001.2014 ТУ.
<br>
Счётчики электрической энергии STAR 3 непосредственного включения и подключения через трансформатор тока предназначены для учёта активной электрической энергии в сетях переменного тока напряжением 3х230/400 В частотой 50 Гц. Соответствуют требованиям ГОСТ 31818.11, ГОСТ 31819.21 и техническим условиям CCE3.001.2014 ТУ.
<br>
Счётчики электрической энергии STAR внесены в Государственный реестр средств измерении за номерами 59305-14 и 59306-14.
<br>
Многотарифные счетчики электрической энергии однофазные STAR 104 непосредственного включения предназначены для учета активной электрической энергии в однофазных сетях переменного тока напряжением 230 В частотой 50 Гц. Номинальным током 5 (60) А.
<br>
Многотарифные счетчики электрической энергии трёхфазные STAR 304 непосредственного включения и подключения через трансформатор предназначены для учета активной электрической энергии в трехфазных сетях переменного тока напряжением 3х230/400 В частотой 50 Гц. Номинальным током 5 (60) А.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=280&orderby=title&order=asc&showposts=10000');
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