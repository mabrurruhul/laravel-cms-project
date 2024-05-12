<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="bg-info text-white text-center p-2">News List</h1>
    <hr>
    <a href="{{ route('mbr.create') }}" class="btn btn-primary btn-md">Add New News</a> <br> <br>
    <table border="1" class="table table-bordered table-hover">
        <thead>
            <tr class="text-center">
                <th>SL</th>
                <th>Photo</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{asset('pictures/'. $d->photo) }}" alt="photo" height="100"></td>
                    <td>{{ $d->name }}</td>
                    <td>
                        <form action="{{ route('mbr.destroy', $d->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-md"
                                onclick="return confirm('Are You Confirm to Delete')">Delete</button>
                        </form>
                        <a class="btn btn-primary btn-md" href="{{ route('mbr.edit', $d->id) }}">Edit </a>
                        <a class="btn btn-info btn-md" href="{{ route('mbr.show', $d->id) }}">Show</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>No Data Found!! </td>
                </tr>
            @endforelse
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>

</html>


