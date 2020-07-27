<div class="pt-3"></div>
<div class="conn">

</div>
<h2 style="color: #176719"> Class: <?php echo $classes[0][0] ?></h2>
<table class="table table-hover " style="width: 120%">
    <thead class="table-dark ">
    <tr>
        <th>STT</th>
        <th>Image</th>
        <th>Student Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
    </tr>
    </thead>
    <?php if (empty($classes)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>

        <?php foreach ($classes as $key => $class):?>

            <tr>
                <td><?php echo ++$key ?></td>
                <td > <img  src="<?php echo $class["image"]?>" width="50" height="50"  class="rounded-circle" alt=""> </td>
                <td><?php echo $class['name'] ?></td>
                <td><?php echo $class['age'] ?></td>
                <td><?php echo $class['gender'] ?></td>
                <td><?php echo $class['address'] ?></td>
            </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>
