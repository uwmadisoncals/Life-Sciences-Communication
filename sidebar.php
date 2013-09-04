<?php
/**
 * The Sidebar containing the main widget area.
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
		
			<?php if ( !is_home() ) { get_template_part('nav_menu', 'sidebar'); } ?>
		
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>

<?php if ( 'content' == $current_layout ) : if ( !is_home() ) {
    // This is not the homepage
 ?>
	
	<?php  get_template_part('nav_menu', 'sidebar');  ?>
	
	
	
	<div id="content_widget_sidebar" class="widget-area whiteContainer" role="complementary">
			
			
						<?
$backup = $post;
$tags = wp_get_post_tags($post->ID);
$tagIDs = array();
if ($tags) {
    		$tagcount = count($tags);
   		for ($i = 0; $i < $tagcount; $i++)
   			{
     			$tagIDs[$i] = $tags[$i]->term_id;
   			}

 $args=array( 'tag__in' => $tagIDs,'post__not_in' => array($post->ID), 'showposts'=>5, 'caller_get_posts'=>1);
 $my_query = new WP_Query($args);
 
 if( $my_query->have_posts() )
   					{
   						echo '<h3>Related Posts</h3>';
   						echo '<ul>';
    					while ($my_query->have_posts()) : $my_query->the_post(); ?>
    					<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
  					<?   endwhile;
  						echo '</ul>';
  					}
  			}
else { ?>
<h3>Recent Posts</h3>
<ul>
<?php
	$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"] .'</a></li> ';
	}
?>
</ul>
 <?php }

 $post = $backup;
  wp_reset_query();
 ?>
			
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				
				
				
				<!--<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>-->

			<?php endif; // end sidebar widget area ?>

		</div><!-- #secondary .widget-area -->

<?php } endif; ?>