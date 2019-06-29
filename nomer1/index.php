<?php

$file = "biodata.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota, true);

title();

foreach ($data as $d) {
    echo $d['name']. "<br>";
    echo $d['age']. "<br>";
    echo $d['address']. "<br>";
    echo $d['hobbies']. "<br>";
    echo $d['is_married']. "<br>";
    echo $d['list_school']. "<br>";
    echo $d['skills']. "<br>";
    echo $d['interest_in_coding']. "<br>";
}

function title(){
    echo "<h2>Biodata Saya</h2> <br><br> ";
}