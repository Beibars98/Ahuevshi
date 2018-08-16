<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Оборудование коммутационное и устройства управления - Контакторы - Контакторы КТ 6600И, КТП 6600И
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 34.5em;
		   }
		   article figcaption {
		   margin-top: -13em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Контакторы КТ 6600И, КТП 6600И</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=34705">Оборудование коммутационное и устройства управления</a> <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Контакторы КТ 6600И, КТП 6600И</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=34718"><li>Контакторы КМИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34720"><li>Контакторы КТИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34722"><li>Контакторы ПМ12 <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34724"><li>Миниконтакторы МКИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34726"><li class="active">Контакторы КТ 6600И,<br> КТП 6600И <span class="glyphicon glyphicon-chevron-right"   style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Контакторы электромагнитные серии КТ6600И (с катушкой управления переменным током), КТП6600И (с катушкой управления постоянным током) - коммутационные устройства открытого исполнения с естественным воздушным охлаждением общего назначения на токи нагрузки от 100 до 500 А и напряжения до 400 В переменного тока частоты 50 Гц. Выпускаются в двух-, трех-, четырех- и пятиполюсном исполнениях в пяти типоразмерах, в конструкции которых предусмотрен блок дополнительных контактов для включения и отключения цепей сигнализации и автоматики. Контакторы предназначены для использования в крановом электрооборудовании, подстанциях и в распределительных устройствах производственного назначения.
<br>
На выставке "Электро2007" контактор КТ 6613И был награжден золотой медалью.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=367&orderby=title&order=asc&showposts=10000');
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