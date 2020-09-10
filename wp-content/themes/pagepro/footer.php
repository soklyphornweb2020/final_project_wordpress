<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<header>
</header>
<body>
        <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase text-center">Our partner </h5>
        <img src="data:image/png;base64,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" alt="" width="110" height="90">
        <img src="https://i0.wp.com/www.respectability.org/wp-content/uploads/2017/10/Microsoft-logo.jpg?ssl=1" alt="" width="110" height="90">
        <img src="https://www.prudential.com.kh/export/sites/prudential-kh/.galleries/Prudential_Logo.jpg" alt="" width="110" height="90">
        </p>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-center">menu<br><br>
        <?php wp_nav_menu();?>
        </h5>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-center">Contact Us</h5>
        <div class="list-socail text-center">
				<i class="fa fa-facebook"></i></a>
				<i class="fa fa-youtube"></i></a>
				<i class="fa fa-instagram"></i></a>
            <strong><p>ទំនាក់ទំន: 023 228 000</p></strong>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© Copyright
    <h5>Sokly-Phorn</h5>
  </div>
</footer>
</body>
</html>