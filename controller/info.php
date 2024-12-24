<?php 

$project_id = (int) $_GET['id'];


$data = json_decode(file_get_contents("project.json"), true);

$project = findOrfail($data, $project_id);

require 'view/info.view.php';


//Dont Mind This Code
//calling back findOrFail Function
// $result = array_filter($data, fn($value) => $value['id'] === $project_id);
