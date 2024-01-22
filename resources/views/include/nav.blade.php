<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">CARS</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="{{ request()->routeIs('car') ? 'active' : '' }}"><a href="{{route('car')}}">Home</a></li>
        <li class="{{ request()->routeIs('createCar') ? 'active' : '' }}"><a href="{{route('createCar')}}">Insert Car</a></li>
        <li class="{{ request()->routeIs('trashedCar') ? 'active' : '' }}"><a href="{{route('trashedCar')}}">Trashed Car</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">عربي</a></li>
      </ul>
    </div>
  </nav>
