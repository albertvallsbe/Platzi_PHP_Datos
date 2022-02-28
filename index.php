<?php 

require __DIR__ .  '/vendor/autoload.php';

// Test on "test_email"
var_dump(App\Validate::email('avalls89@gmail.com'));

// Test on "test_url"
var_dump(App\Validate::url('https://www.albertvalls.cat'));

// Test on "test_password"
var_dump(App\Validate::password('123456'));

