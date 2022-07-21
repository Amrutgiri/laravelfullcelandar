<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <div class="col-md-12">
                <hr>
                <h4>Event Edit
                    <a href="{{url('event')}}" class="btn btn-success btn-rounded float-end">Back</a>
                </h4>
                <hr>
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Event Name</td>
                            <td>Color</td>
                            <td>Start Date</td>
                            <td>End Date</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->color}}</td>
                                <td>{{$item->start}}</td>
                                <td>{{$item->end}}</td>
                                <td>
                                    <a href="{{url('event/edit/'.$item->id)}}" class="btn btn-primary btn-rounded">Edit</a>
                                    <a href="{{url('event/delete/'.$item->id)}}" class="btn btn-danger btn-rounded">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-12">
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>