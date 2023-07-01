<?php

dataset('send data', [
    'empty'             => [[]], 
    'one var'           => [['foo' => 'bar']],
    'two vars'          => [['foo' => 'bar', 'key' => 'hello Adapterman']],
    'indexed-array'     => [['indexed-array' => ['this', 'is', 'an', 'array']]],
    'associative-array' => [['associative-array' => [
        'foo'   => 'bar',
        'hello' => 'Adapterman', 
        ]
    ]],
    //'multidimensional-array' => [[]],
    'all mixed' => [[
            'foo' => 'bar',
            'key' => 'Hello Adapterman',
            'indexed-array' => ['this', 'is', 'an', 'array'],
            'associative-array' => [
                'foo' => 'bar',
                'hello' => 'Adapterman', 
            ],
        ]],
        
       // with headers ...
]);