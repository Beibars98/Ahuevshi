<?php
/*
Template Name: Немецкий кабель - helukabel - Гибкие кабели управления
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 26.8em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Гибкие кабели управления</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40640">Германия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=1552">Helukabel</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Гибкие кабели управления</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=1579"><li class="active">Гибкие кабели управления <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1581"><li>Искробезопасные ПВХ кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1583"><li>ПВХ кабели управления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1585"><li>Монтажные провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1587"><li>Термостойкие кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1589"><li>Безгалогеновые кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1592"><li>Кабели для передачи данных <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/03/helukabel.jpg">Успех в конструировании и производстве машин, автоматическом управлении, передаче данных, процессах сварки и транспортирования продукции сегодня абсолютно немыслим без кабелей управления и передачи данных. Надежная работа этих кабелей крайне необходима особенно для обеспечения бесперебойной работы конвейеров.
<br>
<cite><strong>ТОО "Корпорация Gulfstream"</strong> предлагает Вашему вниманию для всевозможных областей применения гибкие кабели управления с сертификатами соответствия требованиям стандартов ГОСТ-Р. При необходимости дополнительной информации по другим видам кабельной продукции рекомендуем Вам также ознакомиться с новыми каталогами HELUKABEL (740 стр. на английском и немецком языках), а также обратиться непосредственно в ТОО "Корпорация Gulfstream" для изготовления специальных кабелей и проводов по желанию заказчика уже от 100 м длины.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=96&orderby=title&order=asc&showposts=1000');
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