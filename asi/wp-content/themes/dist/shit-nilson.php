<?php
/*
Template Name: Сборка щитового оборудования - NILSON
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 8.5em;
		   }
		   article figcaption {
		   margin-top: -11.7em;
		   }
		   .table_blur {
		   margin-top: ;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>NILSON</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=103">Наша продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#">Сборка щитового оборудования</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">NILSON</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=40969"><li>VIKO <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40972"><li>Schnider Electric <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40975"><li>ТЕКФОР <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40977"><li>TDM <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=40979"><li class="active">NILSON <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
    </ul>
	<figcaption>В 1985 году кoмпания Метал Калып была основана для производства металлических и пластмасовых форм и  успешно произвела немало прессформ для Турецких и иностранных фирм. <br>
В1987 году кoмпания Метал Калып приняла решение сделать  прессформы для выпуска собственной серии розеток и выключателей.<br>
В 1989 году  начала производить свою серию розеток и выключателей, и  представила eе на рынок под маркой АНАДОЛУ. Произведенная продукция получила признание. Компания продолжила работу в секторе, в котором она была уже давно известна - это производство механизмов. В 2000 году фирма продолжила свой рост и выпустила серию розеток и выключателей под названием МЕКАСАН. Это способствовало расширению ассортимента продукции и позволило продолжить рост на рынке Турции и странах дальнего и ближнего зарубежья.
<br>
<cite>Купить Щитовое оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта Щитовое оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на Щитовое оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=430&orderby=title&order=asc&showposts=1000');
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