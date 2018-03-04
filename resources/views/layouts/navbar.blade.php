<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-default fixed-top navbar-custom">
  <a class="navbar-brand" href="/">
    <img alt="IT4KIDS LOGO" class="hidden-xs" src="{{ URL::to('/') }}/images/logo.png" style="height:50px;padding:7.5px;">
    </img>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  Menu <i class="fa fa-bars">
  </i>
  </button>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" style="background-color: #ffffffc7;" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item">
        <a class="nav-link" href="/">
          Main
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('vision')}}">
          Vision
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('software')}}">
          Software
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('lehrmaterial')}}">
          Lehrmaterial
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('blog')}}">
          Blog
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('team')}}">
          Team
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/#mitmachen">
          Mitmachen
        </a>
      </li>
    </ul>
  </div>
  <!-- Brand and toggle get grouped for better mobile display -->
  
</nav>