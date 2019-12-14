<?php

/*
Title: Kundel ludzie - Podstawowe dane
Post Type: people
Order: 1
*/

piklist('field', array(
    'type' => 'group'
    ,'field' => 'people_info'
    ,'label' => __('Informacje o osobie')
    ,'list' => false
    ,'description' => __('Wpisz podstawowe dane osoby.')
    ,'fields' => array(
        
      array(
        'type' => 'text'
        ,'field' => 'job'
        ,'label' => __('Stanowisko')
        ,'columns' => 4
        ,'attributes' => array(
          'placeholder' => 'np. prezes, wiceprezes, webdev'
        )
      )
    )
  ));