<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pridaj aktualitu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Roboto+Slab:wght@100..900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="background-main">
<div class="add_items">
    <form action="{{url('potvrdOznamy')}}" method="post" enctype="multipart/form-data">
        @csrf
        @csrf
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-warning" role="alert">{{$error}}</div>
            @endforeach
        @endif
        <div>
            <label class="info-text date">Názov:</label>
            <input class="inputs" type="text" name="nazov" required>
        </div>
        <div>
            <label class="info-text info-poster">Súbor:</label>
            <input class="inputs" type="file" name="subor" required>
        </div>
        <button class="btn" type="submit">Pridaj oznamy</button>
    </form>
</div>
</body>
</html>
