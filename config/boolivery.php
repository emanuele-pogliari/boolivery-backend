<?php

return [

    'users' => [
        [
            'name' => 'Giuseppe',
            'surname' => 'Rossi',
            'email' => 'giusepperossi@example.com',
            'password' =>  'password123',
        ],
        [
            'name' => 'Mario',
            'surname' => 'Bianchi',
            'email' => 'mariobianchi@example.com',
            'password' =>  'password456',
        ],
        [
            'name' => 'Luca',
            'surname' => 'Verdi',
            'email' => 'lucaverdi@example.com',
            'password' =>  'password789',
        ],
        [
            'name' => 'Marco',
            'surname' => 'Rossi',
            'email' => 'marcorossi@example.com',
            'password' =>  'password1011',
        ],

        [
            'name' => 'Giuseppe',
            'surname' => 'Cassone',
            'email' => 'cassone@example.com',
            'password' =>  'password123',
        ]

    ],

    'restaurants' => [
        [
            'name' => 'Ristorante da Luigi',
            'image' => 'luigi_image.jpg',
            'address' => 'Via Roma 10, Roma',
            'vat' => 'IT12345678901',
            'user_id' => 1
        ],
        [
            'name' => 'Pizzeria Bella Napoli',
            'image' => 'bella_napoli_image.jpg',
            'address' => 'Corso Italia 22, Napoli',
            'vat' => 'IT98765432109',
            'user_id' => 2
        ],
        [
            'name' => 'Trattoria Alla Vecchia',
            'image' => 'vecchia_trattoria_image.jpg',
            'address' => 'Piazza Garibaldi 15, Firenze',
            'vat' => 'IT19283746501',
            'user_id' => 3
        ],
        [
            'name' => 'Osteria Al Dente',
            'image' => 'al_dente_image.jpg',
            'address' => 'Via Milano 5, Milano',
            'vat' => 'IT56473829100',
            'user_id' => 4
        ],
        [
            'name' => 'Ristorante Il Girasole',
            'image' => 'girasole_image.jpg',
            'address' => 'Via Torino 18, Torino',
            'vat' => 'IT67584930210',
            'user_id' => 5
        ],
    ],

    'types' => [
        [
            'type' => 'mexican',
        ],
        [
            'type' => 'italian',
        ],
        [
            'type' => 'pizzeria',
        ],
        [
            'type' => 'chinese',
        ],
        [
            'type' => 'japanese',
        ],
        [
            'type' => 'thai',
        ],
        [
            'type' => 'indian',
        ],
        [
            'type' => 'fusion',
        ],
        [
            'type' => 'greek',
        ],
        [
            'type' => 'Steakhouse'
        ]
    ],

    'dishes' => [
        [
            "name" => "Spaghetti Carbonara",
            "image" => "immagine",
            "description" => "Spaghetti con crema di uova e pancetta.",
            "ingredients" => ["Spaghetti", "Uova", "Pancetta", "Pecorino", "Pepe"],
            "price" => 12.50,
            "visible" => true,
            "restaurant_id" => 1,

        ],
        [
            "name" => "Pizza Margherita",
            "image" => "immagine",
            "description" => "Pizza classica con pomodoro e mozzarella.",
            "ingredients" => ["Pomodoro", "Mozzarella", "Basilico", "Olio", "Sale"],
            "price" => 8.00,
            "visible" => true,
            "restaurant_id" => 1,
        ],
        [
            "name" => "Risotto ai Funghi",
            "image" => "immagine",
            "description" => "Risotto cremoso con funghi porcini.",
            "ingredients" => ["Riso", "Funghi", "Brodo", "Burro", "Parmigiano"],
            "price" => 14.00,
            "visible" => true,
            "restaurant_id" => 1,
        ],
        [
            "name" => "Lasagna",
            "image" => "immagine",
            "description" => "Strati di pasta con ragù e besciamella.",
            "ingredients" => ["Pasta", "Ragù", "Besciamella", "Parmigiano", "Mozzarella"],
            "price" => 13.00,
            "visible" => true,
            "restaurant_id" => 2,
        ],
        [
            "name" => "Insalata Caprese",
            "image" => "immagine",
            "description" => "Pomodoro e mozzarella con basilico fresco.",
            "ingredients" => ["Pomodoro", "Mozzarella", "Basilico", "Olio", "Sale"],
            "price" => 7.00,
            "visible" => true,
            "restaurant_id" => 2,
        ],
        [
            "name" => "Pollo alla Cacciatora",
            "image" => "immagine",
            "description" => "Pollo brasato con pomodoro e olive.",
            "ingredients" => ["Pollo", "Pomodoro", "Olive", "Vino", "Rosmarino"],
            "price" => 15.00,
            "visible" => true,
            "restaurant_id" => 2,
        ],
        [
            "name" => "Fettuccine Alfredo",
            "image" => "immagine",
            "description" => "Pasta con salsa cremosa al burro e parmigiano.",
            "ingredients" => ["Fettuccine", "Burro", "Parmigiano", "Panna", "Pepe"],
            "price" => 11.00,
            "visible" => true,
            "restaurant_id" => 3,
        ],
        [
            "name" => "Bruschetta al Pomodoro",
            "image" => "immagine",
            "description" => "Pane tostato con pomodoro fresco e basilico.",
            "ingredients" => ["Pane", "Pomodoro", "Basilico", "Aglio", "Olio"],
            "price" => 5.00,
            "visible" => true,
            "restaurant_id" => 3,
        ],
        [
            "name" => "Tiramisù",
            "image" => "immagine",
            "description" => "Dolce al caffè con mascarpone e savoiardi.",
            "ingredients" => ["Mascarpone", "Savoiardi", "Caffè", "Cacao", "Zucchero"],
            "price" => 6.00,
            "visible" => true,
            "restaurant_id" => 3,
        ],
        [
            "name" => "Gnocchi al Pesto",
            "image" => "immagine",
            "description" => "Gnocchi di patate con pesto fresco.",
            "ingredients" => ["Gnocchi", "Basilico", "Aglio", "Pinoli", "Parmigiano"],
            "price" => 10.50,
            "visible" => true,
            "restaurant_id" => 4,
        ],
        [
            "name" => "Tagliata di Manzo",
            "image" => "immagine",
            "description" => "Manzo alla griglia con rucola e parmigiano.",
            "ingredients" => ["Manzo", "Rucola", "Parmigiano", "Olio", "Sale"],
            "price" => 18.00,
            "visible" => true,
            "restaurant_id" => 4,
        ],
        [
            "name" => "Penne all'Arrabbiata",
            "image" => "immagine",
            "description" => "Pasta piccante con salsa di pomodoro e peperoncino.",
            "ingredients" => ["Penne", "Pomodoro", "Peperoncino", "Aglio", "Olio"],
            "price" => 9.00,
            "visible" => true,
            "restaurant_id" => 4,
        ],
        [
            "name" => "Arancini di Riso",
            "image" => "immagine",
            "description" => "Palline di riso fritte ripiene di ragù.",
            "ingredients" => ["Riso", "Ragù", "Piselli", "Formaggio", "Pangrattato"],
            "price" => 7.50,
            "visible" => true,
            "restaurant_id" => 5,
        ],
        [
            "name" => "Calamari Fritti",
            "image" => "immagine",
            "description" => "Calamari fritti serviti con limone.",
            "ingredients" => ["Calamari", "Farina", "Olio", "Limone", "Sale"],
            "price" => 12.00,
            "visible" => true,
            "restaurant_id" => 5,
        ],
        [
            "name" => "Pasta e Fagioli",
            "image" => "immagine",
            "description" => "Zuppa di pasta con fagioli e pancetta.",
            "ingredients" => ["Pasta", "Fagioli", "Pancetta", "Pomodoro", "Rosmarino"],
            "price" => 8.50,
            "visible" => true,
            "restaurant_id" => 5,
        ],
    ]
];
