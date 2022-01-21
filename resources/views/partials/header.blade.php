@dump(Route::currentRouteName())
<header>
  <div class="container">
    <div class="logo">
    <img src="{{asset('img/dc-logo.png')}}" alt="">
  </div>
  <div class="menu">
    <ul>
      <li>
        <a class="{{ (Route::currentRouteName() === characters)? 'active' : '' }}" href="{{route('characters')}}">CHARACTERS</a>
      </li>
      <li>
        <a class="active" href="">COMICS</a>
      </li>
      <li>
        <a class="" href="">MOVIES</a>
      </li>
      <li>
        <a class="" href="">TV</a>
      </li>
      <li>
        <a class="" href="">GAMES</a>
      </li>
      <li>
        <a class="" href="">COLLECTIBILES</a>
      </li>
      <li>
        <a class="" href="">VIDEOS</a>
      </li>
      <li>
        <a class="" href="">FANS</a>
      </li>
      <li>
        <a class="" href="">NEWS</a>
      </li>
      <li>
        <a class="" href="">SHOP</a>
      </li>
    </ul>
  </div>
  </div>
</header>
