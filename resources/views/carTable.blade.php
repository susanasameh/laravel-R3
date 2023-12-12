<!DOCTYPE html>
<html lang="en">
<head>
  <title>CARS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('include.nav')
<div class="container">
  <h2>CARS LIST</h2>
  <p></p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Published</th>
        <th>CreatedAt</th>
        <th>UpdatedAt</th>
      </tr>
    </thead>
    <tbody>

        @foreach($car as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        {{-- <td>{{$data->published}}</td> --}}
        <td>
            @if($data->published)
                Yes
            @else
                No
            @endif
        </td>
        <td>{{$data->created_at}}</td>
        <td>{{$data->updated_at}}</td>
      </tr>
       @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
