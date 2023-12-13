<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Car</title>
</head>
<body>
<h2>{{$car->title}}</h2>
<h2>{{$car->description}}</h2>
<h2>{{$car->updated_at}}</h2>
<h2>{{$car->created_at}}</h2>
<h2>{{$car->published? "published" : "Not published"}}</h2>

</body>
</html>
