<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Шкафы, боксы и принадлежности к ним - Принадлежности и аксессуары для шкафов - Зажимы и клеммные блоки
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 27.5em;
		   }
		   article figcaption {
		   margin-top: -25.5em;
		   }
		   .table_blur {
		   margin-top: -9em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Зажимы и клеммные блоки</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23880">Шкафы, боксы и принадлежности к ним</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Зажимы и клеммные блоки</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=25478"><li>DIN-рейки <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25480"><li>Шины N, PE, PEN, L,<br> кросс-модули <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25482"><li>Шины соединительные <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25484"><li class="active">Зажимы и клеммные блоки <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25486"><li>Сальники и кабельные вводы <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25488"><li>Изоляторы <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25490"><li>Распределительные блоки РБД <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25492"><li>Оборудование для климат-контроля <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25494"><li>Замки <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=25497"><li>Принадлежности прочие <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Служат для безопасного и компактного подключения фазных, нулевых и защитных (земля) проводников различного сечения.<br>
Устанавливаются на DIN-рейку. Комплектуются маркером для нанесения номера (кроме ЗНИ-2,5 и ЗНИ-95).
<br>
Также поставляются боковые заглушки для клеммных зажимов серии ЗНИ. Оконечные зажимы могут закрываться пластиковыми заглушками соответствующего размера и цвета. Выполнены из цветного негорючего полиамида — желто-зеленого (земля), синего (ноль), серого (фаза) цвета.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=305&orderby=title&order=asc&showposts=10000');
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