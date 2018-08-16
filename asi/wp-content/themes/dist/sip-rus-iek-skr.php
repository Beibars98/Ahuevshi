<?php
/*
Template Name: Арматура на СИП - Россия - IEK -  Оборудование и линейная арматура для СИП - Скрепа, лента бандажная
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
  <head>
	   <link rel="stylesheet" href="http://asiaelectro.kz/wp-content/themes/dist/css/styler-with-table.css" type="text/css"/>
	   <style>
		   article hr {
		   width: 26em;
		   }
		   article figcaption {
		   margin-top: -11em;
		   }
		   .table_blur {
		   
		   }
	   </style>
  <?php get_header(); ?>
    <article>
    <h2>Скрепа, лента бандажная</h2>
    <hr>
    <p><a href="http://asiaelectro.kz/?page_id=40604#">Наша продукция</a> <span class="glyphicon glyphicon-chevron-right"></span> <a href="http://asiaelectro.kz/?page_id=2448">Арматура на СИП</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="http://asiaelectro.kz/?page_id=27989">Россия</a>  <span class="glyphicon glyphicon-chevron-right"></span>  <a href="#" class="active">Скрепа, лента бандажная</a></p>
	<ul>
  <a href="http://asiaelectro.kz/?page_id=27991"><li>Зажимы, кронштейны,<br> комплекты крепления <span class="glyphicon glyphicon-chevron-right"></span></li></a>
  <a href="http://asiaelectro.kz/?page_id=27993"><li>Гильзы, наконечники, колпачки <span class="glyphicon glyphicon-chevron-right"></span></li></a>	 
  <a href="http://asiaelectro.kz/?page_id=27995"><li class="active">Скрепа, лента бандажная <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span></li></a>   
  <a href="http://asiaelectro.kz/?page_id=27997"><li>Инструмент для СИП <span class="glyphicon glyphicon-chevron-right"></span></li></a>
    </ul>
	<figcaption><img src="http://asiaelectro.kz/wp-content/uploads/2018/07/IEK_.jpg">Бандажная лента IEK предназначена для монтажа арматуры СИП на опорах электропередач, крепления дорожных знаков, указателей, монтажа подземных коммуникаций, оптоволоконных и других линий связи.
Применяется для наружных работ, связанных с влиянием атмосферных осадков, перепадов температур, механических и химических воздействий.
Производят ленту из высококачественной нержавеющей стали, благодаря этому ей не страшна коррозия металла, различные деформации и другие повреждения.
<br>
Скрепа используется для фиксации бандажной ленты при монтаже в качестве замка для монтажной ленты. Изготавливается из нержавеющей стали. Монтируется при помощи обычного молотка.
<br>
<cite>Купить арматуру на СИП вы всегда можете в ТОО "Корпорация Gulfstream". Вы можете выбрать необходимые для вашего проекта арматуру на СИП со складов в Алматы. Продуманная логистика позволяет предложить оптимальные сроки поставки продукции, а низкие цены на кабельные муфты делают сотрудничество с <strong>ТОО "Корпорация Gulfstream"</strong> бескомпромиссным вариантом.</cite></figcaption>	
    <table class="table_blur">	
      <tr>
		  <th>№</th>
		  <th>Наименование</th>
		  <th class="har">Характеристики</th>
	  </tr>
		<?php 
        $wp_query = new WP_Query(); $wp_query->query('cat=335&orderby=title&order=asc&showposts=10000');
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