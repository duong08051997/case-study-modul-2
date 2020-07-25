
<a href="index.php?page=add-score" class="btn btn-success">ADD SCORE</a>
<div class="pt-3"></div>
<div class="conn">

</div>
<table class="table table-hover " style="width: 120%">
    <thead class="table-dark text-center">
    <tr>
        <th>Student Name</th>
        <th>Subject Name</th>
        <th>Score</th>
        <th>action</th>
    </tr>
    </thead>
    <?php if (empty($scores)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($scores as $key => $score): ?>
            <tr >
                <td>
                    <select name="student_id">
                        <?php foreach ($students as $student) : ?>
                            <option value="<?php echo $student->getId(); ?>"><?php echo $student->getName(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <select name="subject_id">
                        <?php foreach ($subjects as $subject) : ?>
                            <option value="<?php echo $subject->getId(); ?>"><?php echo $subject->getName(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td><?php echo $score->getScore() ?></td>
                <td style="text-align: center">
                    <a href="index.php?page=delete-student&id=<?php echo $student->getId() ?>"
                       onclick="return confirm('are you sure?')"
                       class="btn btn-danger <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">DELETE</a>
                    <a href="index.php?page=update-student&id=<?php echo $student->getId() ?>"
                       class="btn btn-primary">UPDATE</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

