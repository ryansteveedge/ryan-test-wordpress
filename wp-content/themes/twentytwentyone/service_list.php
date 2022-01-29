<?php 
/* Template Name: Services */
get_header();


	get_template_part( 'template-parts/content/content-page' );

?>


<div class="smallspace" id="top_ref" style="padding-top:100px;"></div>
<div class="content" style="margin: 0 20px">
   <div class="button-holder">
      <button href="type-a" id="linkclickera">Go to Type A</button>
      <button href="type-b" id="linkclickerb">Go to Type B</button>
   </div>
</div>
<div class="spacing" style="padding-top:500px;"></div>
<section class="content" style="margin: 0 20px">
<?php
   $custom_terms = get_terms('service_type');
   foreach($custom_terms as $custom_term) {
      wp_reset_query();
      $args = array('post_type' => 'service',
         'tax_query' => array(
               array(
                  'taxonomy' => 'service_type',
                  'field' => 'slug',
                  'terms' => $custom_term->slug,
               ),
         ),
      );

      $loop = new WP_Query($args);
      if($loop->have_posts()) {
         echo '<h2 id='.$custom_term->slug.'>'.$custom_term->name.'</h2>';

         while($loop->have_posts()) : $loop->the_post();
               echo '<a href="'.get_permalink().'">'.get_the_title().'</a><br>';
         endwhile;
      }
   }
?>
</section>
<div class="backtotop">
   <button id="backtotop">Back to top</button>
</div>
<div class="spacing" style="padding-top:500px;"></div>

<?php get_footer(); ?>