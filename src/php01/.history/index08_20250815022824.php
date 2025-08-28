<?php
$people = (
  [
    'Taro' => 25, 'men',
  ],
  [
    'Jiro'  => 20, 'men',
  ],
  [
    'Saburo' => 16, 'women',
  ]
);

foreach [$people as $name => $age, $gender] {
  print ($name . "(" . $age . $gender . ")" . '<br />');
};
