
<form method="post" enctype="multipart/form-data">
    <input type="file" name="my-file" class="form-group">
    <div class="form-group" >
        <label >Student Name: </label>
        <input type="text" class="form-control"  name="name" value="<?php echo $student['name']?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Age:</label>
        <input type="number" class="form-control"  name="age" value="<?php echo $student['age']?>">
    </div>

    <label >Gender: </label><br>
    <input type="radio"  name="gender" value="male" checked> Male<br>
    <input type="radio"   name="gender" value="female"> Female
    <div class="form-group" >
        <label >Address: </label>
        <input type="text" class="form-control"  name="address"  value="<?php echo $student['address']?>">
    </div>
    <div class="form-group" >
        <label >Email: </label>
        <input type="email" class="form-control" name="email" value="<?php echo $student['email']?>">
    </div>
    <div class="form-group" style="margin-top: 10px" >
        <label >Class Name: </label>
        <select name="class_id" class="form-control">
            <?php foreach ($classes as $class) : ?>
                <option value="<?php echo $class->getId(); ?>"><?php echo $class->getName(); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>