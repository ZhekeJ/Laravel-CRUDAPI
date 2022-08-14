<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Delete Clear Data</title>
</head>
<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col.md-4"></div>
            <div class="col.md-4 text-center">
                <div class="card">
                    <h4 class="card-header">Do you really want to delete?</h4>
                    <card class="body">
                        <a href="{{url('/customerData')}}" class="btn btn-sm btn-primary">No</a>
                        <a href="{{url('delete'.$id)}}" class="btn btn-sm btn-danger">Yes</a>
                    </card>
                </div>
            </div>
            <div class="col.md-4"></div>
        </div>
    </div>
</body>
</html>