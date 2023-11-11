<!-- Fetch header - found in header.php -->
<?php 
    get_header();
?>
<body>
    <article class="container px-3 py-2">
        <div><h2><?php the_title(); ?></h2>
        </div>
        <!-- The wordpress loop to fetch page content from the page editor -->
        <!-- Look up other "the" commands to fetch author, post date, tags etc-->
        <?php
            if (have_posts()){
                while (have_posts()){
                    the_post();
                    the_content();
                }
            }
        ?>


    </article>

<!-- Fetch footer - found in footer.php -->    
<?php 
    get_footer();
?>