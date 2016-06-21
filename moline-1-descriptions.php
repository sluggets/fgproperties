<?php // moline-1-descriptions.php
      // builds an Listing object for each unit at this property
  $address = '2824 44th St, Moline, IL 61265';
  $cords = [41.48430, -90.47620];

  $moline1_1 = new Listing;
  $moline1_1->add_item($address, '1-2', '1', 0, '1', 'img/moline-1/unit-1/', $cords);
  $moline1_1->description = 'This is the description for Apt.#1 in Moline. 
    It has one to two bedrooms and one bath.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';

  $moline1_2 = new Listing;
  $moline1_2->add_item($address, '1-2', '1', 0, '2', 'img/moline-1/unit-2/', $cords);
  $moline1_2->description = 'This is the description for Apt.#2 in Moline.
    It has one to two bedrooms and one bath.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';


  $moline1_3 = new Listing;
  $moline1_3->add_item($address, '1-2', '1', 0, '3', 'img/moline-1/unit-3/', $cords);
  $moline1_3->description = 'This is the description for Apt.#3 in Moline.
    It has one to two bedrooms and one bath.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';

  $moline1_4 = new Listing;
  $moline1_4->add_item($address, '1-2', '1', 0, '4', 'img/moline-1/unit-4/', $cords);
  $moline1_4->description = 'This is the description for Apt.#4 in Moline.
    It has one to two bedrooms and one bath.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';

  // builds array of Listing objecs to iterate over when 
  // imported into details.php
  $listing_array = [$moline1_1, $moline1_2, $moline1_3, $moline1_4];

?>
