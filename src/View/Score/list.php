
<a href="index.php?page=add-score" class="btn btn-success">ADD SCORE</a>
<div class="pt-3"></div>
<div class="conn">
</div>
<table class="table table-hover " style="width: 120%">
    <thead class="table-dark ">
    <tr>
        <th>Student Name</th>
        <th>Subject Name</th>
        <th>Score</th>
        <th style="text-align: center">Action</th>
    </tr>
    </thead>
    <?php if (empty($scoress)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($scoress as $key => $score): ?>
            <tr>
                <td><?php echo $score[0]?></td>
                <td><?php echo $score[1]?></td>
                <td><?php echo $score['score']?></td>
            </tr>
        <?php endforeach; ?>
<!--    --><?php //foreach ($students as $view => $student): ?>
<!--            <tr >-->
<!--                <td style="text-align: center">-->
<!--                    <a href="index.php?page=delete-score&id=--><?php //echo $student->getId() ?><!--"-->
<!--                       onclick="return confirm('are you sure?')"-->
<!--                       class="btn btn-danger --><?php //if ($_SESSION['userLogin']['username'] === 'admin'): ?>
<!--                       d-inline-->
<!--                       --><?php //else: ?>
<!--                        d-none-->
<!--                       --><?php //endif; ?><!--">DELETE</a>-->
<!--                    <a href="index.php?page=update-score&id=--><?php //echo $student->getId() ?><!--"-->
<!--                       class="btn btn-primary">UPDATE</a>-->
<!--                </td>-->
<!--            </tr>-->
<!---->
<!--        --><?php //endforeach; ?>

    <?php endif; ?>
</table>

