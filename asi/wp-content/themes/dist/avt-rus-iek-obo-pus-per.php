<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Оборудование коммутационное и устройства управления - Пускатели, выключатели - Переключатели кулачковые ПКП
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 33em;
		   }
		   article figcaption {
		   margin-top: -9em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Переключатели кулачковые ПКП</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=34705">Оборудование коммутационное и устройства управления</a> <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Переключатели кулачковые ПКП</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=34734"><li>Пускатели ручные кнопочные<br> ПРК и аксессуары <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34736"><li class="active">Переключатели кулачковые ПКП <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34738"><li>Выключатели концевые<br> и путевые <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Переключатели кулачковые позиционные серии ПКП торговой марки IEK представляют собой механическое устройство без собственного потребления электроэнергии и предназначены для установки в качестве коммутационных аппаратов в электрических цепях. ПКП могут использоваться как главные выключатели или групповые переключатели для управления приводами на основе одно- и трехфазных двигателей, переключения с требуемой программой коммутации цепей управления, сигнализации, в измерительных цепях и т.д. Используются в электрических цепях переменного тока напряжением до 400 В.
<br>
По своим конструктивным и техническим характеристикам переключатели кулачковые позиционные серии ПКП соответствуют требованиям ГОСТ Р 5003.03.
Переключатели кулачковые позиционные серии ПКП прошли сертификационные испытания, и на их серийный выпуск получен сертификат соответствия РОСС CN.МЕ.95.В27365.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=374&orderby=title&order=asc&showposts=10000');
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