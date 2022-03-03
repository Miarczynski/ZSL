<?php
$name="Janusz";
echo "imie i nazwisko: $name<br>";
//konkatenacja
echo "imie: ".$name."<br>";
//interpolacja
echo "imie: ",$name,"<br>";
//typy danych
//boolean
$prawda=true;
$fałsz=false;
echo $prawda; //1
echo $fałsz; //nic nie wyswietla

//integer
$dec=10;
echo "<br>$dec";
$bin=0b1011;
$oct=010;
$hex=0x10;
echo "<br>$bin";
echo "<br>$oct";
echo "<br>$hex";

echo gettype($hex); //integer
echo gettype($prawda); //boolean

//zmiennoprzecinkowe
$x=10.5;
echo gettype($x); //double

$name="Anna";
echo "<br> nazwa zmiennej \$name";

// heredoc
$surname="Nowak";
echo <<<ETYKIETA
<br>
Imię i nazwisko: $name $surname
<hr>
ETYKIETA;
?>
