<section class="container-fluid hero-wrap d-flex justify-content-center py-4  m-0">
    <div class="container hero-box my-4 d-flex flex-column justify-content-center align-items-cente">
        <h1 class="mb-4">Need your car <br> serviced anywhere <br> in Huddersfield?</h1>
        <h2>At Tetlow Auto's, we bring the garage to your doorstep <br class="d-none d-md-block"> anywhere in West Yorkshire.</h2>
      
    </div>
</section>
<!-- Service Section start -->
<section class="container-fluid service-section pt-5 pb-4">
    <div class="container text-center mb-5 p-0">
        <h2>Mobile Mechanic Services</h2>
        <p>Tetlow Auto's mechanics are able provide a wide range of automotive service at your door step</p>
    </div>
    <div class="container">
        <?php if( have_rows('auto_service_card') ): ?>    
        <div class="row ">
        <?php while( have_rows('auto_service_card') ): the_row(); ?>    
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card border border-0 shadow-sm h-100 py-2 px-4">
                    <div class="card-body custom-card-body d-flex flex-column align-items-start text-left">
                        <div class="mb-4 mt-3"><?php 
                            $image = get_sub_field('service_icon_image');
                            $size = 'custom-thumbnail'; 
                            if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                            }?>
                        </div>
                        <div class="car-body-header"><h3><?php the_sub_field('service_name_title');?></h3></div> 
                        <div><p class="text-left"><?php the_sub_field('service_description'); ?></p></div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?> 
        </div>
        <?php endif; ?>
    </div>

</section>

<section> <!-- ABOUT SECTION START HERE -->
  <div class="container-fluid   pb-5 pt-5 about-wrap rounded" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/mc-2.png');"> 
  <div class="container p-0 h-100 d-flex align-items-center">  
  <div class=" row">
      <div class="col-12 col-md-6 z-3">
          <h2 class="text-white mb-4 display-4 "><?php the_field('about_title'); ?></h2>
          <p class="text-white" ><?php the_field('about_text_section'); ?></p>              
      </div>
      <div class="col-12 col-md-6 about-image">
          
      </div>
    </div> 
  </div>
  </div>                         
</section> <!-- ABOUT SECTION END HERE -->

<section class="testimonial pt-5">
<div class="container pb-5 pt-5">
  <div class="text-center mb-5"><h2 class="text-dark">Customer Testimonials</h2></div>
<!-- Carousel wrapper start here -->

<?php $testimonials = get_field('testimonials-field'); ?>

<?php if ( $testimonials): ?>
 <div id="carouselExample" class="carousel slide text-center carousel-size" data-bs-ride="carousel" data-bs-theme="dark">
    <div class="carousel-inner">
    <?php foreach ($testimonials as $index => $testimonial): ?>
       <div class="carousel-item px-4 <?php echo $index === 0 ? 'active' : ''; ?>">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8"> 
              <p class="text-dark"><i class="bi bi-quote pe-2 "></i>
              <em><?php echo esc_html($testimonial['testimonial_paragraph']); ?> </em>      
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote icon-flipped ms-2" viewBox="0 0 16 16">
                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
              </svg>
              </p>
        </div>
      </div>     
      <h5 class="mb-3"><?php echo esc_html($testimonial['name_of_the_review_person']); ?></h5>
       <!-- Dynamic Star Rating -->
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <?php
          /* no need for validation as all field are required then inputing testimonials */
          $star_rating = $testimonial['star_rating'];
          /* check if i less/equal to star rating num, if true, add full star, if false add empty star
          repeat 5 times */
          for ($i = 1; $i <=5; $i++){
              echo $i <=  $star_rating ? '<li><i class="bi bi-star-fill"></i></li>' : '<li><i class="bi bi-star"></i></li>';
          }
          ?>
      </ul>
    </div>
    <?php endforeach; ?>   <!-- END OF ACF TESTIMONIAL LOOP -->
    </div>

  <button class="carousel-control-prev d-none d-lg-block " type="button" data-bs-target="#carouselExample"
  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next d-none  d-lg-block " type="button" data-bs-target="#carouselExample"
  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <?php endif; ?>
</div>
<!-- Carousel wrapper end here -->
</div>
<!-- Container wrapper -->
</section>
<!-- Service Section start -->
    <div>

<!-- Var dump test to see if ACF fields are populated
//var_dump($values); -->
</div>
<section class=" pt-5 mb-5 mx-2 mx-lg-0">
  <div class="container shadow rounded call-box p-5 ">
    <div class="row">
      <div class="col-12 col-lg-7">
        <h3 class="mb-4">Reach out to Tetlow Auto's Expert Mobile Mechanics</h3>
        <h4>For prompt auto support ring on: </h4>
        <div class="highlight-number">0750 210 1046</div>
      </div>
      <div class="col image-wrap">
        <img class="img-fluid d-none d-lg-block call-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/van-placeholder.png" alt="Image of a van">
      </div>
    </div>
  </div>
</section>




