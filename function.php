<?php 

//dump and die function
function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    
    die;
}

//identify difficulty or the project
function checkDifficulty(){
    $difficulty = [
        'Beginner' => 'Beginner',
        'Advanced Beginner' => 'Advanced Beginner',
        'Intermediate' => 'Intermediate',
        'Expert' => 'Expert'
    ];

    dd($difficulty);

}