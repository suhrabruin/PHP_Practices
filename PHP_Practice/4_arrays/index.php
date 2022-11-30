<?php
$cities = ["kabul","kandahar","herat","mazar"];
$students = ["Ali","Akbar","Ahmad","Karim","Dawood"];


$emp1=[
    "name" => "Ali",
    "title" => "CEO",
    "salary"=> 3000,
    "join_date" => date('19-04-2015')
];
$emp2=[
    "name" => "Anwar",
    "title" => "CIO",
    "salary"=> 2700,
    "join_date" => date('05-01-2018')
];

$employees = [$emp1,$emp2];

// echo '<pre>';
// print_r($employees);
// echo '</pre>';

require_once 'index.view.php';