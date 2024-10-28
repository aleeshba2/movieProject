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
                <h2 class="text-center">Users</h2>
                <a href={{ Route('add') }}>
                    <button class="btn btn-outline-primary">Add User</button>
                </a>
                <table class="table mt-3">
                    <thead>
                    <th>name</th>
                        <th>email</th>
                        <th>pasword</th>
                        <th>mobile</th>
                        <th>age</th>
                        <th>gender</th>
                        <th>image</th>
                        <th>role</th>
                    </thead>
rawurldecode
                    <tbody>
                        @foreach ($data as $person)
                            <tr>
                <td>{{ $person->name }}</td>
                   <td>{{ $person->email }}</td>
                   <td>{{ $person->password }}</td>
                   <td>{{ $person->Mobile }}</td>
                   <td>{{ $person->age }}</td>
                   <td>{{ $person->gender}}</td>
                   <td>{{ $person->image }}</td>
                   <td>{{ $person->role}}</td>
                                <td class="d-flex">
                                    <a href="" class="btn btn-outline-primary"> View </a>&nbsp;
                                    <a href={{ Route('edit', $person->id) }} class="btn btn-outline-success">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <a href={{ Route('delete', $person->id) }} class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
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


