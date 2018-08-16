<?php
/*
Template Name: Арматура на AC - Металлоконструкции для ЛЭП - Траверсы высоковольтные ТМ
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 31em;
		   }
		   article figcaption {
		   margin-top: -31.5em;
		   }
		   .table_blur {
		   margin-top: -19em;
		   }
		   footer {
		   margin-top: 40em;
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Траверсы высоковольтные ТМ</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2466">Арматура на АС</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Траверсы высоковольтные ТМ</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=19752"><li>Болты <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19754"><li>Вал привода РА <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19756"><li>Заземляющие проводники ЗП <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19758"><li>Крепление провода СШ--2 <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19760"><li>Крепление изолятора <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19762"><li>Кронштейны КМ, КС, РА, Р <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19764"><li>Надставки ТС <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19766"><li>Оголовья и накладки ОГ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19768"><li>Оттяжки <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19770"><li>Стяжки <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19774"><li class="active">Траверсы высоковольтные ТМ <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19776"><li>Траверсы низковольтные ТН <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19778"><li>Упор УП50 <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=19780"><li>Хомуты <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption>Траверсы высоковольтные ТМ предназначены для крепления проводов на опорах высоковольтных линий электропередач. Конструкция высоковольтных траверс обеспечивает защиту от токов короткого замыкания. Существующее разнообразие типов траверс позволяет подобрать оптимальный вариант траверсы для конкретных условий применения. При выборе высоковольтных траверс необходимо учитывать вид проводов (изолированные или неизолированные) и форму сечении опоры (круглая, прямоугольная или многогранная).
<br>
<cite>Купить арматуру на АС вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта арматуру на АС со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на арматуру на АС делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=240&orderby=title&order=asc&showposts=10000');
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