<?php 

//dump and die function
function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    
    die;
}

//identify difficulty or the project
function checkDifficulty($value){
    $difficulty = [
        'Beginner' => 'text-bg-success',
        'Advanced Beginner' => 'text-bg-primary',
        'Advanced' => 'text-bg-secondary',
        'Intermediate' => 'text-bg-warning',
        'Expert' => 'text-bg-danger'
    ];

    if(array_key_exists($value, $difficulty)){
        return $difficulty[$value];
    }

}