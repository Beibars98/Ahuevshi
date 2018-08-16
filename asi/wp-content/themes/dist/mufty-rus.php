<?php
/*
Template Name: Кабельные муфты - Россия 
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
		    margin-top: -3em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Кабельные муфты</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2424">Кабельные муфты</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Россия</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=2441"><li class="active">Кабельные муфты (Россия) <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption>Кабельная муфта (от нем. Muffe или нидерл. mouwtje) — устройство, предназначенное для соединения электрических и оптических кабелей в кабельную линию и для их подвода к электрическим установкам, станционным сооружениям, воздушным линиям электропередачи и связи. Муфты представляют собой комплект деталей и материалов, обеспечивающий восстановление электрической, конструктивной и механической целостности кабеля. Состав комплекта определяется рабочим напряжением, частотой, количеством жил, типом изоляции и конструктивными особенностями кабеля.
<br>
<cite>Купить кабельные муфты вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта кабельные муфты со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные муфты делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=138&orderby=title&order=asc&showposts=1000');
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