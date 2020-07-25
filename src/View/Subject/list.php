<a href="index.php?page=add-subject" class="btn btn-success">ADD SUBJECT</a>
<div class="pt-3"></div>
<div class="conn">

</div>
<table class="table table-hover " style="width: 120%">
    <thead class="table-dark text-center">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Description</th>
        <th></th>

    </tr>
    </thead>
    <?php if (empty($subjects)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($subjects as $key => $subject): ?>
            <tr >
                <td><?php echo ++$key ?></td>
                <td>
                    <?php echo $subject->getName() ?>
                </td>
                <td><?php echo $subject->getDescription() ?></td>
                <td style="text-align: center">
                    <a href="index.php?page=delete-subject&id=<?php echo $subject->getId() ?>"
                       onclick="return confirm('are you sure?')"
                       class="btn btn-danger <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">DELETE</a>
                    <a href="index.php?page=update-subject&id=<?php echo $subject->getId() ?>"
                       class="btn btn-primary">UPDATE</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>