<?php

    require __DIR__.'/human.php';
    require __DIR__.'/students.php';
    require __DIR__.'/teacher.php';
    $andrey = new Teacher();

    $andrey -> init("Михаил", "26", "Мужской", "Физрук", 2021, 4, 30000);
    $andrey -> about_th();
    echo "<br>";echo "<br>";
    $andrey -> change_job("Трудовик");
    $andrey -> change_cash(20000);
    $andrey -> about_th();
    echo "<br>";echo "<br>";

    $Petya = new Student();
    $Petya -> init("Вася", "17", "Мужской", "23АКт67", 2020, "Казначей");
    $Petya -> about_st();
    echo "<br>";echo "<br>";
    $Petya -> change_groop("23АКт57");
    $Petya -> change_stuff("Никто");
    $Petya -> about_st();
    echo "<br>";echo "<br>";





?>