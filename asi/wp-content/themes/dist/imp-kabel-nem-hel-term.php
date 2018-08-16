<?php
/*
Template Name: Немецкий кабель - helukabel - Термостойкие кабели
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 21.8em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Термостойкие кабели</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40640">Германия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=1552">Helukabel</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Термостойкие кабели</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=1579"><li>Гибкие кабели управления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1581"><li>Искробезопасные ПВХ кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1583"><li>ПВХ кабели управления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1585"><li>Монтажные провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1587"><li  class="active">Термостойкие кабели <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1589"><li>Безгалогеновые кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1592"><li>Кабели для передачи данных <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/03/helukabel.jpg">В металлургической промышленности в условиях экстремальной механической нагрузки при повышенных температурах на производстве предъявляются самые высокие требования к рабочему оборудованию и их комплектующим. Надежная работа кабеля играет при этом первостепенную роль. Контрольный кабель используется для управления специализированным оборудованием путем передачи сигналов на различных частотах.
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
        $wp_query = new WP_Query(); $wp_query->query('cat=101&orderby=title&order=asc&showposts=1000');
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