<?php 

//dump and die function
function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    
    //die;
}

//identify difficulty or the project
function checkDifficulty($value){
    $difficulty = [
        'Beginner' => 'beginner',
        'Advanced Beginner' => 'advanceBeginner',
        'Advanced' => 'advance',
        'Intermediate' => 'intermediate',
        'Expert' => 'expert'
    ];

    if(array_key_exists($value, $difficulty)){
        return $difficulty[$value];
    }

}

// function findOrfail($value, $project_id){

//     return $value['id'] === $project_id; 

// }

function findOrfail($data, $project_id, $result = []){
    foreach($data as $projects){
        if($projects['id'] === $project_id){
            $result = $projects;
        }
    }

    if(empty($result)){
        abort();
    }
}

