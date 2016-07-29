<?php // leclaire-1-descriptions.php
      // builds an Listing object for each unit at this property
  $leclaire1_1 = new Listing;
  $leclaire1_1->add_item('1478 Kaylann Dr, LeClaire, IA 52753', '3-4', '1&#189', 0, 0, 'img/leclaire-1/', [41.59334, -90.36171]);
  $leclaire1_1->description = 'Three to four bedroom, 1 &#189 bath, single family home with detached garage and washer/dryer hookup. Central A/C in a family friendly LeClaire neighborhood. Utilities extra. Pets welcom but additional.';

  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$leclaire1_1];

?>
