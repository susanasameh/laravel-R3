<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
h1 {font-size:4em;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-align: center;
    text-transform: uppercase;
    color: #4CAF50;
}
h2 {
    font-size:3em;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    /* text-align: center; */
    text-transform: uppercase;
    color: #111311;
}
div
  {
    font-size:1.1em;
    font-weight:bold;
  }

</style>

<body>
    @include('include.postNav')


   <h1>welcome to our website</h1>


<div class="container">
    <h2>Post Form</h2>
    <form action="{{route('updatePost',$post->postId)}}" method="post">
        @csrf
        @method('put')
      <div class="form-group">
        <label for="title">Post Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="postTitle" value="{{$post->postTitle}}">
      </div>
      <div class="form-group">
        <label for="description">Post Description:</label>
        {{-- <input type="text" class="form-control" id="description" placeholder="Enter password" name="description"> --}}
        <textarea class="form-control" name="postDescription" id="" cols="60" rows="3">{{$post->postDescription}}</textarea>
      </div>
      <div class="form-group">
        <label for="author">Post Author:</label>
        <input type="text" class="form-control" id="author" placeholder="Enter title" name="postAuthor" value="{{$post->postAuthor}}">
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="postPublished" id="checkbox" @checked($post->postPublished)>Post Published</label>
      </div>
<div>
<button type="submit" name="update" class="btn btn-info"><span>Update</span></button>
</div>

</form>

</body>
</html>

