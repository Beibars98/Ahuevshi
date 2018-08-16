<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Изделия электромонтажные и инструменты - Изделия для изоляции, крепления и маркировки - Изолента
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 10em;
		   }
		   article figcaption {
		   margin-top: -9em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Изолента</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=36069">Изделия электромонтажные и инструменты</a> <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Изолента</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=36087"><li>Изделия крепежные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=36089"><li>Материалы термоусаживаемые <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=36091"><li class="active">Изолента <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=36093"><li>Изделия для маркировки <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Изоляционные ленты применяются при промышленных, строительных и бытовых работах для электроизоляции. Используются в качестве изоляционного материала, обеспечивают герметичность, защиту от воздействия влаги, солей, слабых растворителей, и т.д.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=387&orderby=title&order=asc&showposts=10000');
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