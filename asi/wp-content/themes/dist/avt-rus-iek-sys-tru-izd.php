<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Системы для прокладки кабеля - Трубы пластиковые - Изделия монтажные для пластиковых труб
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 43.3em;
		   }
		   article figcaption {
		   margin-top: -10em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Изделия монтажные для пластиковых труб</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=26431">Системы для прокладки кабеля</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Изделия монтажные для пластиковых труб</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=27065"><li>Трубы пластиковые гофрированные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=27067"><li>Трубы пластиковые гладкие <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=27069"><li class="active">Изделия монтажные для пластиковых труб <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Аксессуары для труб серого и черного цвета гармонично сочетаются с гладкими и гофрированными трубами ПВХ и ПНД позволяют монтировать кабельные системы в едином эстетичном исполнении.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=329&orderby=title&order=asc&showposts=10000');
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