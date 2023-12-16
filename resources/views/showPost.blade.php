
{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head> --}}

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
    h2{
        text-align: center;
    }
    li{
        font-size: 1.5em;


    }
    </style>
<body>
    @include('include.postNav')

<div class="container">
  <h2>THE POST SHOW</h2>
  <ul class="list-group">
    <li class="list-group-item list-group-item-success">The post ID is [{{$post->postId}}]</li>
    <li class="list-group-item list-group-item-info">The post title is : *{{$post->postTitle}}*</li>
    <li class="list-group-item list-group-item-warning">The post description is : <br>{{$post->postDescription}}
    <li class="list-group-item list-group-item-danger">The post author is "{{$post->postAuthor}}"</li>
    <li class="list-group-item list-group-item-warning">The post title is ({{$post->updated_at}})</li>
    <li class="list-group-item list-group-item-info">The post title is ({{$post->created_at}})</li>
    <li class="list-group-item list-group-item-success">The post is (( {{$post->postPublished? "published" : "Not published"}} ))</li>



  </ul>
</div>

{{-- <body> --}}
    {{-- <div class="container"> --}}
        {{-- <div class="well">The post ID is :{{$post->postId}}</div> --}}
{{-- <h2> <span style="color=black;"></span></h2>
<h2 class="active">The post title is : {{$post->postTitle}}</h2>
<h2>The post description is : {{$post->postDescription}}</h2>
<h2>The post authoris : {{$post->postAuthor}}</h2>
<h2>The post title is : {{$post->updated_at}}</h2>
<h2>The post title is : {{$post->created_at}}</h2>
<h2>The post is : {{$post->postPublished? "published" : "Not published"}}</h2>

    </div> --}}
</body>
</html>

