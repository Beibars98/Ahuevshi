<?php
/*
Template Name: Кабельные лотки и металлоизделия - Россия - IEK - Лотки листовые
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 16.2em;
		   }
		   article figcaption {
		   margin-top: -17em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Лотки листовые</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=29010">Кабельные лотки и металлоизделия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=29012">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=29014">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Лотки листовые</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=29016"><li class="active">Лотки листовые <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29018"><li>Лотки лестничные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29020"><li>Лотки проволочные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29022"><li>Аксессуары для лотков металлических <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29024"><li>Изделия монтажные для лотков металлических <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=29027"><li>Метизы <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Перфорированные и неперфорированные прокатные лотки входят в состав металлических кабеленесущих систем группы компаний IEK. Предназначены для прокладки и защиты силовых и слаботочных кабелей напряжением до 1000В. При использовании совместно с крышкой обеспечивает максимальную защиту кабеля от внешних воздействий, пыли и влаги. В зависимости от исполнения лотки могут применяться как внутри общественных, производственных зданий, сооружений и объектах розничной торговли, так и вне помещений под навесом, на открытом воздухе, а также в помещениях с повышенной влажностью.
<br>
Прокатные лотки IEK изготавливаются из рулонной холоднокатаной стали, оцинкованной конвейерным способом по ГОСТ 14918-80 или методом погружения готовых изделий в расплав цинка ГОСТ 9.307.
<br>
Система прокатных лотков IEK состоит из прямых элементов и аксессуаров, предназначенных для изменения направления трассы, а также крышек и соединительных элементов разных габаритов.
<br>
Лоток неперфорированный выпускается по ТУ 3449-001-57393508-2008. По требованиям безопасности изделие соответствует техническому регламенту ТР ТС 004/2011 и ГОСТ Р 52868.
<br>
<cite>Купить Кабельные лотки и металлоизделия вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта кабельные лотки и металлоизделия со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные лотки и металлоизделия делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=342&orderby=title&order=asc&showposts=10000');
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