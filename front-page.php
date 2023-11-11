<!-- Fetch header - found in header.php -->
<?php 
    get_header();
?>
<body>
    <article class="container px-3 py-2">
       <!--  <div><h2><?php the_title(); ?></h2>  
        </div>-->
        <!-- The wordpress loop to fetch page content from the page editor -->
        <!-- Look up other "the" commands to fetch author, post date, tags etc-->
        <!-- the_content() function outputs the default wordpress blog content-->
        <?php
            if (have_posts()){
                while (have_posts()){
                    the_post();
                    get_template_part('template-parts/landing','section');
                }
            }
        ?>
        <div>
       
 
   
       

    </article>
  <h2><?php echo esc_html( get_field('test_field') ); ?></h2>
  <p><?php the_field('test_field'); ?></p>
<!-- Fetch footer - found in footer.php -->    
<?php 
    get_footer();
?>