<?php

use App\Http\Controllers\api;

$root = $_SERVER['DOCUMENT_ROOT'];
$file = file_get_contents($root . '/mailers/memberemail.html', 'r');

$file = str_replace('#Mobile', $data['Mobile'], $file);
$file = str_replace('#Password', $data['Password'], $file);
$file = str_replace('#contact_person', $data['contact_person'], $file);
$file = str_replace('#plan_name', $data['plan_name'], $file);

$file = str_replace('#plan_amount', $data['plan_amount'], $file);

$file = str_replace('#plan_no_of_members', $data['plan_no_of_members'], $file);
$file = str_replace('#start_date', $data['start_date'], $file);
$file = str_replace('#end_date', $data['end_date'], $file);
$file = str_replace('#app_link', $data['app_link'], $file);
echo $file;

// exit();

?>
