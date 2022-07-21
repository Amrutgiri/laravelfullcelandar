<!doctype html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
</head>
<body>
    <div class="container mt-3 mb-5">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">
                    <a href="/addevent" class="btn btn-success btn-rounded float-end mt-2 mb-2 me-3">ADD EVENT</a>
                    <a href="/editevent" class="btn btn-primary btn-rounded float-end mt-2 mb-2 me-3">EDIT EVENT</a>
                    <a href="/editevent" class="btn btn-danger btn-rounded float-end mt-2 mb-2 me-3">DELET EVENT</a>
                </div>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header" style="background:#2e6da4; color:white;">
                            Full Event Calender
                        </div>
                        <div class="card-body">
                            {!!$celander->calendar()!!}
                            {!!$celander->script()!!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>