<?php
$tab = ['1' => ' A ' ,'2' =>' B ','3'=>' C ','4'=>' D ','5'=>' E ','6'=>' F ','7'=>' G ','8'=>' H ','9'=>' I ','10'=>' J '];
echo "battleship game";
echo PHP_EOL;
//le tableau de jeu
function display_board($user_tab, $bot_tab)
{
    echo "   ---------------------------------------------------\n";
    echo "                    Baitaille Navale \n";
    echo "   |-------------------------------------------------|\n";
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

$user_tab = ['0'=> "A1",'1'=> "B1",'2'=> "C1",'3'=> "D1",'4'=> "E1",'5'=> "F1",'6'=> "G1",'7'=> "H1",'8'=> "I1",'9'=> "J1"][0];
$user_tab = ['0'=> "A2",'1'=> "B2",'2'=> "C2",'3'=> "D2",'4'=> "E2",'5'=> "F2",'6'=> "G2",'7'=> "H2",'8'=> "I2",'9'=> "J2"][1];
$user_tab = ['0'=> "A3",'1'=> "B3",'2'=> "C3",'3'=> "D3",'4'=> "E3",'5'=> "F3",'6'=> "G3",'7'=> "H3",'8'=> "I3",'9'=> "J3"][2];
$user_tab = ['0'=> "A4",'1'=> "B4",'2'=> "C4",'3'=> "D4",'4'=> "E4",'5'=> "F4",'6'=> "G4",'7'=> "H4",'8'=> "I4",'9'=> "J4"][3];
$user_tab = ['0'=> "A5",'1'=> "B5",'2'=> "C5",'3'=> "D5",'4'=> "E5",'5'=> "F5",'6'=> "G5",'7'=> "H5",'8'=> "I5",'9'=> "J5"][4];
$user_tab = ['0'=> "A6",'1'=> "B6",'2'=> "C6",'3'=> "D6",'4'=> "E6",'5'=> "F6",'6'=> "G6",'7'=> "H6",'8'=> "I6",'9'=> "J6"][5];
$user_tab = ['0'=> "A7",'1'=> "B7",'2'=> "C7",'3'=> "D7",'4'=> "E7",'5'=> "F7",'6'=> "G7",'7'=> "H7",'8'=> "I7",'9'=> "J7"][6];
$user_tab = ['0'=> "A8",'1'=> "B8",'2'=> "C8",'3'=> "D8",'4'=> "E8",'5'=> "F8",'6'=> "G8",'7'=> "H8",'8'=> "I8",'9'=> "J8"][7];
$user_tab = ['0'=> "A9",'1'=> "B9",'2'=> "C9",'3'=> "D9",'4'=> "E9",'5'=> "F9",'6'=> "G9",'7'=> "H9",'8'=> "I9",'9'=> "J9"][8];
$user_tab = ['0'=> "A10",'1'=> "B10",'2'=> "C10",'3'=> "D10",'4'=> "E10",'5'=> "F10",'6'=> "G10",'7'=> "H10",'8'=> "I10",'9'=> "J10"][9];
echo "   |-------------------------------------------------|\n";
    echo "   ---------------------------------------------------\n\n";

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

echo "  veuillez entrez les coordonné de vos vaisseau :\n";
echo "          --- un porte_avion de 5 cases ---\n";
echo "          --- un croiseur de 4 cases ---\n";
echo "          --- un contre_torpilleur de 3 cases ---\n";
echo "          --- un sous_marin de 3 cases ---\n";
echo "          --- un torpilleur de 2 cases ---\n";
$porte_avion = "PAPAP";
$croiseur = "CCCC";
$contre_torpilleur = "CTC";
$sous_marin = "SMM";
$torpilleur = "TT";

$UserInput = trim(fgets(STDIN));
echo $user_tab[0];
?>
