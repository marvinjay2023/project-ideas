<?php 

$project_id = $_GET['id'];

$data = json_decode(file_get_contents("project.json"), true);

foreach ($data as $project) {
    if ($project['id'] == $project_id) {
        $result = $project;
    }
}

dd($result);


