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
<body>
    @include('include.nav')

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="{{route('update',$car->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$car->title}}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      {{-- <input type="text" class="form-control" id="description" placeholder="Enter password" name="description"> --}}
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{$car->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" id="image" name="image">
        {{-- <img src="{{ asset('assets/images/1703013408.jpeg') }}" alt="car" style="width:200px;"> --}}
        <img src="{{ asset('assets/images/'.$car->image) }}" alt="car" style="width:200px;">
        {{-- <img src="{{ asset('storage/' . $model->image) }}"> --}}

        @error('image')
          {{ $message }}
        @enderror
      </div>

      <input type="hidden" name="oldImage" value="{{$car->image}}">

      <div class="form-group">
        <label for="category">Category:</label>
        <select name="category_id" id="">
          <option value="">Select Category</option>
          @foreach ($categories as $category)
          {{-- <option value="{{$category->id}}">{{$category->cat_name}}</option> --}}
          <option value="{{ $category->id }}" @selected(old('category_id', $car->category_id) == $category->id)>{{ $category->cat_name }}</option>
          {{-- @selected($category->cat_name == $car->category['cat_name']) --}}
          {{-- @selected($category->id == $car->category_id) --}}
          @endforeach

        </select>
        @error('category_id')
          {{ $message }}
        @enderror
      </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" name="published" @checked($car->published)>
        {{-- <input type="checkbox" name="active" value="1" @if($active) checked @endif>
<span>{{ $active ? 'Yes' : 'No' }}</span> --}}
        Published</label>
    </div>
    <button type="submit" name="update" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>
