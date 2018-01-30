<?php

$person = [
  'age' => 30,
  'hair' => 'black',
  'career' => 'web developer'
];

$person['name'] = 'Jason';

unset($person['age']);

require "index.view.php";