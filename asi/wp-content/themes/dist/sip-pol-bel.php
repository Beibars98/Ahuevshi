<?php
/*
Template Name: Арматура на СИП - Польша - BELOS-PLP Spółka Akcyjna
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 27.5em;
		   }
		   article figcaption {
		   margin-top: -3em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>BELOS-PLP Spółka Akcyjna</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2446">Арматура на СИП</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2462">Польша</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">BELOS-PLP Spółka Akcyjna</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=2464"><li class="active">BELOS-PLP Spółka Akcyjna <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/belos-logo.jpg"><strong>BELOS-PLP S.A.</strong> - это ведущий производитель сетевого оборудования для линий электропередачи низкого, среднего, высокого и сверхвысокого напряжения и электростанций. В настоящее время, компания предлагает более чем 12 000 продуктов. Компания, в зависимости от инвестиционных потребностей клиентов и конкретных технических нужд для различных климатических зон, постоянно разрабатывает новые типы продукций. 
<br>
<cite>Купить арматуру на СИП вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта арматуру на СИП со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные муфты делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=149&orderby=title&order=asc&showposts=10000');
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