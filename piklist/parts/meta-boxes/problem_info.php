<?php

/*
Title: Medor Problemy
Post type: problems
Context: side
Order: 1
*/

piklist('field', array(
    'type' => 'file'
    ,'field' => 'problem_thumbnail'
  
    ,'label' => 'Załaduj miniaturkę posta'
    ,'description' => 'Obrazek w rozmiarach 540px x 540px'
    ,'options' => array(
      'modal_title' => 'Add File(s)'
      ,'preview_size' => 'small'
      ,'button' => 'Add'
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
    )
  ));


piklist('field', array(
    'type' => 'file'
    ,'field' => 'problem_image'
  
    ,'label' => 'Załaduj obrazek'
    ,'description' => 'Miejsce na skan/zdjęcie dokumentu'
    ,'options' => array(
      'modal_title' => 'Add File(s)'
      ,'preview_size' => 'small'
      ,'button' => 'Add'
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
    )
  ));
