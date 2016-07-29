<?php // moline-1-descriptions.php
      // builds an Listing object for each unit at this property
  $address = '2824 44th St, Moline, IL 61265';
  $cords = [41.48430, -90.47620];

  $moline1_1 = new Listing;
  $moline1_1->add_item($address, '1-2', '1', 0, '1', 'img/moline-1/unit-1/', $cords);
  $moline1_1->description = 'One to two bedroom, one bath in family friendly neighborhood with spacious wooded yard. Plus utilities, pets welcome but additional.';

  $moline1_2 = new Listing;
  $moline1_2->add_item($address, '1-2', '1', 0, '2', 'img/moline-1/unit-2/', $cords);
  $moline1_2->description = 'One to two bedroom, one bath in family friendly neighborhood with spacious wooded yard. Plus utilities, pets welcome but additional.';

  $moline1_3 = new Listing;
  $moline1_3->add_item($address, '1-2', '1', 0, '3', 'img/moline-1/unit-3/', $cords);
  $moline1_3->description = 'One to two bedroom, one bath in family friendly neighborhood with spacious wooded yard. Plus utilities, pets welcome but additional.';

  $moline1_4 = new Listing;
  $moline1_4->add_item($address, '1-2', '1', 0, '4', 'img/moline-1/unit-4/', $cords);
  $moline1_4->description = 'One to two bedroom, one bath in family friendly neighborhood with spacious wooded yard. Clothes washer/dryer included. Plus utilities, pets welcome but additional.';

  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$moline1_1, $moline1_2, $moline1_3, $moline1_4];

?>
