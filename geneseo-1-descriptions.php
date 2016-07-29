<?php // geneseo-1-descriptions.php
      // builds an Listing object for each unit at this property
  $cords = [41.44559, -90.15245];

  $geneseo1_1 = new Listing;
  $geneseo1_1->add_item('612 S Spring St, Geneseo, IL 61254', '2', '1', 0, '612', 'img/geneseo-1/unit-1/', $cords);
  $geneseo1_1->description = 'Two bedroom, one bath with detached garage stall in family friendly Geneseo neighborhood. Basement includes lots of storage and shared clothes washer/dryer. Utilities extra. Pets welcome but additional.';

  $geneseo1_2 = new Listing;
  $geneseo1_2->add_item('614 S Spring St, Geneseo, IL 61254', '2', '1', 0, '614', 'img/geneseo-1/unit-2/', $cords);
  $geneseo1_2->description = 'Two bedroom, one bath with detached garage stall in family friendly Geneseo neighborhood. Basement includes lots of storage and shared clothes washer/dryer. Utilities extra. Pets welcome but additional.';

  $geneseo1_3 = new Listing;
  $geneseo1_3->add_item('616 S Spring St, Geneseo, IL 61254', '3', '1', 0, '616', 'img/geneseo-1/unit-3/', $cords);
  $geneseo1_3->description = 'Three bedroom, one bath with detached garage stall in family friendly Geneseo neighborhood. Basement includes lots of storage and washer/dryer hookups. Utilities extra. Pets welcome, but additional.';

  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$geneseo1_1, $geneseo1_2, $geneseo1_3];
?>
