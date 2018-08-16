<?php
/*
Template Name: Немецкий кабель - helukabel - ПВХ кабели управления (сертификат VDE)
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 24.3em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>ПВХ кабели управления</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40640">Германия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=1552">Helukabel</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">ПВХ кабели управления</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=1579"><li>Гибкие кабели управления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1581"><li>Искробезопасные ПВХ кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1583"><li class="active">ПВХ кабели управления <span class="glyphicon glyphicon-chevron-right"  style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1585"><li>Монтажные провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1587"><li>Термостойкие кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1589"><li>Безгалогеновые кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1592"><li>Кабели для передачи данных <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/03/helukabel.jpg"><cite><strong>ТОО "Корпорация Gulfstream"</strong> представляет различные Сертифицированные VDE ПВХ-кабели управления производства Helukabel, которые имеют свои определенные технические характеристики, указанные ниже для каждого вида ПВХ-кабеля, а также различные области применения.</cite>
<br>
ПВХ-кабели <strong>Helukabel</strong> используются в качестве соединительных кабелей в станкостроительной промышленности, в инструментальном производстве, а также при производстве оборудования. ПВХ-кабель Helukabel H05VVC4V5-K (NYSLYCYO-JZ) оптимально устойчив к химическим веществам, а также является абсолютно маслостойким. Это позволяет использовать его в прачечных, пивоваренных заводах и разливочных цехах. Их применение допустимо на монтажных линиях и конвейерах в помещениях со средней и высокой степенью влажности. Однако, применение ПВХ-кабеля Helukabel вне помещений недопустимо. При производстве ПВХ-кабелей Helukabel используется ПВХ-пластик, не содержащий свинец. Они устойчивы к бензину, к влиянию погодных условий и сырости, к микробам, к ультрафиолетовому излучению, к гидролизу, к бензину и кислотам. ПВХ-кабель Helukabel H05VV5-F (NYSLYO-JZ) используют при средних механических напряжениях без растягивающих и крутящих нагрузок.
</figcaption>
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=98&orderby=title&order=asc&showposts=1000');
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