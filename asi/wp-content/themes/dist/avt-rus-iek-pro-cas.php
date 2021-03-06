<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Оборудование промышленной автоматизации - Частотно-регулируемый привод
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 32.3em;
		   }
		   article figcaption {
		   margin-top: -10.5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Частотно-регулируемый привод</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Частотно-регулируемый привод</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=39329"><li>Электродвигатели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=39331"><li class="active">Частотно-регулируемый привод <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=39336"><li>Реле контроля и управления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=39338"><li>Реле промежуточные и интерфейсные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Преобразователи частоты представляют собой современные высокотехнологичные устройства для контроля и управления электродвигателями. Отличаются компактными размерами.<br>
Применение новейших технологий в области векторного управления обеспечивает достижение номинального крутящего момента на выходе при низкой скорости, а также почти бесшумный устойчивый ход.<br>
Преобразователи частоты отличаются многообразием режимов регулирования, имеют множество специальных функций защиты и сигнализации, обеспечивают непрерывный мониторинг и оперативную подстройку множества параметров. Обладают встроенным интерфейсом связи RS-485, поддержкой протокола коммуникаций Modbus и гибким управлением.<br>
Преобразователи частоты предназначены для управления широким спектром промышленных установок, а также механизмами с высокими пусковыми нагрузками. Подходят для большинства электроприводов, используемых при производстве цемента, бумаги, текстиля, продуктов питания, а также в полиграфическом, красильном оборудовании, машинах для литья пластмасс и в других отраслях промышленности.<br>
Способны адаптироваться к изменениям нагрузки в широком диапазоне, обладают устойчивым ходом, высокой точностью и высокой надежностью. Помогают улучшить коэффициент мощности и производительность электродвигателей, а также существенно снизить затраты на электроэнергию, особенно при применении в насосных и/или вентиляторных установках.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=394&orderby=title&order=asc&showposts=10000');
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