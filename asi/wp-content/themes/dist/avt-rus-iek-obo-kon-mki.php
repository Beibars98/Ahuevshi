<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Оборудование коммутационное и устройства управления - Контакторы - Миниконтакторы МКИ
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 22.5em;
		   }
		   article figcaption {
		   margin-top: -13em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Миниконтакторы МКИ</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=34705">Оборудование коммутационное и устройства управления</a> <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Миниконтакторы МКИ</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=34718"><li>Контакторы КМИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34720"><li>Контакторы КТИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34722"><li>Контакторы ПМ12 <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34724"><li class="active">Миниконтакторы МКИ <span class="glyphicon glyphicon-chevron-right"   style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34726"><li>Контакторы КТ 6600И,<br> КТП 6600И <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Миниконтакторы серии МКИ предназначены для использования в схемах управления различных нагрузок на напряжение переменного тока до 660 В частоты 50 Гц. Миниконтакторы позволяют дистанционно коммутировать силовые электрических сети в категориях применения АС3 (управление электродвигателями мощностью до 5 кВт) и АС1 (управление нагревательными приборами). Степень защиты, обеспечиваемая оболочкой миниконтакторов IP20 по ГОСТ 14254. Климатическое исполнение и категория применения контакторов УХЛ4 по ГОСТ 15150.
<br>
Все исполнения имеют одну группу замыкающих или размыкающих дополнительных контактов.
<br>
По своим характеристикам контакторы соответствуют требованиям ГОСТ Р 50030.4.1. имеют сертификат соответствия С-СN.AВ28.В15019.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=366&orderby=title&order=asc&showposts=10000');
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