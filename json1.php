<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->NIM;
echo "<br>";
echo "Nama : ";echo $obj->Nama;
echo "<br>";
echo "No Hp : ";echo $obj->No_Hp;
echo "<br>";
echo "Mata Kuliah Pertama: ";echo $obj->Mata_Kuliah[0];
echo "<br>";
echo "Mata Kuliah Kedua: ";echo $obj->Mata_Kuliah[1];
echo "<br>";
echo "Mata Kuliah Ketiga: ";echo $obj->Mata_Kuliah[2];
?>