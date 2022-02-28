<?php

require __DIR__ .  '/vendor/autoload.php';

// Test on "test_email"
var_dump(App\Validate::email('avalls89@gmail.com'));

// Test on "test_url"
var_dump(App\Validate::url('https://www.albertvalls.cat'));

// Test on "test_password"
var_dump(App\Validate::password('123456'));

echo "<br>";

// Work with values
function greet($name)
{
    return "Hola, $name";
}
echo greet('Italo');

echo "<br>";

// Work with references
// With '&' the changes will afect the original value.
$course = 'PHP';
function path(&$course) //&$value -> Afecta a la posició original de memoria.
{
    $course = 'Laravel';
    echo $course;
}
path($course);
echo $course;

echo "<br>";

//Predeterminado
function greetto($name = 'Italo')
{
    return "Hello, $name";
}

echo greetto();
echo " - ";
echo greetto('Albert');

echo "<br>";


// Return
function provaSalutacions()
{
    return "Hola...";
}
echo provaSalutacions();

// exit(); -> detiene el sistema
// return;  -> retorna un resultado

echo "<br>";