
<form method="post">
    <div class="form-group" >
        <label for="exampleInputEmail1">Subject Name: </label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Subject Name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description:</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>