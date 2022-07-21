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
                    <h4>Update Event To Calendar</h4>
                </div>
                <div class="card-body bordered bg-light">
                    <h3>Task : Update Data</h3>
                    <form action="{{url('jaymahadev/'.$events->id)}}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="_method" value="{{$events->id}}">
                        <label>Name of Event</label>
                        <input type="text" class="form-control" value="{{$events->title}}" name="title"><br><br>
                        
                        <label>Color</label>
                        <input type="color" class="form-control"value="{{$events->color}}" name="color"><br><br>
                        
                        <label>Start Date Of Event</label>
                        <input type="date" class="form-control" value="{{$events->start}}" name="start_date"><br><br>
                        
                        <label>End Date Of Event</label>
                        <input type="date" class="form-control" value="{{$events->end}}" name="end_date"><br><br>
                        
                        <button type="submit" class="btn btn-success btn-rounded float-end me-3">Update</button>
                        
                        <a href="{{url('event')}}" class="btn btn-primary btn-rounded float-end me-3">Back</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>