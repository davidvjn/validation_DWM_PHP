<?php

session_start();

$users =
        [
            [
                'pseudo' => 'Johnny',
                'password' => 'Begood',
            ],
            [
                'pseudo' => 'Dick',
                'password' => 'Rivière',
            ]
        ];

    foreach ($users as $user) {
        if ($_POST['pseudo'] == $user['pseudo'] && $_POST['password'] == $user['password']) {
            echo "Welcome " .($user['pseudo']);
            header('Location: /');
            break;

        } else {
            echo ("Création de compte à faire");
            break;
        }
    }

