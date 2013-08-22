<div id="faded">
  <div class="rap">
  	<?php
			query_posts("post_type=slider&post_status=publish&posts_per_page=-1");
			while ( have_posts() ) : the_post();
		?>
    <?php
			$custom = get_post_custom($post->ID);
			$cf_thumb = $custom["thumb"][0];
			$url = get_post_custom_values("slider-url");
		?>
    <?php if(has_post_thumbnail( $the_ID) || $cf_thumb!=""){ ?>
    <div class="slide">
    <?php 
			if($cf_thumb!=""){
				echo "<a href='" . $url[0] . "'>";
				echo "<img src='" . $cf_thumb . "' alt='' />";
				echo "</a>";
			}else{
				echo "<a href='" . $url[0] . "'>";
				the_post_thumbnail( 'slider-post-thumbnail' );
				echo "</a>";
			}
		?>
    </div>
    <?php } ?>
    <?php endwhile; ?>
  </div>
  <a href="#" class="prev nav-arrow"><img src="http://www.hairlab.net/wp-content/uploads/2013/03/transparent.png" alt="transparent"></a>
  <a href="#" class="next nav-arrow"><img src="http://www.hairlab.net/wp-content/uploads/2013/03/transparent.png" alt="transparent"></a>
</div><!-- end #faded -->
<?php wp_reset_query();?>