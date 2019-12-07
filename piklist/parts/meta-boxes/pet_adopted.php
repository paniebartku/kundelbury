<?php

/*
Title:
Post Type: dogs, cats
Context: side
Order:1
*/

piklist('field', array(
  'type' => 'checkbox',
  'field' => 'pet_public',
  'label' => 'Zaznacz jeśli zwierzak został adoptowany',
  'value' => '0',
  'attributes' => array(
     'class' => 'text'
   ),
  'choices' => array(
    '1' => 'Hurra!'
  )
));

piklist('field', array(
  'type' => 'checkbox',
  'field' => 'rainbow_public',
  'label' => 'Zaznacz jeśli zwierzak poszedł za tęczowy most',
  'value' => '0',
  'attributes' => array(
     'class' => 'text'
   ),
  'choices' => array(
    '1' => ':('
  )
));
