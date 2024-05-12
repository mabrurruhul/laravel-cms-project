<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   <div class="container">
    <div class="row">
        <div class="col-md-12 form-control ">
            <h1 class="text-center bg-info text-white p-2">Add News </h1>
            <hr>
            {!! Form::open(['url' => route('mbr.store'), 'files' => true]) !!}
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('photo', 'Upload Photo') !!}
                            {!! Form::file('photo', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <br>
                    @if ($errors->has('photo'))
                        {{ $errors->first('photo') }}
                    @endif
        
                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', '', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <br>
                    @if ($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif
        
                    
                    <br>
                    @if ($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif
        
        
                    <br><br><br>
                    <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
   </div>

</body>

</html>
