 <html <?php language_attributes(); ?>> <!--front-page.php -->
<head>
    <meta charset = "<?php bloginfo('charset');?>"> 
    <title> <?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <!-- get header or menu -->
  <header><?php get_header();?></header><br>
    
  <div  class = "container">
      <div class="jumbotron mt-5 text-center" style = "background:#29bcd6">
  <h1>Welcome To Hompage</h1>
  <p>In the Company gives you everything you need to start your website today.
Free hosting, your own domain, a world-class support team, and so much more.
</p>
  <!-- <button type="button" class="btn btn-danger">Click here</button> -->
</div>
<!--all post-->
<div class="container-front">
    <!-- get the post -->
    <div class="post-front">
      <?php if(have_posts()):?>
        <?php  while(have_posts()):?>
          <?php the_post(); ?>
           <h4> <?php the_title(); ?></h4>
            <?php the_content(); ?>
          <div class="parent-front">
            <?php 
              global $post;
              if($post->post_parent > 0): ?>
              <ul>
                <?php 
                  $args = array(
                    'title_li'=>'',
                    'child_of'=>$post->ID,
                  );
                ?>
                <?php wp_list_pages($args); ?>
              </ul>
              <div class="title-front">
                <?php the_title(); ?>
              </div>
              <div class="content-front">
                  <?php the_content(); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endwhile;?>  
      <?php endif; ?>
    </div>
         <p>You can easily turn your blog into a website, with a static homepage that people will land on every time they arrive. Combine a homepage with other static pages and some custom menus to help visitors navigate, and before you can say “Told you so!” you’ve got a website.Want to start a blogging habit or set up a business website?
Get step-by-step guidance from WordPress pros, right in your inbox. Our email-based WordPress.com courses are free to all and there are no prerequisites.</p>         
      <div class = "row">
          <div class = "col-4">
     <div class="box1">
        <?php if(is_active_sidebar('box1')) :?>
          <?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>
              <div class="box1"><br>
              <div class="text">
            <h4>Contact<h4>
          </div>
            </div>
            <div class="box">
            <p>Email:sokly.phorn@gmail.com</p>
            <p>Tell: +885 96 37 59 097</p>
            <p>Address: BP 511, Phum Tropeang Chhuk (Borey Sorla) Sangtak, Street 371, Phnom Penh</p>
            <a class="btn btn-outline-info" href="http://localhost/sokly_project/about/contact/">Contact Us</a>
          </div>
      </div>
          </div>
          <div class ="col-4">
               <div class="box2">
        <?php if(is_active_sidebar('box2')) :?>
          <?php dynamic_sidebar('box2'); ?>
        <?php endif; ?>
        <div class="box2"><br>
        <div class="text">
            <h4>Our team<h4>
            </div>
            </div>
            <div class="box">
              <p>Smartphone</p>
              <p>Sport</p>
              <p>New Technology</p>
              <p>motorcycles</p>
              <p>TeamWork</p>
              <a class="btn btn-outline-info" href="http://localhost/sokly_project/about/our-team/">Our team</a>
          </div>
      </div>
          </div>
          <div class ="col-4">
                <div class="box3">
        <?php if(is_active_sidebar('box3')) :?>
          <?php dynamic_sidebar('box3'); ?>
        <?php endif; ?>
      </div>
          </div>
      </div>
  </div>
  </div><br>
  <?php get_footer();?>
</body>
</html>