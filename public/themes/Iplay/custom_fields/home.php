<?php

$fieldGroup =[
  acf_group([
    'name' => 'carousel',
    'label' => 'Carousel',
    'sub_fields' => [

      acf_repeater([
        'name' => 'quotes',
        'label' => 'Quotes',
        'sub_fields' => [
          acf_textarea([
            'name' => 'quote',
            'label' => 'Quote',
            'instructions' => 'Idiot',
            'required' => false,
          ]),
          acf_text([
            'name' => 'author',
            'label' => 'Author',
            'instructions' => 'Idiot',
            'required' => false,
          ]),
        ]
      ]),
    ],
  ])
];

$location = [
  [
    acf_location('page_template', 'templates/home.php')
  ]
];

acf_field_group([
  'title' => 'home',
  'fields' => $fieldGroup,
  'style' => 'seamless',
  'location' => $location,
  'hide_on_screen' => [
    0 => 'the_content'
  ]
]);
