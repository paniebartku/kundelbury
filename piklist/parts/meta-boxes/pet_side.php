<?php

/*
Title: Główny obrazek zwierzaka
Post Type: dogs, cats
Context: side
Order: 2
*/


piklist('field', array(
    'type' => 'file'
    ,'field' => 'pet_image'
    ,'scope' => 'post_meta'
    ,'label' => 'Dodaj obrazek zwierzaka'
    ,'description' => 'Rozmiar 540px x 540px'
    ,'options' => array(
      'modal_title' => 'Add File(s)'
      ,'preview_size' => 'small'
      ,'button' => 'Add'
      ,'multiple' => false // must be boolean, not string
      )
      ,'validate' => array(
        array(
          'type' => 'limit'
          ,'options' => array(
            'min' => 0
            ,'max' => 1
          )
          ,'message' => 'Przykro mi, ale można dodać tylko jedno zdjęcie w danej sekcji. Jedno "dodaj" to jedno zdjęcie :)'
        )
      )
    ));