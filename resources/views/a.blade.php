<!DOCTYPE html>
<html Lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>CRUD OPERATION</title>
</head>

    <body>
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Journey Date</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
            <tbody>
            @foreach ($booking as $book)
            <tr>
                <th>{{$book ->id}}</th>
                <td>{{$book ->journey}}</td>
                <td>{{$book ->fron}}</td>
                <td>{{$book ->to}}</td>
            <td>
                <a href="{{ url('/edit', $book->id)}}" class="btn btn-info btn-sm">Edit</a>
                <a href="{{ url('/delete', $book->id)}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@if (session()->has('status'))
<div class="alert alert-sucess">
    {{session('status')}}
</div >
@endif
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>


