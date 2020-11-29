<?php

$mahasiswa = [
    [
        "nama" => "Tirta Salsabila Arifin",
        "nrp" => "183040086",
        "email" => "tirtaarifin95@gmail.com"
    ],
    [
        "nama" => "Erik Doank",
        "nrp" => "023040001",
        "email" => "erik@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
