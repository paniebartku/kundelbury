<?php

/*
Title:
Post Type: dogs
Context: side
Order:1
*/

piklist('field', array(
  'type' => 'checkbox',
  'field' => 'dogs_public',
  'label' => 'Zaznacz jeśli pies został adoptowany',
  'value' => '0',
  'attributes' => array(
     'class' => 'text'
   ),
  'choices' => array(
    '1' => 'Hurra!'
  )
));
