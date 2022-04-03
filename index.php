<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>
    
    <?php

    // tableau
    $prenom = array('Benje', 'Maud', 'Samuel', 'Emilienne');

    // boucle for
    for($index = 0; $index <= 3; $index++){
        echo $prenom[$index].'<br/>';
    }

    echo'<br/>';

    //boucle foreach
    foreach($prenom as $element){
        echo $element.'<br/>';
    }

    /*
    //tableau par la methode manuel 
    $prenoms[0] = 'Benje';
    $prenoms[1] = 'Maud';
    $prenoms[2] = 'Samuel';
    $prenoms[3] = 'Emilienne';
    */
    
    echo'<br/>';

    //tableau associative
    $age = array(
        'Benje' => 26,
        'Maud' => 26,
        'Samuel' => 75,
        'Emilienne' => 56
    );

    // recuperation des valeurs seulement
    foreach($age as $valeur){
        echo $valeur.'<br/>';
    }

    
    echo'<br/>';

    // recuperation des valeurs et clé
    foreach($age as $keys => $value){
        echo 'l\'age de '.$keys.' est '.$value.' ans'.'<br/>';
    }

    
    echo'<br/>';
    
    // print_r pour le debeugage 
    print_r($age);

    
    echo'<br/>';

    // print_r pour le debeugage plus jolie
    echo'<pre>';
    print_r($age);
    echo'<pre>';

    
    echo'<br/>';
    echo'<br/>';

    echo $prenom[2].'<br/>';
    echo $prenom[2] .' a '.$age['Samuel'].' ans'.'<br/>';

    echo'<br/>';

    //tableau multiple 
    $membres = array(
        array('Benjamin', 26, 'ekiabenjamin@gmail.com'),
        array('Samuel', 75, 'samuel.m@gmail.com'),
        array('Emilienne', 56, 'emilienne.y@gmail.com')
    );

    echo $membres[0][0].' a '.$membres[0][1].' ans. Son mail est : '.$membres[0][2].'<br/>';
    echo $membres[1][0].' a '.$membres[1][1].' ans. Son mail est : '.$membres[1][2].'<br/>';
    echo $membres[2][0].' a '.$membres[2][1].' ans. Son mail est : '.$membres[2][2].'<br/>';

    echo'<br/>';

    // boucle imbriqué
    for($ligne =0; $ligne <3; $ligne++){
        $membre_nbr = $ligne + 1;
        echo'Membre numero ' .$membre_nbr.'<br/>';
        echo'<ul>';
        for($col= 0; $col <3; $col ++){
            echo'<li>'.$membres[$ligne][$col].'<br/>';
        }
        echo '</ul>';
    }


    ?>
</body>
</html>