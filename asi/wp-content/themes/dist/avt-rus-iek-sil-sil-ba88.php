<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Силовое оборудование защиты и коммутации - Силовые автоматические выключатели -  Автоматические выключатели ВА88 и доп. устройства
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 54em;
		   }
		   article figcaption {
		   margin-top: -8em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Автоматические выключатели ВА88 и доп. устройства</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=22560">Силовое оборудование защиты и коммутации</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Автоматические выключатели ВА88 и доп. устройства</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=22565"><li class="active">Автоматические выключатели ВА88 и доп. устройства <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=22567"><li>Автоматические выключатели ВА07 и доп. устройства <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg"><strong>Автоматические выключатели ВА88</strong> предназначены для проведения тока в нормальном режиме и отключения тока при коротких замыканиях, перегрузке, недопустимых снижениях напряжения, а также для оперативных включений и отключений участков электрических цепей и рассчитаны для эксплуатации в электроустановках с номинальным рабочим напряжением до 400 В и на номинальные токи от 12,5 до 1600 А.
<br>
Соответствуют требованиям ГОСТ Р 50030.2 и изготовлены по техническим условиям ТУ 3422-001 П18461115-2009.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=269&orderby=title&order=asc&showposts=10000');
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