<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cricket Player</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Add Players</h2>

    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
</div>

    @endif

    @if ($eroors->any())
     <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
           <li> {{ $error }} </li>
        @endforeach
        </ul>
    
</div>

    @endif

    
    
</body>
</html>