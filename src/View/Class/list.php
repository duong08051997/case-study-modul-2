<a href="index.php?page=add-class" class="btn btn-success">ADD CLASS</a><br>
<div class="pt-3"></div>
<table class="table table-hover text-center" style="width: 120%">
    <thead class="table-dark">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <?php if (empty($classes)): ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($classes as $key => $class): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td>
                     <?php echo $class->getName() ?>
                </td>
                <td><?php echo $class->getStatus() ?></td>
                <td>
                    <a href="index.php?page=delete-class&id=<?php echo $class->getId() ?>"
                       onclick="return confirm('are you sure')" class="btn btn-danger">DELETE</a>
                    <a href="index.php?page=update-class&id=<?php echo $class->getId() ?>" class="btn btn-primary">UPDATE</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>