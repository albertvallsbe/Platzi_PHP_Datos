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

$saludo = function ($name) // variable que requiere lógica
{
    return "Hola, $name";
};

echo $saludo('Prova');


echo "<br>----------------------<br>";
echo "Classe 10 -> Closures";
echo "<br><br>";


function saludar(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name)
{
    return "Hola, $name";
};
$en = function($name)
{
    return "Hello, $name";
};

echo saludar($es, 'Maria');
echo "<br>";
echo saludar($en, 'Maria');

echo "<br>----------------------<br>";
echo "Classe 11 -> ";
echo "<br><br>";