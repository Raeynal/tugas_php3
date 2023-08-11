<?php
    require_once 'animal.php' ; 
    require_once 'frog.php';
    require_once 'ape.php';

    $sheep = new animal("shaun");
    echo "name : " . $sheep->getname() . "<br>" ;
    echo "legs : " . $sheep->getlegs() . "<br>" ;
    echo "cold blooded : " . $sheep->getcold_blooded() . "<br>" ; 
    echo "<br>";

    $kodok = new frog("buduk"); 
    echo "name : " . $kodok->getname() . "<br>" ;
    echo "legs : " . $kodok->getlegs() . "<br>" ;
    echo "cold blooded : " . $kodok->getcold_blooded() . "<br>" ; 
    echo "jump : " . $kodok-> jump() . "<br>";
    echo "<br>";

    $sungokong = new ape ("kera sakti"); 
    echo "name : " . $sungokong->getname() . "<br>" ;
    echo "legs : " . $sungokong->getlegs() . "<br>" ;
    echo "cold blooded : " . $sungokong->getcold_blooded() . "<br>" ; 
    echo "yell : " . $sungokong->getcold_blooded() . "<br>" ; 
    echo "<br>";
?>