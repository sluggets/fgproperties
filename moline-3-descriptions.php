<?php // moline-3-descriptions.php
      // builds an Listing object for each unit at this property

  $moline3_1 = new Listing;
  $moline3_1->add_item('123 18th Ave, Moline, IL 61265', '3', '1', 0, 0, 'img/moline-3/', [41.49510, -90.53705]);
  $moline3_1->description = 'This is the description for the single family home
    in Moline. It has three bedrooms and one bath.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';

  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$moline3_1];
?>
