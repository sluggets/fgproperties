<?php // cambridge-1-descriptions.php
      // builds an Listing object for each unit at this property
  $address = '308 E Court St, Cambridge, IL 61238';
  $cords = [41.30125 , -90.18899];

  $cambridge1_1 = new Listing;
  $cambridge1_1->add_item($address, '2', '1', 'Basement', '1', 'img/cambridge-1/unit-1/', $cords);
  $cambridge1_1->description = 'Two bedroom, one bath. Basement unit. Includes water/sewer, electric, gas, and use of common clothes washer/dryer. Pets welcome, but additional.';

  $cambridge1_2 = new Listing;
  $cambridge1_2->add_item($address, '2', '1', 0, '2', 'img/cambridge-1/unit-2/', $cords);
  $cambridge1_2->description = 'Two bedroom, one bath. Main floor unit. Includes water/sewer. Electric and gas extra. Icludes use of common clothes washer/dryer. Pets welcome, but additional.';



  $cambridge1_3 = new Listing;
  $cambridge1_3->add_item($address, '2', '1', 0, '3', 'img/cambridge-1/unit-3/', $cords);
  $cambridge1_3->description = 'Two bedroom, one bath on second floor. Includes water/sewer. Electric and gas extra. Includes use of common clothes washer/dryer. Pets welcome but additional.';

  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$cambridge1_1, $cambridge1_2, $cambridge1_3];
?>
