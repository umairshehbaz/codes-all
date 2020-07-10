<?php
   /**
    *  Template Name: Home
    * The front page template file
    */
   
   get_header(); ?>



   
<div class="your-class">
   <?php
      // check if the repeater field has rows of data
      
      if( have_rows('slider') ):
      
      
      
       	// loop through the rows of data
      
          while ( have_rows('slider') ) : the_row();?>
   <div class="slider-image" style="background-image: url('<?php the_sub_field('image');?>');">
      <div class="opacity"></div>
      <div class="banner-text">
         <?php the_sub_field('text');?>
         <a href="<?php the_sub_field('link');?>">WINKEL NU</a>
      </div>
   </div>
   <?php
      endwhile;
      
      
      
      endif;
      
      
      
      ?>
</div>

<!-- SLick SLider Ends -->

<section class="home-cats">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            
         
         <!-- Category Repeater -->	
         <?php
            // check if the repeater field has rows of data
            
            if( have_rows('categories') ):
            
            
            
             	// loop through the rows of data
            
                while ( have_rows('categories') ) : the_row();?>
         <a href="<?php the_sub_field('link'); ?>">
            <div class="home-cat-all">
               <div class="cat-bg" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
               <h2><?php the_sub_field('title'); ?></h2>
            </div>
         </a>
         <?php
            endwhile;
            
            
            
            endif;
            
            
            
            ?>
         <!-- Category Repeater Ends -->
</div>
      </div>
   </div>
</section>

<!--  -->


<section class="list-points">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="inner-box">
               <h3>Eigenschappen van Piepschuim</h3>
               <ul class="box-list">
                  <?php
                     // check if the repeater field has rows of data
                     
                     if( have_rows('eigenschappen_list') ):
                     
                     
                     
                      	// loop through the rows of data
                     
                         while ( have_rows('eigenschappen_list') ) : the_row();?>
                  <li><?php the_sub_field('text'); ?></li>
                  <?php
                     endwhile;
                     
                     
                     
                     endif;
                     
                     
                     
                     ?>
               </ul>
            </div>
         </div>
         <div class="col-md-6">
            <div class="inner-box-right">
               <?php the_field('right_text'); ?>
            </div>
         </div>
      </div>
   </div>
</section>

<!--  -->


<section class="speciaal">
   <div class="container">
   <div class="row">
      <div class="col-md-9">
         <h2>Speciaal voor jou geselecteerd</h2>
      </div>
      <div class="col-md-3">
         <a href="#" class="read">LAAT MEER ZIEN</a>
      </div>
   </div>
   <div class="row">
      <div class="product-slider">
         <?php
            $args = array( 'post_type' => 'product');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
         <div class="p-slider">
            <div class="pr-image">
               <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('full'); ?> </a>
            </div>
            <div class="product-det">
               <a href="<?php the_permalink();?>"> <?php the_title(); ?></span></a>
               <h3 class="new-h3 other"><?php echo $product->get_price_html(); ?></h3>
            </div>
         </div>
         <?php endwhile; ?>
         <?php wp_reset_query(); ?>
      </div>
   </div>
</section>

<!--  -->


<section class="waarom">
   <div class="container">
      <div class="row">
         <h2>Waarom zou u voor ons kiezen?</h2>
      </div>
      <div class="row sec">
         <?php
            // check if the repeater field has rows of data
            
            if( have_rows('bottom_list') ):
            
            
            
             	// loop through the rows of data
            
                while ( have_rows('bottom_list') ) : the_row();?>
         <div class="col-md-3">
            <div class="icon">
               <img src="<?php the_sub_field('icon'); ?>">
            </div>
            <div class="dets">
               <h3><?php the_sub_field('title'); ?></h3>
               <?php the_sub_field('details') ?>
            </div>
         </div>
         <?php
            endwhile;
            
            
            
            endif;
            
            
            
            ?>
      </div>
   </div>
</section>
<?php get_footer();