<?php

require_once __DIR__ . "/autoload.php";

//INSTANCING OBJECT from class Furniture:
    (int)$width = null;
    (int)$length = null;
    (int)$height = null;
    $is_for_seating = null;
    $is_for_sleeping = null;

    $furniture =  new Furniture ($width, $length, $height);
    $furniture -> setIs_for_seating($is_for_seating);
    $furniture -> setIs_for_sleeping($is_for_sleeping);
    $furniture -> getIs_for_seating();
    $furniture -> getIs_for_sleeping();
    $furniture -> area($width, $length);
    $furniture -> volume();
    // $furniture -> print();
    // $furniture -> sneakpeek();
    // $furniture -> fullinfo();

echo "<hr/>";

//INSTANCING OBJECT from class Sofa:

// (int)$width = 120;
// (int)$length = 250;
// (int)$height = 100;
(int)$length_opened = 220;
(int)$seats = 3;
(int)$armrests = 1;
$is_for_sleeping = true; //true or false

$sofa = new Sofa(120, 250, 100);
$sofa -> setSeats($seats);
$sofa -> getSeats();
$sofa -> setArmrests($armrests);
$sofa -> getArmrests();
$sofa -> setLength_opened($length_opened);
$sofa -> getLength_opened();
$sofa -> setIs_for_sleeping($is_for_sleeping);
$sofa -> getIs_for_sleeping();
echo $sofa -> area_opened();

echo "<hr/>";

  //INSTANCING OBJECT from class Bench:
    (int)$width = 95;
    (int)$length = 200;
    (int)$height = 100;
    (int)$length_opened = null;
    (int)$seats = 3;
    (int)$armrests = 2;
    $is_for_sleeping = false; //true or false

    $bench = new Bench($width, $length, $height, $seats, $armrests, $length_opened);
    $bench -> setSeats($seats);
    $bench -> getSeats();
    $bench -> setArmrests($armrests);
    $bench -> getArmrests();
    $bench -> setLength_opened($length_opened);
    $bench -> getLength_opened();
    $bench -> setIs_for_sleeping($is_for_sleeping);
    $bench -> getIs_for_sleeping();
    echo $bench -> area_opened();


//INSTANCING OBJECT from class Chair:
(int)$width = 90;
(int)$length = 95;
(int)$height = 100;
$is_for_sleeping = false; //true or false

$chair = new Chair ($width, $length, $height);
$chair -> setIs_for_sleeping($is_for_sleeping);
$chair -> getIs_for_sleeping();


echo "<hr/>";

$objects = [$sofa, $bench, $chair];

foreach($objects as $object) {
  echo  $object -> sneakpeek() . "<br />";
  echo  $object -> print() . "<br />";
  echo  $object -> fullinfo() . "<br />";
  echo  "The volume is " . $object -> volume() . " cm3. <br />";
  echo  "The area is " . $object -> area() . " cm2. <br />";
  echo  "<hr/>";
}