<?php
/*
Template Name: Немецкий кабель - helukabel - Кабели для передачи данных
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 29.8em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Кабели для передачи данных</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40640">Германия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=1552">Helukabel</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Кабели для передачи данных</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=1579"><li>Гибкие кабели управления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1581"><li>Искробезопасные ПВХ кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1583"><li>ПВХ кабели управления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1585"><li>Монтажные провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1587"><li>Термостойкие кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1589"><li>Безгалогеновые кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1592"><li class="active">Кабели для передачи данных <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/03/helukabel.jpg">Все <strong>НЕLUКАТ®</strong> кабели для передачи данных соответствуют новым рекомендациям по нормам и предназначены для применения в быстродействующих сетях с передачей данных от 100 Мбит/сек (например, CDDI, TPDDI, ATM, SDH/SONET). Все эти НЕLUКАТ-типы соответствуют требованиям категории 5 в соответствии EIA/TIA TSB-36 ISO/IEC 11801, CENELEC pr EN 50173 и категории 6 соответственно 7 DIN 44312-5. Кабель для применения в интернете как коаксиальные-/Twinaxial-кабель и кабель для IBM IVS-систем являются также составной частью программы НЕLUКАТ. Высокое качество передачи данных НЕLUКАТ-кабельной продукции предьявляет повышенные требования технологии производства и измерительных лабораторий. НЕLUКАТ кабели для передачи данных изготавливаются на современном оборудовании предназначенном для категории 5 и категории 6/7 учитывающие новейшие требования норм. Для измерения качества передачи данных используется специализированная лаборатория с высокочастотным оборудованием с анализатором систем и высокочастотным испытательным автоматом, управляемым компьютером.
<br>
<cite>Купить кабели и провода Helukabel вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете как выбрать необходимые для вашего проекта кабели и провода со складов в Алматы, так и заказать любую кабельно-проводниковую продукцию со складов Helukabel в Германии или под производство. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабели и провода Helukabel делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite>
</figcaption>
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=99&orderby=title&order=asc&showposts=1000');
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