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
        [
            'name' => 'Pasticceria Dolce Vita',
            'image' => 'dolce_vita_image.jpg',
            'address' => 'Via Venezia 9, Venezia',
            'vat' => 'IT84930216789',
            'user_id' => 6
        ],
        [
            'name' => 'Ristorante La Pergola',
            'image' => 'la_pergola_image.jpg',
            'address' => 'Via Bologna 13, Bologna',
            'vat' => 'IT10293847565',
            'user_id' => 7
        ],
        [
            'name' => 'Enoteca Vinum',
            'image' => 'vinum_image.jpg',
            'address' => 'Via Napoli 20, Napoli',
            'vat' => 'IT19283746578',
            'user_id' => 8
        ],
        [
            'name' => 'Ristorante La Fontana',
            'image' => 'la_fontana_image.jpg',
            'address' => 'Via Genova 7, Genova',
            'vat' => 'IT38475692011',
            'user_id' => 9
        ],
        [
            'name' => 'Trattoria Da Marco',
            'image' => 'da_marco_image.jpg',
            'address' => 'Via Salerno 14, Salerno',
            'vat' => 'IT29384756023',
            'user_id' => 10
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
            "restaurant_id" => 1,
        ],
        [
            "name" => "Insalata Caprese",
            "image" => "immagine",
            "description" => "Pomodoro e mozzarella con basilico fresco.",
            "ingredients" => ["Pomodoro", "Mozzarella", "Basilico", "Olio", "Sale"],
            "price" => 7.00,
            "visible" => true,
            "restaurant_id" => 1,
        ],
        [
            "name" => "Pollo alla Cacciatora",
            "image" => "immagine",
            "description" => "Pollo brasato con pomodoro e olive.",
            "ingredients" => ["Pollo", "Pomodoro", "Olive", "Vino", "Rosmarino"],
            "price" => 15.00,
            "visible" => true,
            "restaurant_id" => 1,
        ],
        [
            "name" => "Fettuccine Alfredo",
            "image" => "immagine",
            "description" => "Pasta con salsa cremosa al burro e parmigiano.",
            "ingredients" => ["Fettuccine", "Burro", "Parmigiano", "Panna", "Pepe"],
            "price" => 11.00,
            "visible" => true,
            "restaurant_id" => 2,
        ],
        [
            "name" => "Bruschetta al Pomodoro",
            "image" => "immagine",
            "description" => "Pane tostato con pomodoro fresco e basilico.",
            "ingredients" => ["Pane", "Pomodoro", "Basilico", "Aglio", "Olio"],
            "price" => 5.00,
            "visible" => true,
            "restaurant_id" => 4,
        ],
        [
            "name" => "Tiramisù",
            "image" => "immagine",
            "description" => "Dolce al caffè con mascarpone e savoiardi.",
            "ingredients" => ["Mascarpone", "Savoiardi", "Caffè", "Cacao", "Zucchero"],
            "price" => 6.00,
            "visible" => true,
            "restaurant_id" => 6,
        ],
        [
            "name" => "Gnocchi al Pesto",
            "image" => "immagine",
            "description" => "Gnocchi di patate con pesto fresco.",
            "ingredients" => ["Gnocchi", "Basilico", "Aglio", "Pinoli", "Parmigiano"],
            "price" => 10.50,
            "visible" => true,
            "restaurant_id" => 7,
        ],
        [
            "name" => "Tagliata di Manzo",
            "image" => "immagine",
            "description" => "Manzo alla griglia con rucola e parmigiano.",
            "ingredients" => ["Manzo", "Rucola", "Parmigiano", "Olio", "Sale"],
            "price" => 18.00,
            "visible" => true,
            "restaurant_id" => 8,
        ],
        [
            "name" => "Penne all'Arrabbiata",
            "image" => "immagine",
            "description" => "Pasta piccante con salsa di pomodoro e peperoncino.",
            "ingredients" => ["Penne", "Pomodoro", "Peperoncino", "Aglio", "Olio"],
            "price" => 9.00,
            "visible" => true,
            "restaurant_id" => 9,
        ],
        [
            "name" => "Arancini di Riso",
            "image" => "immagine",
            "description" => "Palline di riso fritte ripiene di ragù.",
            "ingredients" => ["Riso", "Ragù", "Piselli", "Formaggio", "Pangrattato"],
            "price" => 7.50,
            "visible" => true,
            "restaurant_id" => 10,
        ],
        [
            "name" => "Calamari Fritti",
            "image" => "immagine",
            "description" => "Calamari fritti serviti con limone.",
            "ingredients" => ["Calamari", "Farina", "Olio", "Limone", "Sale"],
            "price" => 12.00,
            "visible" => true,
            "restaurant_id" => 4,
        ],
        [
            "name" => "Pasta e Fagioli",
            "image" => "immagine",
            "description" => "Zuppa di pasta con fagioli e pancetta.",
            "ingredients" => ["Pasta", "Fagioli", "Pancetta", "Pomodoro", "Rosmarino"],
            "price" => 8.50,
            "visible" => true,
            "restaurant_id" => 6,
        ],
        [
            "name" => "Parmigiana di Melanzane",
            "image" => "immagine",
            "description" => "Melanzane al forno con salsa di pomodoro e formaggio.",
            "ingredients" => ["Melanzane", "Pomodoro", "Mozzarella", "Parmigiano", "Basilico"],
            "price" => 11.50,
            "visible" => true,
            "restaurant_id" => 7,
        ],
        [
            "name" => "Ossobuco alla Milanese",
            "image" => "immagine",
            "description" => "Stinco di vitello con gremolata e risotto.",
            "ingredients" => ["Vitello", "Limone", "Aglio", "Prezzemolo", "Brodo"],
            "price" => 19.00,
            "visible" => true,
            "restaurant_id" => 8,
        ],
        [
            "name" => "Focaccia",
            "image" => "immagine",
            "description" => "Pane morbido condito con olio e rosmarino.",
            "ingredients" => ["Farina", "Acqua", "Olio", "Sale", "Rosmarino"],
            "price" => 4.50,
            "visible" => true,
            "restaurant_id" => 9,
        ],
        [
            "name" => "Pappardelle al Cinghiale",
            "image" => "immagine",
            "description" => "Pasta fresca con ragù di cinghiale.",
            "ingredients" => ["Pappardelle", "Cinghiale", "Vino", "Pomodoro", "Aromi"],
            "price" => 16.00,
            "visible" => true,
            "restaurant_id" => 7,
        ],
        [
            "name" => "Ribollita",
            "image" => "immagine",
            "description" => "Zuppa toscana con pane e verdure.",
            "ingredients" => ["Pane", "Cavolo nero", "Fagioli", "Carote", "Cipolla"],
            "price" => 9.50,
            "visible" => true,
            "restaurant_id" => 3,
        ],
        [
            "name" => "Polenta e Salsiccia",
            "image" => "immagine",
            "description" => "Polenta cremosa con salsiccia in umido.",
            "ingredients" => ["Polenta", "Salsiccia", "Pomodoro", "Cipolla", "Brodo"],
            "price" => 13.50,
            "visible" => true,
            "restaurant_id" => 2,
        ],
        [
            "name" => "Insalata di Mare",
            "image" => "immagine",
            "description" => "Mix di frutti di mare con limone e prezzemolo.",
            "ingredients" => ["Calamari", "Gamberi", "Cozze", "Limone", "Prezzemolo"],
            "price" => 14.50,
            "visible" => true,
            "restaurant_id" => 4,
        ],
        [
            "name" => "Ravioli di Ricotta e Spinaci",
            "image" => "immagine",
            "description" => "Pasta fresca ripiena con salsa al burro e salvia.",
            "ingredients" => ["Ravioli", "Ricotta", "Spinaci", "Burro", "Salvia"],
            "price" => 12.00,
            "visible" => true,
            "restaurant_id" => 5,
        ],
        [
            "name" => "Zuppa di Pesce",
            "image" => "immagine",
            "description" => "Zuppa ricca di pesce fresco.",
            "ingredients" => ["Pesce", "Pomodoro", "Aglio", "Prezzemolo", "Vino"],
            "price" => 17.00,
            "visible" => true,
            "restaurant_id" => 6,
        ],
        [
            "name" => "Torta della Nonna",
            "image" => "immagine",
            "description" => "Dolce con crema pasticcera e pinoli.",
            "ingredients" => ["Farina", "Uova", "Zucchero", "Pinoli", "Limone"],
            "price" => 5.50,
            "visible" => true,
            "restaurant_id" => 7,
        ],
        [
            "name" => "Vitello Tonnato",
            "image" => "immagine",
            "description" => "Vitello freddo con salsa tonnata.",
            "ingredients" => ["Vitello", "Tonno", "Maionese", "Capperi", "Limone"],
            "price" => 14.00,
            "visible" => true,
            "restaurant_id" => 8,
        ],
        [
            "name" => "Panzanella",
            "image" => "immagine",
            "description" => "Insalata di pane e verdure estive.",
            "ingredients" => ["Pane", "Pomodoro", "Cipolla", "Cetriolo", "Basilico"],
            "price" => 7.50,
            "visible" => true,
            "restaurant_id" => 9,
        ],
        [
            "name" => "Cannelloni",
            "image" => "immagine",
            "description" => "Pasta ripiena di carne e ricotta.",
            "ingredients" => ["Pasta", "Carne", "Ricotta", "Pomodoro", "Parmigiano"],
            "price" => 13.00,
            "visible" => true,
            "restaurant_id" => 10,
        ],
        [
            "name" => "Saltimbocca alla Romana",
            "image" => "immagine",
            "description" => "Scaloppine di vitello con prosciutto e salvia.",
            "ingredients" => ["Vitello", "Prosciutto", "Salvia", "Vino", "Burro"],
            "price" => 15.00,
            "visible" => true,
            "restaurant_id" => 4,
        ]
    ]
];
