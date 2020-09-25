<?php

get_header(); ?>
    	<div class="container">
    	<div class="row container">

    		
     		<div class="col-lg-8">
        	
    

           <?php

    
				
				if (have_posts() ) {
				        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".the_search_query()."</h2>");
				        while (have_posts() ) {
				          the_post();
				                 ?>
				                    
				                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				                        
				                    
				                 <?php
				        }
				    }else{
				?>
				        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
				        <div class="alert alert-info">
				          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				        </div>
				<?php } ?>
            </div><!-- col-8 -->


        <div class="col-lg-4">
        	
			<?php get_sidebar(); ?>
        </div>
<?php get_footer(); ?>
        	</div> <!--  row-->
        	</div> <!--  row-->
