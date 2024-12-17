<?php 

require 'partials/header.php';

?>
<main>

<table>
    <thead>
        <tr>
            <th>title</th>
            <th>difficulty</th>
        </th>
    </thead>

    <tbody>
    <?php foreach($project as $projects): ?>
        <tr> 
            <td ><a href="/info?id=<?= $projects['id']?>"><?= $projects['title'] ?></a></td>
            <td><?= $projects['difficulty'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</main>
<?php 

require 'partials/footer.php';

?>