<section class="container-fluid hero-wrap d-flex justify-content-center pb-4 pt-4 m-0">
    <div class="container hero-box p-0 d-flex flex-column justify-content-center align-items-cente">
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


<section>
    <!-- Carousel wrapper -->
<div id="carouselExample" class="carousel slide text-center" data-bs-ride="true" data-bs-theme="dark">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
        style="width: 150px;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3">Maria Kate</h5>
          <p>Photographer</p>
          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
            doloremque.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
        style="width: 150px;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3">John Doe</h5>
          <p>Web Developer</p>
          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
    <div class="carousel-item">
      <img class="rounded-circle shadow-1-strong mb-4"
        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px;" />
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h5 class="mb-3">Anna Deynah</h5>
          <p>UX Designer</p>
          <p class="text-muted">
            <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
            nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
            fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
            doloremque.
          </p>
        </div>
      </div>
      <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="fas fa-star fa-sm"></i></li>
        <li><i class="far fa-star fa-sm"></i></li>
      </ul>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
</section>
<!-- Service Section start -->
    <div>
<!-- Var dump test to see if ACF fields are populated
//var_dump($values); -->


<?php if( have_rows('auto_service_card') ): ?>
 
 <ul>
 <?php while( have_rows('auto_service_card') ): the_row(); ?>
    <div><?php 
    $image = the_sub_field('service_icon_image');
    $size = 'custom-thumbnail'; 
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );}?>
    </div>
 <li>sub_field_1 = <?php the_sub_field('service_name_title'); ?>, sub_field_2 = <?php the_sub_field('service_description'); ?>, etc</li>
 <?php endwhile; ?>
</ul>
<?php endif; ?>


</div>

