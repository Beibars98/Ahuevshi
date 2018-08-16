<?php
/*
Template Name: Kabel-prov-1-110
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 32.5em;
		   }
		   article figcaption {
		   margin-top: -28.8em;
		   }
		   .table_blur {
		   margin-top: -8em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Cиловые кабели в БПИ 1-110 кВ</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=40624">Кабельно-проводниковая продукция</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=40637">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Cиловые кабели в БПИ 1-110 кВ</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=135"><li class="active">Cиловые кабели в БПИ 1-110 кВ <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=775"><li>Cиловые кабели в ПВХ изоляции 0,66-6 кВ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=916"><li>Cиловые кабели в СПЭ изоляции<br> 1-35 кВ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1075"><li>Cиловые кабели в СПЭ изоляции 110-220 кВ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1112"><li>Cиловые кабели в резине<br> 0,38-0,66 кВ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1195"><li>Пожаробезопасные кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1279"><li>Контрольные кабели <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1383"><li>Силовые провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1432"><li>Неизолированные провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=1466"><li>Самонесущие провода <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption>Силовые кабели предназначены для передачи и распределения электрической энергии в стационарных установках на номинальное переменное напряжение 1 кВ, 6 кВ, 10 кВ,  20 кВ и 35 кВ частоты 50Гц.
<br>
Кабели предназначены для эксплуатации в районах с холодным, умеренным и тропическим климатом. Кабели могут укладываться непосредственно в грунт или подземные кабельные каналы, а также могут прокладываться в помещениях и на открытом воздухе.
<br>
Кабели с пропитанной бумажной изоляцией используются в любых цепях, которые требуют высокой степени надёжности, самого длительного и непрерывного срока службы. Благодаря не стекающей пропитке кабели могут прокладываться на круто наклонных и вертикальных трассах. Дополнительное преимущество трёх- и четырёхжильных кабелей с пропитанной бумажной изоляцией на напряжение до 10 кВ в том, что из-за секторной формы жил кабель имеет меньший диаметр, нежели кабель того же сечения с круглыми жилами с полимерной изоляцией; это обстоятельство позволяет экономить пространство при монтаже кабельных линий и передавать больше энергии.
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
        $wp_query = new WP_Query(); $wp_query->query('cat=81&orderby=title&order=asc&showposts=1000');
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