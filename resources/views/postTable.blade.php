<!DOCTYPE html>
<html lang="en">
<head>
  <title>POSTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>

    th{
        background-color: rgb(253, 240, 119);
        color:rgb(11, 11, 11);
        font-size: 1.2em;
    }
    td{
        font-size: 1.1em;
    }
    </style>
<body>
    @include('include.postNav')
<div class="container">
  <h2>Posts List</h2>
  <p></p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Published</th>
        <th>Author</th>
        <th>CreatedAt</th>
        <th>UpdatedAt</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>

        @foreach($post as $data)
      <tr>
        <td style="background-color: rgb(98, 169, 239)">{{$data->id}}</td>
        <td>{{$data->postTitle}}</td>
        <td>{{$data->postDescription}}</td>
        {{-- <td>{{$data->published}}</td> --}}
        <td style="background-color: rgb(117, 144, 250); font-size: 1em;
        color:black;">
            @if($data->postPublished)
                Yes
            @else
                No
            @endif
        </td>
        <td>{{$data->postAuthor}}</td>
        <td>{{$data->created_at}}</td>
        <td>{{$data->updated_at}}</td>
        <td><a href="editPost/{{ $data->id }}" style="
          background-color: rgb(133, 79, 234);
            color: rgb(6, 3, 3);
            font-style:italic;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
           hover:active;
          hover.active.background-color: rgb(133, 79, 234);
          border-radius: 50%;
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);


        ">Edit</a></td>
        <td><a href="showPost/{{ $data->id }}"
        style="background-color: rgb(79, 234, 154);;
            color: rgb(14, 11, 11);
            font-style:italic;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
           hover:active;
          hover.active.background-color: rgb(133, 79, 234);
          border-radius: 50%;
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

            ">Show</a></td>
            <td><a href="deletePost/{{ $data->id }}" onclick="return confirm('Are you sure you want to delete?')" style="
                background-color: rgb(237, 8, 8);
                  color: rgb(10, 9, 9);
                  font-style:italic;
                  padding: 14px 25px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                 hover:active;
                hover.active.background-color: rgb(133, 79, 234);
                border-radius: 50%;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

      ">Delete</a></td>
      </tr>
       @endforeach

    </tbody>
  </table>
</div>

</body>
</html>

