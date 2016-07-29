<?php // moline-2-descriptions.php
      // builds an Listing object for each unit at this property

  $moline2_1 = new Listing;
  $moline2_1->add_item('116 18th Ave, Moline, IL 61265', '2', '1', 0, 0, '/img/moline-2/', [41.49493, -90.53687]);
  $moline2_1->description = 'Two bedroom, one bath, single family home with basement in quiet, family friendly neighborhood, detached garage, utilities extra, pets welcom but extra.';


  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$moline2_1];
?>
