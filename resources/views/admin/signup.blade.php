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
                <h2 class="text-center">Add Users</h2>
                <form action={{ Route('save') }} method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" class="form-control" id="name" placeholder="John Doe" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" class="form-control" id="email" placeholder="abc@gmail.com"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile: </label>
                        <input type="number" class="form-control" id="mobile" placeholder="021-23598989" name="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age: </label>
                        <input type="number" class="form-control" id="age" placeholder="22" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Password: </label>
                        <input type="number" class="form-control" id="salary" placeholder="25 2354" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Gender: </label>
                        <input type="text" class="form-control" id="gender" placeholder="Male-Female" name="Gender">
                        
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image: </label>
                        <input type="file" class="form-control" id="salary" placeholder="image" name="image">
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">role: </label>
                        <input type="role" class="form-control" id="role" placeholder="role" name="role">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>

</body>
</html>

@endsection