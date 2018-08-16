<?php
/*
Template Name: Кабельные лотки и металлоизделия - Россия - IEK - Лотки лестничные
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 18.8em;
		   }
		   article figcaption {
		   margin-top: -17em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Лотки лестничные</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=29010">Кабельные лотки и металлоизделия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=29012">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=29014">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Лотки лестничные</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=29016"><li>Лотки листовые <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29018"><li class="active">Лотки лестничные <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29020"><li>Лотки проволочные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29022"><li>Аксессуары для лотков металлических <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29024"><li>Изделия монтажные для лотков металлических <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29027"><li>Метизы <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Лестничные металлические лотки из оцинкованной стали используются в монтаже трасс для прокладки проводов и кабелей при выполнении открытых электропроводок и открытой прокладки кабельных линий на промышленных и гражданских объектах.<br>
Лестничные лотки изготавливаются из рулонной холоднокатаной стали, оцинкованной горячим способом в агрегатах непрерывного цинкования (ГОСТ 14918-80).
<br>
<cite>Купить Кабельные лотки и металлоизделия вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта кабельные лотки и металлоизделия со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные лотки и металлоизделия делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=340&orderby=title&order=asc&showposts=10000');
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