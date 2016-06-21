<?php // moline-2-descriptions.php
      // builds an Listing object for each unit at this property

  $moline2_1 = new Listing;
  $moline2_1->add_item('116 18th Ave, Moline, IL 61265', '2', '1', 0, 0, '/img/moline-2/', [41.49493, -90.53687]);
  $moline2_1->description = 'This is the description for the single family 
    home in Moline. It has two bedrooms and one bath.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';


  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$moline2_1];
?>
