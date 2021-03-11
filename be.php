<?php
header('Access-Control-Allow-Origin: *');
$params = $_GET;
$start = $params['start'];
$end = $params['end'];

$events = [
    [
        "title" => "Xin chao",
        "start" => "2021-03-01",
    ],
    [
        "title" => "Xin chao 1",
        "start" => "2021-03-05",
        "end" => "2021-03-07",
    ],
    [
        "title" => "Xin chao 2",
        "start" => "2021-03-08",
        "end" => "2021-03-09",
    ],
    [
        "title" => "Xin chao 3",
        "start" => "2021-04-05",
        "end" => "2021-04-07",
    ],
    [
        "title" => "Xin chao 4",
        "start" => "2021-03-09",
        "end" => "2021-03-10",
        "allDay" => false,
    ],
];
echo json_encode($events);
