<form method="post">

    <div class="form-group" >

        <label for="exampleInputEmail1">Student Name: </label>
        <select name="student_id" class="form-control">
            <?php foreach ($students as $student) : ?>
                <option value="<?php echo $student->getId(); ?>"><?php echo $student->getName(); ?></option>
            <?php endforeach; ?>
        </select>
        <label for="exampleInputEmail1">Subject Name: </label>
        <select name="subject_id" class="form-control">
            <?php foreach ($subjects as $subject) : ?>
                <option value="<?php echo $subject->getId(); ?>"><?php echo $subject->getName(); ?></option>
            <?php endforeach; ?>
        </select>
        <label for="exampleInputEmail1">Score: </label>
        <input type="number" class="form-control" id="exampleInputEmail1"  name="score" >

    </div>

    <button type="submit" class="btn btn-primary">ADD</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>
