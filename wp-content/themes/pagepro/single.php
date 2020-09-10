<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<header>
   <?php get_header();?>
</header>
<body>
    <div class="container">
        <div class="row">
    <div class="column left">
            <?php if(have_posts()): ?>
            <?php while(have_posts()):  ?>
            <?php the_post()?><br>
            <div class="title mt-5">
                <h3><a href="<?php the_permalink() ?>"><h3><?php the_title();?></h3></a></h3>
            </div>
            <h5>
               Writen By:
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">

                    <?php  the_author()?>
                    </a> Date: <?php the_time('F j, Y');?> 
                <?php the_tags()?>
             category  ____        <?php 
                $caters = get_the_category();
                $output = "";
                if($caters){
                    foreach($caters as $cater) {
                        $output = '<a href="'.get_category_link($cater->item_id).'">'.$cater->cat_name.'</a>';
                    }
                }
                echo $output;
                ?> 
            </h5 >
            <div class="row">
               
                <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail();?><br>
            <?php endif ?>
          
         <?php the_content();?>
            <a class="btn btn-outline-info" href="<?php the_permalink()?>">More Detail>></a>
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
        <div class="comment">
            <?php comments_template();?>
        </div>
    </div>
<?php get_footer();?>
</body>
</html>