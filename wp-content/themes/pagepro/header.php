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
<img src="https://www.passerellesnumeriques.org/wp-content/uploads/2016/03/pn-logo.png" alt="" style="width:150px; hight:150px">
    <h2 class = "ml-5"> 
        <?php bloginfo('name');?>
    </h2>
    <span class="ml-5"><?php bloginfo('description');?></span><br>
    <div class="menu-link">
        <?php wp_nav_menu();?>
    </div>
</header>
    <div class= "search">
        <form action = "<?php esc_url(home_url('/'));?>" method="post">
            <div class = "form-group">
                <input type= "text" claas ="input" placeholder ="Search...." name="s">
                <button type= "submit" class = "btn btn-primary mb-1">Search</button>
            </div>
            
        </form>
    </div>
<body>
</body>
</html>