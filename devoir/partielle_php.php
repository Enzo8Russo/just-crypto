<?php

    // PARTIELLE

    // PARTIE 0 :
    
    $tabvetements = ['pantalon', 'tee-shirt', 'sweat', 'chemise'];
    $tabmois = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin'];
    $tab2D = [[15,21,0,10], [2,2,0,20], [3,2,0,1], [1,2,0,1], [1,2,0,1], [6,2,0,1]];

    echo 'En '.$tabmois[0].', '.$tabmois[1].', '.$tabmois[2].', j\'ai acheté des '.$tabvetements[0].'s, des '.$tabvetements[1].'s, des '.$tabvetements[2].'s, et des '.$tabvetements[3].'s.'.'<br>';
    echo 'Et de même en '.$tabmois[3].', '.$tabmois[4].', '.$tabmois[5].'.';

    echo '<br>';
    echo '<br>';
    // PARTIE 1 (une seul boucle) :

    for($i=0;$i<4;$i++){
        echo 'Des '.$tabvetements[$i].', j\'en ai acheté '.$tab2D[0][$i].' en '.$tabmois[0].', '.$tab2D[1][$i].' en '.$tabmois[1].', '.$tab2D[2][$i].' en '.$tabmois[2].', '.$tab2D[3][$i].' en '.$tabmois[3].', '.$tab2D[4][$i].' en '.$tabmois[4].', '.$tab2D[5][$i].' en '.$tabmois[5].'.'.'<br>';
    }

    echo '<br>';
    echo '<br>';

    // PARTIE 2 (deux boucles) :

    for($i=0;$i<4;$i++){

        echo 'Des '.$tabvetements[$i].', j\'en ai acheté ';
        
        for($j=0;$j<6;$j++) {
            echo ' '.$tab2D[$j][$i].' en '.$tabmois[$j].',';
        }
        echo ' et j\'en suis content.'.'<br>';
    }

    echo '<br>';
    echo '<br>';

    // PARTIE 3 (Condition dans une fonction) :

    function pluriels ($word, $nbword){
        if($nbword > 0 ){
            $word='s';
        }else {
            $word='';
        }
        return $word;
    }

    for($i=0;$i<4;$i++){

        echo 'Des '.$tabvetements[$i].', j\'en ai acheté ';
        
        for($j=0;$j<6;$j++) {
            echo ' '.$tab2D[$j][$i].' en '.$tabmois[$j].',';
        }
        echo ' et j\'en suis content.'.'<br>';
    }

    echo '<br>';
    echo '<br>';

    // PARTIE 4 (...) :

    $total = $tab2D[0][0]+$tab2D[0][1]+$tab2D[0][2]+$tab2D[0][3]+$tab2D[1][0]+$tab2D[1][1]+$tab2D[1][2]+$tab2D[1][3]+$tab2D[2][0]+$tab2D[2][1]+$tab2D[2][2]+$tab2D[2][3]+$tab2D[3][0]+$tab2D[3][1]+$tab2D[3][2]+$tab2D[3][3]+$tab2D[4][0]+$tab2D[4][1]+$tab2D[4][2]+$tab2D[4][3]+$tab2D[5][0]+$tab2D[5][1]+$tab2D[5][2]+$tab2D[5][3];


    

    echo 'On a acheté '.$total.' habits.';

    
?>