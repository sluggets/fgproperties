<?php // annawan-1-descriptions.php 
      // builds an Listing object for each unit at this property
  $address = '203 N State St, Annawan, IL 61234';
  $cords = [41.39962, -89.90909];
  $annawan1_1 = new Listing;
  $annawan1_1->add_item($address, '1', '1', 'Efficiency', '1', 'img/annawan-1/unit-1/', $cords);

  $annawan1_1->description = 'One bedroom, one bath efficiency unit in quiet, family friendly neighborhood within walking distance to park. Garage available extra, plus utilities, pets welcome but extra.'; 

  $annawan1_2 = new Listing;
  $annawan1_2->add_item($address, '2', '1', 0, '2', 'img/annawan-1/unit-2/', $cords);
  $annawan1_2->description = 'Two bedroom, one bath, with central A/C. Quiet family friendly neighborhood within walking distance to park. Clothes washer and dryer. Garage available extra. Utilities extra. Pets welcome but extra.';

  $annawan1_3 = new Listing;
  $annawan1_3->add_item($address, '2', '1', 0, '3', 'img/annawan-1/unit-3/', $cords);
  $annawan1_3->description = 'Two bedroom, one bath, with central A/C. Quiet family friendly neighborhood within walking distance to park. Clothes washer and dryer. Garage available extra. Utilities extra. Pets welcome but extra.';

  $annawan1_4 = new Listing;
  $annawan1_4->add_item($address, '1', '1', 'Efficiency', '4', 'img/annawan-1/unit-4/', $cords);
  $annawan1_4->description = 'One bedroom, one bath efficiency unit in quiet, family friendly neighborhood within walking distance to park. Garage available extra, plus utilities, pets welcome but extra.';
 
  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$annawan1_1, $annawan1_2, $annawan1_3, $annawan1_4];


