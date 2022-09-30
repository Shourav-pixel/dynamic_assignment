<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <h3>Edit person</h3>
        <form method ="post"action="{{url('edit-store/'.$users->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text"name="name"value="{{$users->name}}" class="form-control"id="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email"name="email"value="{{$users->email}}" class="form-control"id="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password"name="password"value="{{$users->password}}" class="form-control"id="">
            </div>
            <div class="form-group">
            <label for=""> Department</label>
            <select name="department" class="form-control"id="">
                <option value="">Select Type</option>
                <option value="it" {{ $users->department=='lab' ? 'selected': ''}}>Lab</option>
                <option value="accounts"  {{ $users->department=='theory' ? 'selected': ''}} >Theory</option>
            </select>
    </div>
            <div class="form-group">
                <button type="submit"class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
