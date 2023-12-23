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
<style>
    .container{
        padding: 2px 8px;
        box-align: center;
    }
   /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  width: 500px;
  height: 500px;
  /* border: 1px solid #f1f1f1; */
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
  /* box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); */
  /* transition: 0.3s; */

  align-items: center;
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;

}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  /* background-color: #bbb; */
  /* max-width: auto; */
  max-width: 150%;
    max-height: 200px;
  color: black;
}

/* Style the back side */
.flip-card-back {
    max-width: 400px;
    max-height: 200px;
  background-color: rgb(248, 248, 250);
  color: rgb(16, 14, 14);
  transform: rotateY(180deg);
}



</style>
<body>
    @include('include.nav')
    {{-- <div class="card">
<div class="img"><img src="{{ asset('assets/images/'.$car->image) }}" alt="car" style="width:200px;"></div>
<h2>Name of the car : {{$car->title}}</h2>
<h2>Description :{{$car->description}}</h2>

<h2>Updated_at-->{{$car->updated_at}}</h2>
<h2>Created_at-->{{$car->created_at}}</h2>
<h2>{{$car->published? "published" : "Not published"}}</h2>
    </div> --}}

    <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="{{ asset('assets/images/'.$car->image) }}" alt="car" style="width:300px;height:300px;"> >
          </div>

          <div class="flip-card-back">
            <h2>Name of the car : {{$car->title}}</h2>
<h2>Description :{{$car->description}}</h2>

<h2>Updated_at-->{{$car->updated_at}}</h2>
<h2>Created_at-->{{$car->created_at}}</h2>
<h2>{{$car->published? "published" : "Not published"}}</h2>
    </div>
  </div>
</div>


</body>
</html>
