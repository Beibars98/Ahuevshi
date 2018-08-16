<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Изделия электроустановочные, удлинители и силовые разъемы - Удлинители бытовые и сетевые фильтры - Сетевые фильтры
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 18.5em;
		   }
		   article figcaption {
		   margin-top: -5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Сетевые фильтры</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=33401">Изделия электроустановочные, удлинители и силовые разъемы</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Сетевые фильтры</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=33420"><li>Удлинители бытовые <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=33422"><li class="active">Сетевые фильтры <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Защищают дорогостоящее и чувствительное электрооборудование от перепадов напряжения в сети и перегрузок (оргтехника, аудио- видео- техника, бытовая техника). Применение сетевых фильтров позволяет повысить электро- и пожаробезопасность при эксплуатации электроприборов за счет своевременного отключения от сети, увеличить помехозащиту линий. Сетевые фильтры особенно эффективны для рабочего места с персональным компьютером, оснащенного дополнительными периферийными устройствами.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=356&orderby=title&order=asc&showposts=10000');
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