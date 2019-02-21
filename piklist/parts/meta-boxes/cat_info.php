<?php

/*
Title: Medor Kot - Podastawowe dane
Post Type: cats
Order: 1
*/

piklist('field', array(
    'type' => 'group'
    ,'field' => 'cat_info' // removing this parameter saves all fields as separate meta
    ,'label' => __('Informacje o kocie')
    ,'list' => false
    ,'description' => __('Wpisz podstawowe dane kota.')
    ,'fields' => array(
        
      array(
        'type' => 'text'
        ,'field' => 'race'
        ,'label' => __('Kot w typie')
        ,'columns' => 4
        ,'attributes' => array(
          'placeholder' => 'Wpisz typ kota, np. dachowiec'
        )
      )
      ,array(
        'type' => 'select'
        ,'field' => 'sex'
        ,'label' => __('Płeć')
        ,'columns' => 4
        ,'choices' => array(
            'first' => 'Samiec',
            'second' => 'Samica',
      
          
        )
      )
   
      ,array(
        'type' => 'select'
        ,'field' => 'size'
        ,'label' => __('Rozmiar kota')
        ,'columns' => 4
        ,'choices' => array(
            
            'first' => 'Mały',
            'second' => 'Średni',
            'third' => 'Duży',
          
        )
      )
      ,array(
        'type' => 'text'
        ,'field' => 'age'
        ,'label' => __('Wiek kota')
        ,'columns' => 5
        ,'attributes' => array(
          'placeholder' =>'Wpisz pełny wiek, np. "3 lata" lub "2 miesiące"'
        )
      )
      ,array(
        'type' => 'text'
        ,'field' => 'guardian'
        ,'label' => __('Wirtualny opiekun')
        ,'columns' => 5
        ,'attributes' => array(
          'placeholder' =>'Wpisz imię i nazwisko opiekuna'
        )
      )
    )
  ));