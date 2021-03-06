<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Изделия электромонтажные и инструменты - Наконечники, гильзы, соединители и ответвители - Наконечники, клеммы и зажимы слаботочные
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 46em;
		   }
		   article figcaption {
		   margin-top: -10em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Наконечники, клеммы и зажимы слаботочные</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=36069">Изделия электромонтажные и инструменты</a> <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Наконечники, клеммы и зажимы слаботочные</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=36081"><li class="active">Наконечники, клеммы и зажимы слаботочные <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=36083"><li>Наконечники, гильзы и зажимы силовые <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=36085"><li>Зажимы винтовые <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Слаботочные изолированные и неизолированные наконечники, разъемы, ответвители и строительно-монтажные клеммы предназначены для оконцевания, соединения и ответвления проводов и подключения их к контактным зажимам различного электрооборудования (клеммным блокам, автоматическим выключателям, зажимам наборным, розеткам и т.п.)
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=381&orderby=title&order=asc&showposts=10000');
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