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
      </tr>
    </thead>
    <tbody>

        @foreach($post as $data)
      <tr>
        <td>{{$data->postId}}</td>
        <td>{{$data->postTitle}}</td>
        <td>{{$data->postDescription}}</td>
        {{-- <td>{{$data->published}}</td> --}}
        <td>
            @if($data->postPublished)
                Yes
            @else
                No
            @endif
        </td>
        <td>{{$data->postAuthor}}</td>
        <td>{{$data->created_at}}</td>
        <td>{{$data->updated_at}}</td>
      </tr>
       @endforeach

    </tbody>
  </table>
</div>

</body>
</html>

