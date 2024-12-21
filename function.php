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
        'Advanced' => 'advance',
        'Intermediate' => 'text-bg-warning text-white',
        'Expert' => 'text-bg-danger'
    ];

    if(array_key_exists($value, $difficulty)){
        return $difficulty[$value];
    }

}