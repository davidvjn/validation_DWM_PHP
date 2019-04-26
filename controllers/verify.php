<?php $users =
        [
            [
                'pseudo' => 'Johnny',
                'password' => 'Begood',
            ],
            [
                'pseudo' => 'Dick',
                'password' => 'Rivière',
            ]
        ]
        ?>
        <?php
            foreach ($users as $user);
            if (($_POST['pseudo'] == $users) && ($_POST['password'] == $users)
                echo ($users['pseudo']);
            else
                echo "Création de compte à faire";
        ?>