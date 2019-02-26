<style>
.active{
  color: #020401 !important
}
</style>
<div class="collapse navbar-collapse navbar_flexend" id="collapsibleNavbar">

    <ul class="navbar-nav">

         <li class="nav-item">

            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>

        </li>

        <li class="nav-item">

            <a class="nav-link {{ request()->is('/hoehetwerkt') ? 'active' : '' }}" href="{{ url('/hoehetwerkt') }}">Hoe het werkt</a>

        </li>

        <li class="nav-item">

            <a class="nav-link {{ request()->is('/overons') ? 'active' : '' }}" href="{{ url('/overons') }}">Over ons</a>

        </li>

        <li class="nav-item">

            <a class="nav-link {{ request()->is('/wordbijlesgever') ? 'active' : '' }}" href="{{ url('/wordbijlesgever') }}">Word bijlesgever</a>

        </li>

        <li class="nav-item">

            <a class="nav-link {{ request()->is('/contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>

        </li>

         <li class="nav-item">

            <a class="nav-link {{ request()->is('/login') ? 'active' : '' }}" href="{{ url('/login') }}">Login</a>

        </li>

    </ul>

</div>