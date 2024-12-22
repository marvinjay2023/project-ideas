<?php 

require 'partials/header.php';
require 'partials/nav.php';

?>
<main>

<div class="container">
    <div class="row">
        <div class="table-responsive mt-5">
            <table id="projects" class="table table-hover" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th class="visually-hidden">Id</th>
                            <th>Title</th>
                            <th>Difficulty</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($project as $projects): ?>
                            <tr> 
                            <td class="visually-hidden"><?= $projects['id'] ?></td>
                            <td><a clas="" href="/info?id=<?= $projects['id']?>"><?= $projects['title'] ?></a></td>
                            <td><span class="badge rounded-pill text-white fw-medium <?= checkDifficulty($projects['difficulty'])?>">
                                <strong><?= $projects['difficulty'] ?></strong>
                                </span>
                            </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>





</main>
<?php 

require 'partials/footer.php';

?>