<?php

/*
Title: Medor Pies - Podastawowe dane
Post Type: dogs
Order: 1
*/

piklist('field', array(
    'type' => 'group'
    ,'field' => 'dogs_info' // removing this parameter saves all fields as separate meta
    ,'label' => __('Informacje o psie')
    ,'list' => false
    ,'description' => __('Wpisz podstawowe dane psa.')
    ,'fields' => array(
        
      array(
        'type' => 'text'
        ,'field' => 'race'
        ,'label' => __('Pies w typie')
        ,'columns' => 4
        ,'attributes' => array(
          'placeholder' => 'Wpisz typ psa, np. jamnik'
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
        ,'label' => __('Rozmiar psiaka')
        ,'columns' => 4
        ,'choices' => array(
            'first' => 'Mikropies',
            'second' => 'Mały',
            'third' => 'Średni',
            'fourth' => 'Duży',
            'fifth' => 'Bardzo duży'
          
        )
      )
      ,array(
        'type' => 'text'
        ,'field' => 'age'
        ,'label' => __('Wiek psiaka')
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