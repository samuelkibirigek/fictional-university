<?php

    get_header();

   while(have_posts()){
    the_post();
    
    ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php
    the_content();
    echo"<hr>";
   };

   get_footer();
?>