<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<body>

<h1>For the science lovers</h1>
{{-- <img src="./sceince.jpg"> --}}
{{-- <img src="C:\xampp\htdocs\laravel-R3\resources\views\sceince.jpg"> --}}
{{-- <img src=".\img\science.png"> --}}
{{-- <img src="./img/science.png"> --}}
{{-- <img src="{{asset('./img/science.png') }}" alt="science lovers"> --}}
<img src="{{asset('./science.jpg') }}" alt="science lovers">
<img src="{{asset('C:\xampp\htdocs\laravel-R3\img\sceince_blogs.jpg') }}" alt="science lovers">

</body>
</html>
