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
  <h2>Trashed CARS LIST</h2>
  <p></p>
  <table class="table table-striped">
    <thead style="background-color: rgb(247, 175, 88)">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Published</th>
        <th>Image</th>
        <th>CreatedAt</th>
        <th>UpdatedAt</th>
        <th>Delete</th>
        <th>Restore</th>
      </tr>
    </thead>
    <tbody>

        @foreach($car as $data)
      <tr>
        <td style="background-color: rgb(149, 151, 149)">{{$data->id}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        {{-- <td>{{$data->published}}</td> --}}
        <td style="background-color: rgb(140, 192, 245)">
            @if($data->published)
                Yes
            @else
                No
            @endif
        </td>
        <td><img src="{{ asset('assets/images/'.$data->image)}}" alt="car" style="width:200px;"></td>
        <td>{{$data->created_at}}</td>
        <td>{{$data->updated_at}}</td>
        {{-- <td><a href="deleteCar/{{ $data->id }}">Delete</a></td> --}}
        <td><a href="forceDeleteCar/{{ $data->id }}" onclick="return confirm('Are you sure you want to delete?')" style="
            background-color: rgb(133, 79, 234);
              color: rgb(255, 254, 254);
              padding: 14px 25px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
             hover:active;
            hover.active.background-color: rgb(133, 79, 234);
            border-radius: 50%;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);


          ">Force Delete</a></td>
        <td><a href="restoreCar/{{ $data->id }}" onclick="return confirm('Are you sure you want to delete?')" style="background-color: rgb(79, 234, 154);;
            color: rgb(14, 11, 11);
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
           hover:active;
          hover.active.background-color: rgb(133, 79, 234);
          border-radius: 50%;
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

            ">Restore</a></td>

    </tr>
       @endforeach

    </tbody>
  </table>
</div>

</body>
</html>

