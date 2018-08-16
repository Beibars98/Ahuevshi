<?php
/*
Template Name: Арматура на СИП - Россия - IEK -  Оборудование и линейная арматура для СИП - Гильзы, наконечники, колпачки
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 31.3em;
		   }
		   article figcaption {
		   margin-top: -11em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Гильзы, наконечники, колпачки</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2448">Арматура на СИП</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=27989">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Гильзы, наконечники, колпачки</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=27991"><li>Зажимы, кронштейны,<br> комплекты крепления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=27993"><li class="active">Гильзы, наконечники, колпачки <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>	 
  <a href="http://asiaelectro.kz/?page_id=27995"><li>Скрепа, лента бандажная <span class="glyphicon glyphicon-chevron-right"></span></li></a>   
  <a href="http://asiaelectro.kz/?page_id=27997"><li>Инструмент для СИП <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Гильзы изолированные ГИФ, ГИН и ГИА применяются для алюминиевых многопроволочных проводов. Определенному сечению провода соответствует определенный цвет герметизирующего кольца. Внутренняя полость алюминиевой части заполнена контактной смазкой, предохраняющей поверхность алюминия от окисления, снижающей контактное сопротивление, что приводит к значительному снижению потерь электроэнергии, а также обеспечивающей надежный электрический контакт в системе медь-алюминий и защищающей место соединения от контактной электрохимической коррозии. Изоляционным материалом является полимер, устойчивый к ультрафиолетовому излучению и погодно-климатическим условиям.
<br>
<cite>Купить арматуру на СИП вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта арматуру на СИП со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные муфты делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=334&orderby=title&order=asc&showposts=10000');
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