<?php
$tab = ['1' => ' A ' ,'2' =>' B ','3'=>' C ','4'=>' D ','5'=>' E ','6'=>' F ','7'=>' G ','8'=>' H ','9'=>' I ','10'=>' J ','11'=>' K '];
//echo $tab['1'].$tab['2'].$tab['3'].$tab['4'];
echo "battleship";
echo PHP_EOL;
function display_board($user_tab, $bot_tab)
{
    echo "|A B C D E F G H I J K|  /  |A'B'C'D'E'F'G'H'I'J'K'|";
    echo PHP_EOL;
    echo "|-----------------------|  /  |-----------------------|";
    echo PHP_EOL;
    /*$array_user = array_values($user_tab);
    $array_bot = array_values($bot_tab);*/
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

        echo "|  /  |";
        for ($j = 0; $j < 10; $j++)
        {
            if ($bot_tab[10*($i-1) + $j] == 0)
            {
                echo "--";
            }
            else{
                echo "-*";
            }
            
        }
        echo "|";
        echo PHP_EOL;
    }
    echo " -----------------------------------------------------|";
}
function makearray($y){
    $inputU = new SplFixedArray(100);
    for($i=0;$i<100;$i++){
        $inputU[$i]=$y;
    }
    return $inputU;
}
$a=makearray(0);
$b=makearray(1);
display_board($a,$b);
?>
