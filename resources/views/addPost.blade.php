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
div {
    color: #f91e1e;
    font-size:1em;
    font-weight:bold;
  }

  label {
    color: #111311;
    font-size:2em;
  }

</style>

<body>
    @include('include.postNav')
<div class="container">
   <h1>welcome to our website</h1>
<form action="{{route('storePost')}}" method="POST">
@csrf
    <h2>Post Form</h2>
      <div class="form-group">
        <label for="title">Post Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="postTitle" value="{{ old('postTitle') }}">
        @error('postTitle')
        {{$message}}
        @enderror
      </div>
      <br>
      <div class="form-group">
        <label for="description">Post Description:</label>
        {{-- <input type="text" class="form-control" id="description" placeholder="Enter password" name="description"> --}}
        <textarea class="form-control" name="postDescription" id="" cols="60" rows="3" value="{{ old('postDescription') }}"></textarea>
        @error('postDescription')
        {{$message}}
        @enderror
      </div>
      <br>
      <div class="form-group">
        <label for="author">Post Author:</label>
        <input type="text" class="form-control" id="author" placeholder="Enter name" name="postAuthor" value="{{ old('postAuthor') }}">
        @error('postAuthor')
        {{$message}}
        @enderror
      </div>
      <br>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="postPublished">Post Published</label>
      </div>
<div>
<button type="submit" name="submit" class="btn btn-info"><span>INSERT</span></button>
</div>

</form>

</body>
</html>

