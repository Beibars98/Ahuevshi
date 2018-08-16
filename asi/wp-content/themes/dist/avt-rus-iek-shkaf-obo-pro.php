<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Шкафы, боксы и принадлежности к ним - Оболочки металлические - Корпуса металлические прочие
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 31.8em;
		   }
		   article figcaption {
		   margin-top: -7.5em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Корпуса металлические прочие</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=23880">Шкафы, боксы и принадлежности к ним</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Корпуса металлические прочие</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=24560"><li>Корпуса металлические ЩМП <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24562"><li\>Корпуса металлические ВРУ <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=24564"><li class="active">Корпуса металлические прочие <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Ассортимент прочих металлических корпусов представлен: ПР, КСРМ, ШРС, щитами одностороннего обслуживания ЩО.
<br>
ПР используются для сборки пунктов распределительных серии ПР11, предназначенных для приема и распределения электроэнергии, защиты электроустановок напряжением 380/220В при перегрузках и коротких замыканиях, а также нечастых (не более 6 в час) включений и отключений электрических цепей.
<br>
Панели распределительных щитов ЩО предназначены для комплектования распределительных устройств напряжением 230/400 В трёхфазного переменного тока частотой 50 Гц в сетях с глухозаземленной нейтралью в четырехпроводном и пятипроводном исполнениях, служащих для приёма и распределения электрической энергии, защиты отходящих линий от перегрузок и токов короткого замыкания.
<br>
Панели распределительных щитов ЩО представляют собой сборно-разборный каркас из вертикальных стоек, вертикальных уголков, боковых и лицевых стяжек, к которым крепятся дверь, боковые панели, крыша (боковые панели и крыша заказываются отдельно). Применяются для сборки низковольтных комплектных устройств: главных распределительных щитов, вводно-распределительных устройств, шкафов управления и автоматики.
<br>
КСРМ - сборно-разборный каркас из перфорированного профиля, к которому крепятся дверь, боковые панели, задняя стенка, крыша и цоколь. Внутри корпуса можно устанавливать различные комплектующие: монтажные панели, опорные рейки, планки, уголки, DIN-рейки и т.п. для последующего крепления к ним электроаппаратов, сборных шин, электромонтажных изделий и принадлежностей.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=300&orderby=title&order=asc&showposts=10000');
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