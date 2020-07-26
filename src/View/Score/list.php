<div class="pt-3"></div>
<a href="index.php?page=add-score" class="btn btn-success <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">ADD SCORE</a>
<div class="pt-3"></div>
<div class="conn">
</div>
<table class="table table-hover " style="width: 120%">
    <thead class="table-dark ">
    <tr>
        <th>Student Name</th>
        <th>Class Name</th>
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
                <td><?php echo $score[2]?></td>
                <td><?php echo $score[3]?></td>
                <td><?php echo $score[4]?></td>
                <td><?php echo $score['score']?></td>
                <td style="text-align: center">
                    <a href="index.php?page=delete-score&student_id=<?php echo $score[0] ?>&subject_id=<?php echo $score[2] ?>"
                       onclick="return confirm('are you sure?')"
                       class="btn btn-danger <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">DELETE</a>
                    <a href="index.php?page=update-score&id=<?php echo $score[0] ?>"
                       class="btn btn-primary <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">UPDATE</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

