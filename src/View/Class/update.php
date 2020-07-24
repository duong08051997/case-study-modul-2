<!---->
</form>
<form method="post">
    <div class="form-group" >
        <label >Class Name:</label>
        <input type="text" class="form-control"  name="name" value="<?php echo $class['name'] ?>" >
    </div>
    <div class="form-group">
        <label >Status:</label>
        <textarea class="form-control"  name="status" value="<?php echo $class['status'] ?>"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>