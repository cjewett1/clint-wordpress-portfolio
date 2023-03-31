<?php
/**
 * Template part for creating the project which display on the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clinton-gorda-theme
 */

?>

<!-- What goes inside the loop is up to us. Use markup around the content -->
<div class="project-flex-item">
    
<?php
  $image = get_field('project_image');
?>
<?php if( !empty( $image ) ): ?>
  <a href="<?php the_permalink(); ?> "><img src="<?php echo esc_url($image['sizes']['project-size']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="project-img"></a>
<?php endif ?>
    <h4><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
</div>p
