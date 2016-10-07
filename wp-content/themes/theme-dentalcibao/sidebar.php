
<!--CONSERVAR, ESTO CARGA LOS WIDGETS -->
<ul>

<?php
  /**
  * only shown if widget sidebar not enabled
  */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :

    wp_list_bookmarks('title_after=&title_before=');
	  wp_list_categories('title_li=' . __('Categories:'));
    ?>
<?php endif; ?>

</ul>