<section class="container-fluid hero-wrap d-flex justify-content-center pb-4 pt-4 m-0">
    <div class="container hero-box p-0 d-flex flex-column justify-content-center align-items-cente">
        <h1 class="mb-4">Need your car <br> serviced anywhere <br> in Huddersfield?</h1>
        <h2>At Tetlow Auto's, we bring the garage to your doorstep <br class="d-none d-md-block"> anywhere in West Yorkshire.</h2>
      
    </div>
</section>
<section class="container-fluid service-section pt-5 pb-4">
    <div class="container text-center p-0">
        <h2>Services</h2>
        <p>We provide a wide range of automotive service</p>
    
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <div>image</div>
                        <div><h3>Oil Change</h3></div> 
                        <div><p>Best oil change in town</p></div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border border-0 shadow-sm  ">
                    <div class="card-body d-flex flex-column  align-items-start">
                        <div>image</div>
                        <div><h3>Oil Change</h3></div> 
                        <div><p>Best oil change in town</p></div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <div>image</div>
                        <div><h3>Oil Change</h3></div> 
                        <div><p>Best oil change in town</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

    <div>
<!-- Var dump test to see if ACF fields are populated
//var_dump($values); -->


<?php if( have_rows('auto_service_card') ): ?>
 
 <ul>
 <?php while( have_rows('auto_service_card') ): the_row(); ?>
    <div><?php 
    $image = get_field('service_icon_image');
    $size = 'custom-thumbnail'; 
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );}?>
    </div>
 <li>sub_field_1 = <?php the_sub_field('service_name_title'); ?>, sub_field_2 = <?php the_sub_field('service_description'); ?>, etc</li>
 <?php endwhile; ?>
</ul>
<?php endif; ?>


</div>

