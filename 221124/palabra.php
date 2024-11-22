<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabra</title>
</head>
<body>
<?php
        function get_biggest_word($txt){
            $palabras = explode(" ", $txt);
            $biggest_word = "";

            foreach($palabras as $palabra){
                if(strlen($palabra) > strlen($biggest_word)){
                    $biggest_word = $palabra;
                }
            }

            return $biggest_word;
        }

    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, maxime est. Nesciunt facere iure odio? Placeat rem amet non minima. Consectetur dolor nobis pariatur distinctio neque repudiandae accusamus id mollitia? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio eaque aperiam, velit adipisci dolor similique totam pariatur magni quidem quam necessitatibus dolore facilis dolorem eligendi nostrum mollitia sunt ratione? Ipsum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet enim ea fugiat, sunt, facere, cupiditate reprehenderit laborum dolore numquam est quisquam sapiente perspiciatis eos quas ab vitae earum modi ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores natus officiis optio alias ducimus explicabo libero, sint nobis. Nemo impedit quisquam, dolorum laborum autem excepturi sed atque quia vel assumenda? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat ut culpa inventore commodi enim modi alias blanditiis, et repellat quasi. Facilis exercitationem, sed voluptatibus quisquam ex incidunt deserunt assumenda consequatur.";

    ?>

    <h1>Texto y palabra más larga</h1>

    <?php
    echo $lorem;

    $biggest_word = get_biggest_word($lorem); ?>

    <br><br>

    <?php

    echo "Palabra más larga: $biggest_word";
    ?>
</body>
</html>