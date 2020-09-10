
<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<header>
   <?php get_header();?>
   <h2 style = "list-style:none;">
<div class = "dropdown">
   <?php
global $post;
$args = array(
'title_li'=>'',
'child_of'=>$post->ID
);
wp_list_pages($args);

?>
</div>
</h2>
</header>
<body>
    <div class = "container">
        <div class="row">
    <div class="column left">
            <?php if(have_posts()): ?>
            <?php while(have_posts()):  ?>
            <?php the_post()?><br>
            <div class="title">
                <h3><a href="<?php the_permalink() ?>"><h3><?php the_title();?></h3></a></h3>
            </div>
            <h5>
               Writen By:
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">

                    <?php  the_author()?>
                    </a> Date: <?php the_time('F j, Y');?> 
            </h5 >
            <div class="row">
               
                <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail();?><br>
            <?php endif ?>
         
         <?php the_content();?>
          <br>
            </div>
        <?php endwhile ?>
    <?php endif ?>
        </div>
            <div class ="column right">
                <?php 
    if(is_active_sidebar('sidebar')):
    ?>
     <?php dynamic_sidebar('sidebar');?>
    <?php endif; ?>
     </div>

        </div>
    </div>
    
<?php get_footer();?>

</body>
</html>