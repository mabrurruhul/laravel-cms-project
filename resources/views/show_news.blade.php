<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row card">
            <h1 class="bg-info text-white p-2 text-center">Details</h1>
            <div class="col-md-6 card-body">
                
            </div>
            <div class="col-md-6 card">
                <h3>Photo</h3>
    <h4>Photo: <img src="{{asset('pictures/'.$news->photo)}}" alt="photo" height="100"></h4>
    <h4>Details:{{$news->name}}</h4>
            </div>
        </div>
    </div>

    
</body>
</html>