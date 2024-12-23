<?php 

$project_id = (int) $_GET['id'];

$data = json_decode(file_get_contents("project.json"), true);

//calling back findOrFail Function
$result = array_filter($data, fn($value) => $value['id'] === $project_id);

if(!$result){
    abort();
}

dd($result);



require 'view/info.view.php';



