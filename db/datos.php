<?php

    $datos = array(
        'Juegos' => array(
            'Accion' => array(
                array( 
                    'id' => 11,
                    'nombre' => 'Call of Duty: Modern Warfare',
                    'descripcion' => 'Disfruta de intensas batallas en este juego de acción.',
                    'stock' => 50,
                    'precio' => 59.99
                ),
                array( 
                    'id' => 12,
                    'nombre' => 'Gears 5',
                    'descripcion' => 'Un shooter en tercera persona lleno de acción y emoción.',
                    'stock' => 30,
                    'precio' => 49.99
                ),
                array( 
                    'id' => 13,
                    'nombre' => 'Assassin\'s Creed Valhalla',
                    'descripcion' => 'Explora el mundo vikingo en esta aventura de acción.',
                    'stock' => 35,
                    'precio' => 54.99
                ),
                array( 
                    'id' => 14,
                    'nombre' => 'Cyberpunk 2077',
                    'descripcion' => 'Sumérgete en un mundo futurista lleno de peligros y misterios.',
                    'stock' => 20,
                    'precio' => 39.99
                ),
                array( 
                    'id' => 15,
                    'nombre' => 'Resident Evil Village',
                    'descripcion' => 'Enfréntate a horrores en un misterioso pueblo.',
                    'stock' => 25,
                    'precio' => 49.99
                ),
            ),
            'Aventura' => array(
                array(
                    'id' => 6,
                    'nombre' => 'The Legend of Zelda: Breath of the Wild',
                    'descripcion' => 'Embárcate en una aventura épica en el mundo de Hyrule.',
                    'stock' => 40,
                    'precio' => 54.99
                ),
                array(
                    'id' => 7,
                    'nombre' => 'Uncharted 4: A Thief\'s End',
                    'descripcion' => 'Acompaña a Nathan Drake en su última aventura.',
                    'stock' => 25,
                    'precio' => 39.99
                ),
                array(
                    'id' => 8,
                    'nombre' => 'Red Dead Redemption 2',
                    'descripcion' => 'Explora el Salvaje Oeste en esta épica aventura.',
                    'stock' => 30,
                    'precio' => 49.99
                ),
                array(
                    'id' => 9,
                    'nombre' => 'Horizon Zero Dawn',
                    'descripcion' => 'Descubre un mundo post-apocalíptico lleno de criaturas robot.',
                    'stock' => 15,
                    'precio' => 44.99
                ),
                array(
                    'id' => 10,
                    'nombre' => 'The Witcher 3: Wild Hunt',
                    'descripcion' => 'Únete a Geralt de Rivia en una cacería de monstruos.',
                    'stock' => 22,
                    'precio' => 39.99
                ),
            ),
            'Deportes' => array(
                array(
                    'id' => 1,
                    'nombre' => 'FIFA 22',
                    'descripcion' => 'El simulador de fútbol más realista hasta la fecha.',
                    'stock' => 45,
                    'precio' => 49.99
                ),
                array(
                    'id' => 2,
                    'nombre' => 'NBA 2K22',
                    'descripcion' => 'Experimenta la emoción del baloncesto en tu consola.',
                    'stock' => 35,
                    'precio' => 44.99
                ),
                array(
                    'id' => 3,
                    'nombre' => 'Madden NFL 22',
                    'descripcion' => 'Domina el campo de juego en la NFL.',
                    'stock' => 28,
                    'precio' => 54.99
                ),
                array(
                    'id' => 4,
                    'nombre' => 'F1 2021',
                    'descripcion' => 'Siente la velocidad y adrenalina de la Fórmula 1.',
                    'stock' => 18,
                    'precio' => 59.99
                ),
                array(
                    'id' => 5,
                    'nombre' => 'Pro Evolution Soccer 2022',
                    'descripcion' => 'Compite en el campo de fútbol con los mejores equipos.',
                    'stock' => 20,
                    'precio' => 49.99
                ),
            ),
        ),
        'Clientes' => array(
            '1' => array(
                'nombre' => 'Juan Pérez',
                'dni' => '12345678A',
                'telefono' => '555-123-4567',
                'correo' => 'juan@example.com'
            ),
            '2' => array(
                'nombre' => 'María González',
                'dni' => '87654321B',
                'telefono' => '555-987-6543',
                'correo' => 'maria@example.com'
            ),
            '3' => array(
                'nombre' => 'Pedro Ramírez',
                'dni' => '23456789C',
                'telefono' => '555-789-1234',
                'correo' => 'pedro@example.com'
            ),
            '4' => array(
                'nombre' => 'Luisa Martínez',
                'dni' => '34567890D',
                'telefono' => '555-234-5678',
                'correo' => 'luisa@example.com'
            ),
            '5' => array(
                'nombre' => 'Ana López',
                'dni' => '45678901E',
                'telefono' => '555-876-5432',
                'correo' => 'ana@example.com'
            )
        ),
        'Compras' => array(
            array(
                'cliente_dni' => '12345678A',
                'juego_id' => '1', // ID del juego, por ejemplo, '1' pertenece a la categoría 'Acción'
                'precio' => 59.99,
                'cantidad' => 2,
                'fecha' => '2023-10-09 10:30:00'
            ),
            array(
                'cliente_dni' => '87654321B',
                'juego_id' => '8', // ID del juego, por ejemplo, '8' pertenece a la categoría 'Aventura'
                'precio' => 54.99,
                'cantidad' => 1,
                'fecha' => '2023-10-08 15:45:00'
            ),
            array(
                'cliente_dni' => '45678901E',
                'juego_id' => '9', // ID del juego, por ejemplo, '16' pertenece a la categoría 'Deportes'
                'precio' => 49.99,
                'cantidad' => 3,
                'fecha' => '2023-10-07 09:15:00'
            ),
            array(
                'cliente_dni' => '34567890D',
                'juego_id' => '3', // ID del juego, por ejemplo, '3' pertenece a la categoría 'Acción'
                'precio' => 54.99,
                'cantidad' => 1,
                'fecha' => '2023-10-06 18:20:00'
            ),
            array(
                'cliente_dni' => '45678901E',
                'juego_id' => '12', // ID del juego, por ejemplo, '12' pertenece a la categoría 'Aventura'
                'precio' => 39.99,
                'cantidad' => 2,
                'fecha' => '2023-10-05 11:10:00'
            )
        )
    );
?>