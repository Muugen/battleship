<?php
$tab = ['1' => ' A ' ,'2' =>' B ','3'=>' C ','4'=>' D ','5'=>' E ','6'=>' F ','7'=>' G ','8'=>' H ','9'=>' I ','10'=>' J ','11'=>' K '];
echo "battleship game";
echo PHP_EOL;
//le tableau de jeu
function display_board($user_tab, $bot_tab)
{
    echo "   | A B C D E F G H I J |  /  | A B C D E F G H I J |";
    echo PHP_EOL;
    echo "   |---------------------|  /  |---------------------|";
    echo PHP_EOL;
    for($i = 1; $i < 11; $i++){
        if ($i < 10){
            echo "  ";
        }
        else{
            echo " ";
        }
        echo $i;
        echo "|";
        for ($j = 0; $j < 10; $j++)
        {
            if ($user_tab[10*($i-1) + $j] == 0)
            {
                echo "  ";
            }
            else{
                echo " *";
            }
            
        }

        echo " |  /  |";
        for ($j = 0; $j < 10; $j++)
        {
            if ($bot_tab[10*($i-1) + $j] == 0)
            {
                echo "  ";
            }
            else{
                echo " *";
            }
            
        }
        echo " |";
        echo PHP_EOL;
    }
    echo "   |-------------------------------------------------|";
}
//affichage des 100 cases 
function makearray($y){
    $inputcase = new SplFixedArray(100);
    for($i=0;$i<100;$i++){
        $inputcase[$i]=$y;
    }
    return $inputcase;
}
$user=makearray(0);
$bot=makearray(0);
display_board($user,$bot);
?>
