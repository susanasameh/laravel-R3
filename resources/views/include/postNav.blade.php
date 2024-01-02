<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">POSTS</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="{{ request()->routeIs('post') ? 'active' : '' }}"><a href="{{route('post')}}">Home</a></li>
        <li class="{{ request()->routeIs('addPost') ? 'active' : '' }}"><a href="{{route('addPost')}}">Insert Post</a></li>
        <li class="{{ request()->routeIs('trashedPost') ? 'active' : '' }}"><a href="{{route('trashedPost')}}">Trashed Post</a></li>
        {{-- <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li> --}}
      </ul>
    </div>
  </nav>
