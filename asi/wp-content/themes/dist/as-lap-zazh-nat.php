<?php
/*
Template Name: Арматура на AC - Арматура для ЛЭП - Зажимы - Зажимы натяжные
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 19em;
		   }
		   article figcaption {
		   margin-top: -20em;
		   }
		   .table_blur {
		   margin-top: -11em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Зажимы натяжные</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2466">Арматура на АС</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=19483">Арматура для ЛЭП</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Зажимы натяжные</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=19503"><li class="active">Зажимы натяжные <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19505"><li>Зажимы плашечные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19507"><li>Зажимы аппаратные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19509"><li>Зажимы разъемные ответвительные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19511"><li>Зажимы поддерживающие <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19513"><li>Зажимы ответвительные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19515"><li>Зажимы соединительные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19517"><li>Зажимы заземляющие <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption>Зажимы натяжные болтовые типа НБ предназначены для крепления алюминиевых, сталеалюминиевых и медных проводов к натяжным изолирующим подвескам анкерно-угловых опор. 
<br>
<cite>Купить арматуру на АС вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта арматуру на АС со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на арматуру на АС делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=221&orderby=title&order=asc&showposts=10000');
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