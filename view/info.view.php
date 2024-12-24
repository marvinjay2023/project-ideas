<?php 

require 'partials/header.php';
require 'partials/nav.php';

?>
<main>
<div class="container mt-5">
    <div class="row bg-light"> 
        <h2 class="fw-bold"><?=  $project['title'] ?>
            <span class="fs-6 badge rounded-pill text-white fw-medium <?= checkDifficulty($project['difficulty'])?>">
                    <strong><?= $project['difficulty'] ?></strong>
            </span>
        </h2>
        <p><?=  $project['description'] ?></p>

        <p>Features</p>
        <ul class="mx-5">
        <?php foreach($project['features'] as $feature):?>
            <li><?= $feature ?></li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>

</main>
<?php 

require 'partials/footer.php';

?>