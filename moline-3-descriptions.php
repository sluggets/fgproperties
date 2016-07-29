<?php // moline-3-descriptions.php
      // builds an Listing object for each unit at this property

  $moline3_1 = new Listing;
  $moline3_1->add_item('123 18th Ave, Moline, IL 61265', '3', '1', 0, 0, 'img/moline-3/', [41.49510, -90.53705]);
  $moline3_1->description = 'Three bedroom, one bath single family home with basement in quiet, family friendly neighborhood. Detached garage, utilities extra, pets welcome but extra.';

  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$moline3_1];
?>
