@extends('admin.index')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
    ">
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Show</h2>
             
                <table class="table mt-3">
                    <thead>
                    <th>startTime</th>
                        <th>endTime</th>
                        <th>date</th>
                        <th>avaliableSeate</th>
                        <th>userId</th>
                        <th>hallId</th>
                       
                    </thead>

                    <tbody>
                        @foreach ($data as $person)
                            <tr>
                <td>{{ $person->startTime }}</td>
                   <td>{{ $person->endTime }}</td>
                   <td>{{ $person->date }}</td>
                   <td>{{ $person->availableSeate }}</td>
                   <td>{{ $person->userId }}</td>
                   <td>{{ $person->hallId}}</td>
                   @endforeach
                      
</tbody>


</table>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




@endsection