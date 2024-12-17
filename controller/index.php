<?php 

$data = file_get_contents("project.json");

$project = json_decode($data, true);

require 'view/index.view.php';

