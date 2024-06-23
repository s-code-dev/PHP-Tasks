<?php

// 3

$data = [
    'question' => ['почему', 'как', 'зачем', 'столько'],
    'animals' => [
        'birds' => [
            [
                'name' => 'грачи',
            ],
            [
                'name' => 'воробьи',
            ],
        ],
        'others' => [
            [
                ['name' => 'кошки'],
                ['name' => 'рыбы'],
                ['name' => 'собаки'],
            ],
        ],
    ],
    'parts' => [
        'hands' => 'рук',
        'feathers' => 'перьев',
        'eyes' => 'глаз',
    ],
];

// Просто выведите строку: "почему грачи не кошки и зачем им столько перьев", используя данные из этого массива $data


// echo $data['question'][0].' '.$data['animals']['birds'][0]['name'].' не '.$data['animals']['others'][0][0]['name'].' и '.$data['question'][2].' им '.$data['question'][3].'  '.$data['parts']['feathers'];

echo str_word_count('ascascasc ascascas ascascsa ascasdc');