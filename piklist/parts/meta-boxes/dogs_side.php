<?php

/*
Title: Główny obrazek psa
Post Type: dogs
Context: side
Order: 2
*/


piklist('field', array(
    'type' => 'file'
    ,'field' => 'dogs_image'
    ,'scope' => 'post_meta'
    ,'label' => 'Dodaj obrazek psa'
    ,'description' => 'Rozmiar 540px x 540px'
    ,'options' => array(
      'modal_title' => 'Add File(s)'
      ,'preview_size' => 'small'
      ,'button' => 'Add'
    )
  ));
