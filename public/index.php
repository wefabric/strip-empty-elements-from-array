<?php

use Wefabric\StripEmptyElementsFromArray\StripEmptyElementsFromArray;

require __DIR__.'/../vendor/autoload.php';

$data = [
    'this' => 'is a string',
    'that' => '', // is an empty element
    'one' => [
        'here'=> 'is an inner array',
        'which' => '' //also contains an empty element.
    ],
    'two' => [
        'null' => null,
        'empty' => '',
        'array' => [
            'level3' => []
        ],
        'asdf' => null
    ],
    'last' => 1
];

echo '<h2>Input</h2>';
dump($data);

echo '<h2>Output</h2>';
$result = StripEmptyElementsFromArray::from($data);
dump($result);

