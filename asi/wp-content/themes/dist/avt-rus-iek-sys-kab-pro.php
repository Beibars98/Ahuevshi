<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Системы для прокладки кабеля - Кабель-каналы и аксессуары - Кабель-каналы прочие и аксессуары
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 37em;
		   }
		   article figcaption {
		   margin-top: -15em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Кабель-каналы прочие и аксессуары</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=26431">Системы для прокладки кабеля</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Кабель-каналы прочие и аксессуары</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=26449"><li>Кабель-каналы магистральные белые и аксессуары <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=26451"><li>Кабель-каналы магистральные цветные и аксессуары <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=26453"><li>Кабель-каналы парапетные и аксессуары <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=26455"><li class="active">Кабель-каналы прочие и аксессуары <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Система напольного и плинтусного кабель-каналов серии "ЭЛЕКОР" предназначена для прокладки всех видов силовых и слаботочных коммуникаций, включая оптический кабель и нформационную проводку высоких категорий для организации рабочего места в офисных, производственных и административных зданиях, медицинских и учебных учреждениях при новом строительстве и реконструкции.
<br>
Перфорированные кабельные каналы серии "ИМПАКТ" предназначены для организации кабельной разводки в электрораспределительных шкафах и придания эстетической законченности внутри шкафа.
<br>
Кабель-каналы соответствуют требованиям ТУ 2291-001-18461115-2010.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=326&orderby=title&order=asc&showposts=10000');
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