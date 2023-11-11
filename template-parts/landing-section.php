
<div>
    <h2>Services</h2></div>
<div>
<p><?php the_field('test_field'); ?></p>
<?php
$values = get_field('auto_service_card');
if($values)
{
    echo '<ul>';

    foreach($values as $value)
    {
        echo '<li>' . $value . '</li>';
    }

    echo '</ul>';
}

// always good to see exactly what you are working with
var_dump($values);

?>
<?php if( have_rows('auto_service_card') ): ?>
 
 <ul>

 <?php while( have_rows('auto_service_card') ): the_row(); ?>

     <li>sub_field_1 = <?php the_sub_field('service_name_title'); ?>, sub_field_2 = <?php the_sub_field('service_description'); ?>, etc</li>
     
     <?php 
     
     
     // do something with $sub_field_3
     
     ?>
     
 <?php endwhile; ?>

 </ul>

<?php endif; ?>


</div>

