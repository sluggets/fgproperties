<?php // geneseo-1-descriptions.php
      // builds an Listing object for each unit at this property
  $geneseo2_1 = new Listing;
  $geneseo2_1->add_item('823 S Spring St, Geneseo, IL 61254', '3', '2', 0, 0, '/img/geneseo-2/', [41.44266, -90.15235]);
  $geneseo2_1->description = 'Three bedroom, two bath single family home with detached garage and washer/dryer hookup. Central A/C in family friendly Geneseo neighborhood. Utilities extra. Pets welcome but additional. Large &#189 acre fenced yard. Full basement.';

  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$geneseo2_1];
?>
