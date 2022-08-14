<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Clear Data Table</title>
</head>
<body>
    <div class="container">

        <h1 class="mt-4 d-flex justify-content-center">Clear Data Table</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Total Amount</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customerData as $profile)
                <tr>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->phone}}</td>
                    <td>{{$profile->address}}</td>
                    <td>{{$profile->total_amount}}</td>
                    <td><a href="{{ url('/edit'.$profile->id) }}" class="btn btn-sm btn-success">Edit</a></td>
                    <td><a href="{{ url('/deletePage'.$profile->id) }}" class="btn btn-sm btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>