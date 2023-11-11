<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Black Template">
     <title>Tetlow Auto's Mobile Mechanic</title>
    <meta name="author" content="https://dovydasbalionis.co.uk">
    <!-- Tab/fav icon should go here - CHANGE to official icon later -->
     <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/images/portfavcon-coder.svg"> 
    <!-- Global Theme CSS - find lardrock_reg_styles function in functions.php to edit -->
    <?php
    wp_head();
    ?>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <a class="navbar-brand text-light" href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tet-autos-black.png" class="header-logo" alt="Tetlow Auto's Logo">
            </a>\

            <button class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
       
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <!-- Add dynamic wordpress menu - PRIMARY - DISABLED -->
            <!-- items wrap surround the individual menu items with html
                 Need to look up how to fully replace all classes for all menu item tags - custom walkers
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items-wrap' => '<ul id="" class="navbar-nav">%3$s</ul>' 

                    )
                ); -->
           
            <ul class="navbar-nav">
                <!-- Space space out nav links but only for desktop  -->
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="">Services</a>
                </li>
                <li class="nav-item px-lg-3 ">
                    <a class="nav-link " href="/about">About us</a>
                </li> 
                <li class="nav-item px-lg-3 ">
                    <a class="nav-link" href="" >Reviews</a>
                </li>
                <li class="nav-item d-lg-none  px-lg-3 ">
                    <a class="nav-link" href="" >Call us</a>
                </li>

                <li class="d-none d-lg-block"> <a href=""><button class="btn nav-contact-lg nav-item px-2 px-lg-3 ms-lg-3" aria-label="Link to the contact me form">Call us</button> </a>
                </li>

                </ul>
            </div>
        </div> 
    </nav>
</header>