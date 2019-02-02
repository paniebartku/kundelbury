<?php

/*
Title: Medor Aktualności
Post Type: post
Context: side
*/

piklist('field', array(
    'type' => 'file'
    ,'field' => 'post_image'
    ,'scope' => 'post_meta'
    ,'label' => 'Obrazek postu'
    ,'options' => array(
      'modal_title' => 'Add File(s)'
      ,'preview_size' => 'small'
      ,'button' => 'Add'
    )
    ,'attributes' => array(
        'wrapper_class' => 'post_content'
        ,'style' => 'width: 100%'
        ,'contex' => 'side'
      )
  ));