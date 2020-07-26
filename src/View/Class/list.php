<div class="pt-3"></div>

<a href="index.php?page=add-class" class="btn btn-success <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">ADD CLASS</a><br>
<div class="pt-3"></div>
<table class="table table-hover" style="width: 120%">
    <thead class="table-dark">
    <tr>
        <th>STT</th>
        <th>Class Name</th>
        <th>Status</th>
        <th style="text-align: center">Action</th>
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
                    <a style="font-size: 120%"
                       href="index.php?page=detail-class&class_id=<?php echo $class->getId() ?>"><?php echo $class->getName() ?></a>
                </td>
                <td><?php echo $class->getStatus() ?></td>
                <td style="text-align: center">
                    <a href="index.php?page=delete-class&id=<?php echo $class->getId() ?>"
                       onclick="return confirm('are you sure')" class="btn btn-danger
                        <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">DELETE</a>
                    <a href="index.php?page=update-class&id=<?php echo $class->getId() ?>" class="btn btn-primary <?php if ($_SESSION['userLogin']['username'] === 'admin'): ?>
                       d-inline
                       <?php else: ?>
                        d-none
                       <?php endif; ?>">UPDATE</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>