<?php

echo 'Un texto de una línea
varias líneas
comilla simple \' backslash \\ continuar con más texto 
$variable <br>';

$name = 'Albert';
echo "Mi nombre es: $name <br>";
echo 'Mi nombre es: ' . $name . '<br>';

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

echo "{$courses['backend'][0]}";


class User
{
    public $name = 'italo';
}

$user = new User;

echo "<br> $user->name quiere aprender {$courses['backend'][0]}";

$courses = ['backend' => 'PHP'];

$teacher = 'albert';
$albert = 'Profesor';

echo "<br> $teacher es ${$teacher}";

function getTeacher()
{
    return 'teacher';
}

$teacher = 'Italo';

echo "<br> {${getTeacher()}} enseña PHP";
