<?php
  $address = '203 N State St, Annawan, IL 61234';
  $annawan1_1 = new Listing;
  $annawan1_1->add_item($address, '1', '1', 'Efficiency', '1', 'img/annawan-1/unit-1');

  $annawan1_1->description = 'This is the description for Apt. #1 in Annawan. 
        It has one bedroom, and one bath. It is an efficiency.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Integer ultricies luctus leo in tempus.
        Phasellus finibus eu felis luctus molestie.
        Nulla venenatis ante placerat ligula vestibulum vehicula.
        Suspendisse vel lorem quis tortor elementum pulvinar.';

  $annawan1_2 = new Listing;
  $annawan1_2->add_item($address, '2', '1', 0, '2', 'img/annawan-1/unit-2');
  $annawan1_2->description = 'This is the description for Apt. #2 in Annawan.
    It has two bedrooms and one bath. 
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';

  $annawan1_3 = new Listing;
  $annawan1_3->add_item($address, '2', '1', 0, '3', 'img/annawan-1/unit-3');
  $annawan1_3->description = 'This is the description for Apt. #3 in Annawan.
    It has two bedrooms and one bath.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';

  $annawan1_4 = new Listing;
  $annawan1_4->add_item($address, '1', '1', 'Efficiency', '4', 'img/annawan-1/unit-4');
  $annawan1_4->description = 'This is the description for Apt. #4 in Annawan.
    It has one bedroom and one bath.     
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer ultricies luctus leo in tempus.
    Phasellus finibus eu felis luctus molestie.
    Nulla venenatis ante placerat ligula vestibulum vehicula.
    Suspendisse vel lorem quis tortor elementum pulvinar.';
 
  $listing_array = [$annawan1_1, $annawan1_2, $annawan1_3, $annawan1_4];


