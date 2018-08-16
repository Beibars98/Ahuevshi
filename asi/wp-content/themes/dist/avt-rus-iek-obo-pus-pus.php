<?php
/*
Template Name: Низковольтное оборудование - Россия - IEK - Оборудование коммутационное и устройства управления - Пускатели, выключатели - Пускатели ручные кнопочные ПРК и аксессуары
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 48.5em;
		   }
		   article figcaption {
		   margin-top: -9em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Пускатели ручные кнопочные ПРК и аксессуары</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2536">Низковольтное оборудование</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2540">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=2562">IEK</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=34705">Оборудование коммутационное и устройства управления</a> <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Пускатели ручные кнопочные ПРК и аксессуары</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=34734"><li class="active">Пускатели ручные кнопочные<br> ПРК и аксессуары <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34736"><li>Переключатели кулачковые ПКП <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=34738"><li>Выключатели концевые<br> и путевые <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Пускатели серии ПРК-32 торговой марки IEK предназначены для управления и защиты трехфазных асинхронных электродвигателей от перегрузки, коротких замыканий и неполнофазных режимов работы. Совмещают в себе несколько функций: функции "Автомата защиты двигателя" и функции ручного пускателя.
<br>
Применяются на промышленных объектах, в сельском хозяйстве, строительстве. Также возможно использование для местного управления отдельными электродвигателями, в автоматике жилых и административных сооружений.
<br>
Категория применения АС-3.
<br>
По своим конструктивным и техническим характеристикам пускатели кнопочные серии ПРК соответствуют требованиям российских и международных стандартов ГОСТ Р 50030.2-99, ГОСТ Р 50030.4.1-2002.
Пускатели кнопочные серии ПРК прошли сертификационные испытания и на их серийный выпуск получен сертификат соответствия РОСС С-МЕ01.В04759.
<br>
Типоисполнение реле РТИ-3353; РТИ-3355 РТИ-3357; РТИ-3359 РТИ-3361; РТИ-3363 РТИ-3365.
<br>
<cite>Купить низковольтное оборудование вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта низковольтное оборудование со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на низковольтное оборудование делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=373&orderby=title&order=asc&showposts=10000');
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