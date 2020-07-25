</form>
<form method="post">
    <div class="form-group" >
        <label >Subject Name:</label>
        <input type="text" class="form-control"  name="name" value="<?php echo $subject['name'] ?>" >
    </div>
    <div class="form-group">
        <label >Description:</label>
        <textarea class="form-control"  name="description" value="<?php echo $subject['description'] ?>"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>