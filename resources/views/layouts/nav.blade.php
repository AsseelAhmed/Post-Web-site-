
        
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="/">Home</a></li>
    @if(Auth::check())
      <li><a  href="/create">Create Post</a></li>
    @endif  
     
      @if(!Auth::check())
      <li><a style="margin-left: 600px;" class="nav-link"href="/login">Sign In</a></li>
      <li><a  class="nav-link"href="/register">Sign up</a></li>
      @endif  

      @if(Auth::check())
      <li><a style="margin-left: 500px;" href="#">{{Auth::user()->name}}</a></li>
      <li><a  href="/logout">log out</a></li>

    @endif  
    </ul>
  </div>
</nav>