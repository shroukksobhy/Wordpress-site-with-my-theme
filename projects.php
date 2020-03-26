<?php
/*
Template Name: Projects
*/
?>
<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shrouk's Task</title>
  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="style.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>


  <?php get_header(); ?>

  <div class="row">
    <div class="col-sm-8 blog-main">


      <?php if (have_posts()) : while (have_posts()) : the_post();

         // get_template_part('content', get_post_format());
            wp_list_categories();

        endwhile;
      endif;
      ?>

      <!-- contents of the loop -->


    </div><!-- /.blog-main -->
    <?php get_sidebar() ?>
      

  </div><!-- /.row -->
  <?php get_footer(); ?>
  </div><!-- /.container -->





  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <?php wp_footer(); ?>
</body>

</html>