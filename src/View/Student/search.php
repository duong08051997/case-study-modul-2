<a href="index.php?page=add-student&id=<?php echo $class['id'] ?>" class="btn btn-success">ADD STUDENT</a>
<div class="pt-3"></div>
<h2> Class : <?php echo $class['name'] ?></h2>
<div class="conn">

</div>
<table class="table table-hover " style="width: 120%">
    <thead class="table-dark text-center">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Email</th>
        <th style="text-align: center">Action</th>
        <th></th>

    </tr>
    </thead>
    <?php if (empty($students)) : ?>
        <tr>
            <td>No data</td>
        </tr>
    <?php else: ?>
        <?php foreach ($students

                       as $key => $student): ?>
            <tr >
                <td><?php echo ++$key ?></td>
                <td>
                    <a style="font-size: 120%"
                       href="index.php?page=list-score&student_id=<?php echo $student->getId() ?>"><?php echo $student->getName() ?></a>
                </td>
                <td><?php echo $student->getAge() ?></td>
                <td><?php echo $student->getGender() ?></td>
                <td><?php echo $student->getAddress() ?></td>
                <td><?php echo $student->getEmail() ?></td>
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
