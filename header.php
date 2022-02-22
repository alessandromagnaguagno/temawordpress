<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>


</head>
<body>

    <div> ... chiamare funzione wordpress che stampa il menù ... 
            <?php wp_nav_menu ([
                'menu'            => 'menu principale',
                 'container'       => 'nav',

            ]) ?>
       
 
    </div>