<div class="pt-3"></div>
<a href="index.php?page=add-subject" class="btn btn-success <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">ADD SUBJECT</a>
<div class="pt-3"></div>
<div class="conn">

</div>
<table class="table table-hover " style="width: 120%">
    <thead class="table-dark ">
    <tr>
        <th>STT</th>
        <th>Subject Name</th>
        <th>Description</th>
        <th style="text-align: center">Action</th>

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