<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package eventtheme
*/

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<?php
 $events = eo_get_events(array(
         'numberposts'=>3,
         'event_start_after'=>'today',
         'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe.
    ));

  if($events):
     echo '<ul>';
     foreach ($events as $event):
          //Check if all day, set format accordingly
          $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
          printf(
             '<li><a href="%s"> %s </a> on %s finished: %s</li>',
             get_permalink($event->ID),
             get_the_title($event->ID),
             eo_get_the_start($format, $event->ID,null,$event->occurrence_id),
             eo_get_the_end($format, $event->ID,null,$event->occurrence_id)
          );
     endforeach;
     echo '</ul>';
  endif;
 ?>


</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
