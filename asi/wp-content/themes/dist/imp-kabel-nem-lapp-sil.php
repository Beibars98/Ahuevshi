<?php
/*
Template Name: Немецкий кабель - Lapp group - Силовые и контрольные кабели
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 32.2em;
		   }
		   article figcaption {
		   margin-top: -22.5em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Силовые и контрольные кабели</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40640">Германия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=1563">Lapp Group</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Силовые и контрольные кабели</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=1594"><li class="active">Силовые и контрольные кабели <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1596"><li>Кабели для передачи данных <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1598"><li>Кабели для серво-двигателей <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1600"><li>Кабели для буксируемых кабельных цепей <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1602"><li>Спиральные кабели<span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1604"><li>Кабели для лифтов и подъемных механизмов <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1606"><li>Термостойкие кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1608"><li>Кабели для экстремальных условий эксплуатации <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/03/lappgroup.jpg">Особая конструкция токопроводящей жилы, специально разработанные виды кабельного изоляционного пластиката, чистая электротехническая медь - источники качества для кабеля ÖLFLEX® . Только благодаря особой конструкции, современной технологии и специально выбранным материалам кабель устойчив к самым неблагоприятным условиям применения и может эксплуатироваться в любой окружающей среде. Кабель силовой, контрольный и управления ÖLFLEX® применяется настолько широко, что перечислить каждую отрасль представляется затруднительным. Это: машино-, станко-, аппаратостроение и производство промышленных установок; контрольно-измерительные приборы, автоматика, техника отопления и кондиционирования воздуха; Ветросиловые и фотогальванические электрические установки; общественные здания, аэропорты, вокзалы и морские порты; медицинская техника, химическая промышленность, компостирующие и очистительные сооружения; пищевая промышленность; строительное оборудование, автомобили, сельхохозяйственные машины; световые и акустические системы; мобильные электроприборы.
<br>
<cite>Купить кабели и провода вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта кабели и провода со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабели и провода делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=104&orderby=title&order=asc&showposts=1000');
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