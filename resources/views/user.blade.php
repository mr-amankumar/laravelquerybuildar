<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   <div class="container">
    <div class="row">
        <h3 class=" pt-3 px-4 fw-bold text-primary">User Detail</h3>
        <div class="col-sm-8">
          <table class="table table-bordered table-striped">
            <tr>
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                </thead>
            </tr>
            @foreach($data as $newdata)
                     <td>{{$newdata->name}}</td>
                     <td>{{$newdata->email}}</td>
                     <td>{{$newdata->age}}</td>
                     <td>{{$newdata->city}}</td>
            @endforeach
          </table>
        </div>
    </div>
   </div>
</body>
</html>