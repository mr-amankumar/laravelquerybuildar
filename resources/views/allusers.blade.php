<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container {
  width: 50%; /* Change this value according to your requirement */
  margin: 0 auto; /* This centers the container horizontally */
}
    </style>
</head>
<body>
    
    <div class="container">
        <h1 class="  fw-bold text-primary pt-4">All Users List</h1>
        <div class="row">
            <div class="col-10 text-primary">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($data as $myuser)
                    <tr>
                        <td>{{$myuser->id}}</td>
                        <td>{{$myuser->name}}</td>
                        <td>{{$myuser->email}}</td>
                        <td>{{$myuser->age}}</td>
                        <td>{{$myuser->city}}</td>
                        <td><a href="{{route('view.user',$myuser->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        <td><a href="{{route('delete.user',$myuser->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>