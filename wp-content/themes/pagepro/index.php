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
    <div class="column left col-sm-9 col-md-9 col-lg-9">
    
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
                          if($caters){
                            $cate="";
                            foreach($caters as $cater){
                              $cate = '<a class="cat-link" href="'.get_category_link($cater->term_id).'">'.$cater->cat_name.'</a>';
                            }
                            echo $cate;
                          }
                ?> 
            </h5 >
           
         <p><?php the_excerpt();?></p>
            <a class="btn btn-outline-info" href="<?php the_permalink()?>">More Detail>></a>
            <div class="row">
                <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail();?><br>
            <?php endif ?>
            </div>
        <?php endwhile ?>
    <?php endif ?>
        </div>
            <div class ="column right col-sm-3 col-md-3 col-lg-3">
                <?php 
    if(is_active_sidebar('sidebar')):
    ?>
     <?php dynamic_sidebar('sidebar');?>
    <?php  else: echo "the post not found"; endif; ?>
           
     </div>
        </div>
    </div>
    
<?php get_footer();?>

</body>
</html>