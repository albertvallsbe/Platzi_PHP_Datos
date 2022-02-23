<?php

$data = 'Estudio PHP';

// echo $data{0}; També funciona així...
echo $data[0];

echo "<br>";

$post = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis neque accusamus dolores? Autem neque iste, explicabo accusamus quae ea animi saepe minus eum inventore itaque iure doloribus tempora, iusto magni.';
$extract = substr($post, 0, 20);

echo "$extract...  [ver más]";

echo "<br>";

$datas = 'javascript, php, laravel';
$tags = explode(', ', $datas);

echo "<br>";

echo "$datas";
echo "<pre>";
var_dump($tags);

echo "<br>";

$courses = ['javascript', 'php', 'laravel'];
echo "<pre>";
echo implode(', ', $courses);

echo "<br>";

$course = "   Curso de PHP    ";
$course = trim($course);// Elimina els espais en blanc 
echo "<pre>";
echo "Quiero aprender $course, y otro texto";

