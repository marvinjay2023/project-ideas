<?php 

require 'partials/header.php';

?>
<main>

<div class="table-responsive table-responsive-data3 mx-5 mt-5">
    <table id="projects" class="table table-striped" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Difficulty</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($project as $projects): ?>
                    <tr> 
                    <td><a href="/info?id=<?= $projects['id']?>"><?= $projects['title'] ?></a></td>
                    <td><span class="badge rounded-pill text-bg-danger"><strong><?= $projects['difficulty'] ?></strong></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
</div>





</main>
<?php 

require 'partials/footer.php';

?>