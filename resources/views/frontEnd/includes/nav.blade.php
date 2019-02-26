<style>
.active{
  color: #020401 !important
}
</style>
<nav class="navbar navbar-expand-lg">

  <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('public/temp/img/logo.png')}}" alt="" width="100%"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

    <i class="fas fa-align-justify" style="color: #fff;"></i>

  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

    <div class="navbar-nav ml-auto">

      <a class="nav-item nav-link" 
       @if(request()->is('/'))
            style="color: #020401 !important"
       @endif
      href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>

      <a class="nav-item nav-link" 
      @if(request()->is('/hoehetwerkt'))
            style="color: #020401 !important"
       @endif 
      href="{{ url('/hoehetwerkt') }}">Hoe het werkt</a>

      <a class="nav-item nav-link" 
       @if(request()->is('/overons'))
            style="color: #020401 !important"
       @endif 
      href="{{ url('/overons') }}">Over ons</a>

      <a class="nav-item nav-link" 
       @if(request()->is('/wordbijlesgever'))
            style="color: #020401 !important"
       @endif 
      href="{{ url('/wordbijlesgever') }}">Word bijlesgever</a>

      <a class="nav-item nav-link" 
      @if(request()->is('/contact'))
            style="color: #020401 !important"
       @endif 
      href="{{ url('/contact') }}">Contact</a>

      <a class="nav-item nav-link" 
       @if(request()->is('/login'))
            style="color: #020401 !important"
       @endif 
      href="{{ url('/login') }}">Login</a>

    </div>

  </div>

</nav>