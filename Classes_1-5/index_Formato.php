<?php

// Alterar
$text = "PHP es UN LENGUAJE"; //slug
echo $text;
echo "<br>";
echo strtolower($text);
echo "<br>";
echo strtoupper($text);
echo "<br>";
echo ucfirst($text);
echo "<br>";
echo lcfirst($text);
echo "<br>";
echo ucwords(strtolower($text));
echo "<br>";


// Reemplazar
$slug = str_replace(' ', '-', $text);
echo $slug;
echo "<br>";
echo strtolower($slug);
echo "<br>";

// Modificación
$code = 39;
echo str_pad($code, 8, '#', STR_PAD_BOTH);
echo "<br>";
echo strip_tags($text);
echo "<br>";

echo strtoupper($text); // monobyte
echo mb_strtoupper($text); //multibyte