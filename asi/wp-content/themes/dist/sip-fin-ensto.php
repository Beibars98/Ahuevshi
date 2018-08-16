<?php
/*
Template Name: Арматура на СИП - Финляндия - Энсто
Template Post Type: page
*/
?>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 6em;
		   }
		   article figcaption {
		   margin-top: -3em;
		   }
		   .table_blur {
		   margin-right: 3em;
		   width: 60em;
		   margin-top: -2em;	   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Ensto</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2446">Арматура на СИП</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2454">Финляндия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Ensto</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=2456"><li class="active">Ensto <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/ensto-placeholder-logo.jpg"><strong>Ensto</strong> — финская электротехническая компания, производитель высоковольтной арматуры для строительства линий электропередач, также производит промышленные электрообогреватели, вентиляционные системы, системы контроля, зарядные станции для электромобилей, оборудование для воздушных и подземных кабельных линий. 
<br>
<cite>Купить арматуру на СИП вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта арматуру на СИП со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные муфты делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=147&orderby=title&order=asc&showposts=10000');
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