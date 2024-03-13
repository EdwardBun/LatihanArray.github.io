<?php
//array index//
$data = ["nasi", "mie", "ayam goreng" ];
$data2 = array(100, 90, 80);

//memanggil array index
$panggil[1];

//menambahkan item ke hasil array index//
$tambah[] = 90;
array_push($data2, 75);
array_splice($data2, 3, 0, 72);
array_unshift($data2, 100);
array_splice($data2, 3, 0, 83);


//ubah data
$data2[5] = 81;
array_splice($data2, 2, 1, 60);

//hapus data
unset($data2[1]);
array_pop($data2);
array_shift($data2);
print_r($data2);
echo'<br>';
foreach ($data2 as $nomor => $value) {
    echo "index ke-" . $nomor . "=" . $value . "<br>";
};

echo "<br>";
echo implode( ' dan ', $data2);
echo "<br>";
foreach ($data as $key => $value) {
    echo strtoupper($value) . ",";
};



//array Assosiatif//
$data3 = [
    "nama" => "Edward",
    "Rombel" => "PPLG X-4",
    "nilai" => 80
];

//memanggil asosiatif//
$data3['Rombel'];
$data3['rayon'] = 'cic 3';
unset($data3['nilai']);

// //array multi dimensi (2 dimensi)//
// $data4 = [
//     [
//         "nama" => "Edward",
//         "rombel" => "PPLG X-4"
//     ]
//     [
//         "nama" => "Edwin",
//         "rombel" => "PPLG X-4"
//     ]
//     [
//         "nama" => "Ed",
//         "rombel" => "Bebas"
//     ]
// ];

// //array multi dimensi (3 dimensi)//
// $data5 [
//     [
//         "3dimensi" => "Contohnya?"
//         "Ada Array lagi didalam yang kedua (pink)" => [80,90,70]
//     ]
// ];

// //Memanggil multi dimensi//
// $database[2]['nama'];
?>