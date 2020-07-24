
<form method="post">
    <div class="form-group" >
        <label for="exampleInputEmail1">Class Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Class Name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <textarea class="form-control" id="exampleInputPassword1" name="status"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>