<?php

$fieldGroup =[
  acf_group([
    'name' => 'slide',
    'label' => 'Slider Quotes',
    'sub_fields' => [

      acf_repeater([
        'name' => 'quotes',
        'label' => 'Quotes',
        'sub_fields' => [
          acf_textarea([
            'name' => 'quote',
            'label' => 'Quote',
            'instructions' => 'Here you fill in text for the quote',
            'required' => true,
          ]),
          acf_text([
            'name' => 'author',
            'label' => 'Author',
            'instructions' => 'Here you fill in the author of the quote',
            'required' => true,
          ]),
          acf_text([
            'name' => 'institution',
            'label' => 'Club, Institution or Company',
            'instructions' => 'Here you can enter the club, institution or company of the author',
            'required' => false,
          ]),
        ]
      ]),
    ],
  ]),
  acf_group([
    'name' => 'aboutFields',
    'label' => 'About Fields',
    'sub_fields' => [
      acf_repeater([
        'name' => 'field',
        'label' => 'Field',
        'sub_fields' => [
          acf_text([
            'name' => 'title',
            'label' => 'Title',
            'instructions' => 'Here you fill in the title for your about field',
            'required' => true,
          ]),
          acf_textarea([
            'name' => 'content',
            'label' => 'Content',
            'instructions' => 'Here you fill in the content for your about field',
            'required' => true,
          ]),
          acf_image([
            'name' => 'icon',
            'label' => 'Icon',
            'instructions' => 'Here you choose the icon for the about field',
            'required' => true,
            'return_format' => 'array',
          ]),
        ]
      ]),
    ],
  ])
];

$location = [[acf_location('page_template', 'templates/home.php')]];

acf_field_group([
  'title' => 'home',
  'fields' => $fieldGroup,
  'style' => 'seamless',
  'location' => $location,
  'hide_on_screen' => [0 => 'the_content']
]);
