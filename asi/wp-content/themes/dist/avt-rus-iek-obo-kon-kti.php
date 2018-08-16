<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Оборудование коммутационное и устройства управления - Контакторы - Контакторы КТИ
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 17.3em;
		   }
		   article figcaption {
		   margin-top: -13em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Контакторы КТИ</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=34705">Оборудование коммутационное и устройства управления</a> <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Контакторы КТИ</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=34718"><li>Контакторы КМИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34720"><li class="active">Контакторы КТИ <span class="glyphicon glyphicon-chevron-right"  style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34722"><li>Контакторы ПМ12 <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34724"><li>Миниконтакторы МКИ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34726"><li>Контакторы КТ 6600И,<br> КТП 6600И <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Контакторы электромагнитные серии КТИ предназначены для использования в схемах управления для пуска и остановки трехфазных асинхронных электродвигателей с короткозамкнутым ротором в электрических сетях с номинальным напряжением до 660 В переменного тока, а также могут быть использованы для включения и отключения других электроустановок: освещения, нагревательных установок и различных индуктивных нагрузок. Применяются в вентиляторах, насосах, печах, кран-балках и в системах автоматического ввода резерва (АВР).
<br>
За эффективность конструкторского решения, высокие эксплуатационные характеристики и надежность в работе контактор удостоен серебряной медали 15-й международной выставки "Электро-2006" в номинации "Лучшее электрооборудование".
<br>
По своим конструктивным и техническим характеристикам контакторы серии КТИ соответствуют требованиям международных и российских стандартов МЭК 60947-4-1-2000,
<br>
ГОСТ Р50030.4.1-2002. Контакторы серии КТИ прошли сертификационные испытания и на их серийный выпуск получен сертификат соответствия РОСС CN.ME86.B00150.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=364&orderby=title&order=asc&showposts=10000');
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