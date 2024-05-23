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
            'image' => 'https://livitaly-666b.kxcdn.com/wp-content/uploads/2019/10/shutterstock_1054754711.jpg',
            'address' => 'Via Roma 10, Roma',
            'vat' => 'IT12345678901',
            'user_id' => 1
        ],
        [
            'name' => 'Pizzeria Bella Napoli',
            'image' => 'https://www.mrnystyleandtravel.com/wp-content/uploads/2018/07/Den-Exterior.jpg',
            'address' => 'Corso Italia 22, Napoli',
            'vat' => 'IT98765432109',
            'user_id' => 2
        ],
        [
            'name' => 'Trattoria Alla Vecchia',
            'image' => 'https://thearchitectsdiary.com/wp-content/uploads/2018/06/Best-Restaurant-Interior-Design-In-India-3.jpg',
            'address' => 'Piazza Garibaldi 15, Firenze',
            'vat' => 'IT19283746501',
            'user_id' => 3
        ],
        [
            'name' => 'Osteria Al Dente',
            'image' => 'https://flawless.life/wp-content/uploads/2020/02/Le_migliori_pizzerie_di_Milano_PiccolaIschia.jpg',
            'address' => 'Via Milano 5, Milano',
            'vat' => 'IT56473829100',
            'user_id' => 4
        ],
        [
            'name' => 'Ristorante Il Girasole',
            'image' => 'https://mangiaebevi.us/wp-content/uploads/2020/01/DSC4594-1024x683.jpg',
            'address' => 'Via Torino 18, Torino',
            'vat' => 'IT67584930210',
            'user_id' => 5
        ],
    ],

    'types' => [
        [
            'type' => 'Mexican',
        ],
        [
            'type' => 'Italian',
        ],
        [
            'type' => 'Pizzeria',
        ],
        [
            'type' => 'Chinese',
        ],
        // [
        //     'type' => 'Japanese',
        // ],
        [
            'type' => 'Thai',
        ],
        [
            'type' => 'Indian',
        ],
        [
            'type' => 'Fusion',
        ],
        [
            'type' => 'Greek',
        ],
        [
            'type' => 'Steakhouse'
        ]
    ],

    'dishes' => [
        [
            "name" => "Spaghetti Carbonara",
            "image" => "https://www.ricettaidea.it/articoli/ricette-regionali/lazio/original_spaghetti-alla-carbonara.jpg",
            "description" => "Spaghetti con crema di uova e pancetta.",
            "ingredients" => ["Spaghetti", "Uova", "Pancetta", "Pecorino", "Pepe"],
            "price" => 12.50,
            "visible" => true,
            "restaurant_id" => 1,

        ],
        [
            "name" => "Pizza Margherita",
            "image" => "https://vitaitaliantours.com.au/wp-content/uploads/2016/03/Neapolitan-Pizza-Margherita.jpg",
            "description" => "Pizza classica con pomodoro e mozzarella.",
            "ingredients" => ["Pomodoro", "Mozzarella", "Basilico", "Olio", "Sale"],
            "price" => 8.00,
            "visible" => true,
            "restaurant_id" => 1,
        ],
        [
            "name" => "Risotto ai Funghi",
            "image" => "https://blog.giallozafferano.it/peperoncino88/wp-content/uploads/2017/10/DSC_0020.jpg",
            "description" => "Risotto cremoso con funghi porcini.",
            "ingredients" => ["Riso", "Funghi", "Brodo", "Burro", "Parmigiano"],
            "price" => 14.00,
            "visible" => true,
            "restaurant_id" => 1,
        ],
        [
            "name" => "Lasagna",
            "image" => "https://facts.net/wp-content/uploads/2023/05/Slice-of-lasagna.jpeg",
            "description" => "Strati di pasta con ragù e besciamella.",
            "ingredients" => ["Pasta", "Ragù", "Besciamella", "Parmigiano", "Mozzarella"],
            "price" => 13.00,
            "visible" => true,
            "restaurant_id" => 2,
        ],
        [
            "name" => "Insalata Caprese",
            "image" => "https://www.tasteoftravel.at/wp-content/uploads/Rezept-Caprese-Salat.jpg",
            "description" => "Pomodoro e mozzarella con basilico fresco.",
            "ingredients" => ["Pomodoro", "Mozzarella", "Basilico", "Olio", "Sale"],
            "price" => 7.00,
            "visible" => true,
            "restaurant_id" => 2,
        ],
        [
            "name" => "Pollo alla Cacciatora",
            "image" => "https://4.bp.blogspot.com/-sLQkRHQnI0g/V5y0Lj1C6QI/AAAAAAAAIL0/B1fHSzXrZaMAgZTOwgzFpNU0gAhVVT_RQCLcB/s640/pollo_padella.jpg",
            "description" => "Pollo brasato con pomodoro e olive.",
            "ingredients" => ["Pollo", "Pomodoro", "Olive", "Vino", "Rosmarino"],
            "price" => 15.00,
            "visible" => true,
            "restaurant_id" => 2,
        ],
        [
            "name" => "Fettuccine Alfredo",
            "image" => "https://www.thechunkychef.com/wp-content/uploads/2016/02/Roasted-Garlic-Cream-Sauce-6-1.jpg",
            "description" => "Pasta con salsa cremosa al burro e parmigiano.",
            "ingredients" => ["Fettuccine", "Burro", "Parmigiano", "Panna", "Pepe"],
            "price" => 11.00,
            "visible" => true,
            "restaurant_id" => 3,
        ],
        [
            "name" => "Bruschetta al Pomodoro",
            "image" => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-bruschetta-pomodoro/_jcr_content/header-par/image_single.img.jpg/1596625322419.jpg",
            "description" => "Pane tostato con pomodoro fresco e basilico.",
            "ingredients" => ["Pane", "Pomodoro", "Basilico", "Aglio", "Olio"],
            "price" => 5.00,
            "visible" => true,
            "restaurant_id" => 3,
        ],
        [
            "name" => "Tiramisù",
            "image" => "https://www.divella.it/wp-content/uploads/2022/12/tiramisu.jpg",
            "description" => "Dolce al caffè con mascarpone e savoiardi.",
            "ingredients" => ["Mascarpone", "Savoiardi", "Caffè", "Cacao", "Zucchero"],
            "price" => 6.00,
            "visible" => true,
            "restaurant_id" => 3,
        ],
        [
            "name" => "Gnocchi al Pesto",
            "image" => "https://lognocco.it/wp-content/uploads/2018/07/9-preparazione-ricetta-gnocchi-pesto.jpg",
            "description" => "Gnocchi di patate con pesto fresco.",
            "ingredients" => ["Gnocchi", "Basilico", "Aglio", "Pinoli", "Parmigiano"],
            "price" => 10.50,
            "visible" => true,
            "restaurant_id" => 4,
        ],
        [
            "name" => "Tagliata di Manzo",
            "image" => "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/01/Tagliata-di-manzo.jpg",
            "description" => "Manzo alla griglia con rucola e parmigiano.",
            "ingredients" => ["Manzo", "Rucola", "Parmigiano", "Olio", "Sale"],
            "price" => 18.00,
            "visible" => true,
            "restaurant_id" => 4,
        ],
        [
            "name" => "Penne all'Arrabbiata",
            "image" => "https://cdn.ilclubdellericette.it/wp-content/uploads/2021/09/penne-arrabbiata-1280x720.jpg",
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
