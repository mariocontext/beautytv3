<?php
// Add Header Image // Add Header Image
function thematic_logo_image() {
 echo '<a href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'" ><span id="header-image"></span></a>';
}
add_action('thematic_header','thematic_logo_image',6);