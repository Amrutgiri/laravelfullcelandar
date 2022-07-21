<!doctype html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5 shadow">
                <div class="card-header bg-success bordered text-white">
                    <h4>Add Event To Calendar</h4>
                </div>
                <div class="card-body bordered bg-light">
                    <h3>Task : Add Data</h3>
                    <form action="{{url('addevent')}}" method="POST">
                        @csrf
                        <label>Name of Event</label>
                        <input type="text" class="form-control" name="title"><br><br>
                        
                        <label>Color</label>
                        <input type="color" class="form-control" name="color"><br><br>
                        
                        <label>Start Date Of Event</label>
                        <input type="dateTime-local" class="form-control date" name="start_date"><br><br>
                        
                        <label>End Date Of Event</label>
                        <input type="dateTime-local" class="form-control date" name="end_date"><br><br>
                        
                        <input type="submit" class="btn btn-success btn-rounded float-end me-3" value="Add Event Data">
                       <a href="{{url('event')}}" class="btn btn-primary btn-rounded float-end me-3">Back</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>