<?php
/*
Template Name: Kabel-prov-kontrol
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 21.3em;
		   }
		   article figcaption {
		   margin-top: -28.8em;
		   }
		   .table_blur {
		   margin-top: -13em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Контрольные кабели</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40637">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Контрольные кабели</a></p>
	<ul class="shet">
  <a href="http://asiaelectro.kz/?page_id=135"><li>Cиловые кабели в БПИ 1-110 кВ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=775"><li>Cиловые кабели в ПВХ изоляции 0,66-6 кВ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=916"><li>Cиловые кабели в СПЭ изоляции<br> 1-35 кВ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1075"><li>Cиловые кабели в СПЭ изоляции 110-220 кВ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1112"><li>Cиловые кабели в резине<br> 0,38-0,66 кВ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1195"><li>Пожаробезопасные кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1279"><li class="active">Контрольные кабели <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1383"><li>Силовые провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1432"><li>Неизолированные провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1466"><li>Самонесущие провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><strong>Контрольные кабели</strong> предназначены для неподвижного присоединения к электрическим приборам, аппаратам, сборкам зажимов электрических распределительных устройств с номинальным переменным напряжением до 660 В. частотой до 100 Гц или постоянным напряжением до 1000 В. Контрольные кабели применяются для устройств сигнализации, контроля, управления, релейной защиты и т. п.
<br>
Кабели изготавливаются для эксплуатации в районах с умеренным, холодным и тропическим климатом. Контрольные кабели предназначены для эксплуатации на суше, реках и озерах на высотах до 4300 м. над уровнем моря и могут монтироваться: на открытом воздухе, под навесом, в помещениях, шахтах, подвалах, почве, судовых и корабельных помещениях, где возможно длительное наличие воды или частая конденсация влаги.
<br>
<cite>Купить кабели и провода вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта кабели и провода со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабели и провода делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite>
</figcaption>
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=87&orderby=title&order=asc&showposts=1000');
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