<?php
/*
Template Name: Немецкий кабель - helukabel - Искро-безопасные ПВХ кабели
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 31em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Искробезопасные ПВХ кабели</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40640">Германия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=1552">Helukabel</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Искробезопасные ПВХ кабели</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=1579"><li>Гибкие кабели управления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1581"><li class="active">Искробезопасные ПВХ кабели <span class="glyphicon glyphicon-chevron-right"  style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1583"><li>ПВХ кабели управления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1585"><li>Монтажные провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1587"><li>Термостойкие кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1589"><li>Безгалогеновые кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1592"><li>Кабели для передачи данных <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/03/helukabel.jpg">Согласно стандартам DIN VDE электрические линии в искробезопасных установках должны быть промаркированы голубой внешней оболочкой (RAL 5015). <strong>HELUKABEL®</strong> выпускает такие кабели в соответствии с DIN VDE 0165, а также в соответствии с дополнением для экранированных типов кабелей DIN VDE 0165 часть 1, EN 60079-14 или IEC 60079-14 раздел 12.2.2.6.
<br>
Зелено-желтый защитный провод отсутствует, т.к. данные кабели предназначены для установок, имеющих замкнутый электрический контур.
<br>
Использование данных кабелей вне искробезопасных линий недопустимо. Кабели предназначены для сухих и влажных помещений, их нельзя прокладывать в земле, а также на открытом воздухе. ПВХ-оболочка устойчива к маслам, а также трудно воспламеняется. <cite>Приведенные ниже типы кабелей преимущественно имеются в наличии на складе <strong>ТОО "Корпорация Gulfstream"</strong>.
<br>
Возможно краткосрочное изготовление по специальным заказам.</cite>
</figcaption>
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=97&orderby=title&order=asc&showposts=1000');
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