<?php
  $address = '555 S. Need Street, Cambridge, IL 61238';

  $cambridge1_1 = new Listing;
  $cambridge1_1->add_item($address, '2', '2', 'Basement', '1', 'img/cambridge-1/unit-1/');
  $cambridge1_1->description = 'This is the description for Apt.#1 in Cambridge.    It has two bedrooms and one bath. It is a basement apartment.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';

  $cambridge1_2 = new Listing;
  $cambridge1_2->add_item($address, '3', '1', 0, '2', 'img/cambridge-1/unit-2/');
  $cambridge1_2->description = 'This is the description for Apt.#2 in Cambridge.    It has three bedrooms and one bath. 
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';

  $cambridge1_3 = new Listing;
  $cambridge1_3->add_item($address, '2', '1', 0, '3', 'img/cambridge-1/unit-3/');
  $cambridge1_3->description = 'This is the description for Apt.#3 in Cambridge.    It has two bedrooms and one bath. 
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';

  $listing_array = [$cambridge1_1, $cambridge1_2, $cambridge1_3];
?>
