<header class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col h-100">
        <a href="{{ route('home') }}"><img src="{{ asset('img/dc-logo.png') }}" alt="DC-logo" class="h-100" /></a>
      </div>
      <div class="col h-100">
        <ul class="h-100">
            <li class="h-100 {{ request()->routeIs('characters') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('characters') }}">
                          characters
                      </a>
                  </div>
            </li>
            <li class="h-100 {{ request()->routeIs('comics.index') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('comics.index') }}">
                          comics
                      </a>
                  </div>
            </li>
            <li class="h-100 {{ request()->routeIs('movies') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('movies') }}">
                          movies
                      </a>
                  </div>
            </li>
            <li class="h-100 {{ request()->routeIs('tv') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('tv') }}">
                          tv
                      </a>
                  </div>
            </li>
            <li class="h-100 {{ request()->routeIs('games') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('games') }}">
                          games
                      </a>
                  </div>
            </li>
            <li class="h-100 {{ request()->routeIs('collectibles') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('collectibles') }}">
                          collectibles
                      </a>
                  </div>
            </li>
            <li class="h-100 {{ request()->routeIs('videos') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('videos') }}">
                          videos
                      </a>
                  </div>
            </li>
            <li class="h-100 {{ request()->routeIs('fans') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('fans') }}">
                          fans
                      </a>
                  </div>
            </li>
            <li class="h-100 {{ request()->routeIs('news') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('news') }}">
                          news
                      </a>
                  </div>
            </li>
            <li class="h-100 {{ request()->routeIs('shop') ? 'active' : ''}}">
                  <div class="h-100 d-flex align-items-center">
                      <a class="text-grey text-small" href="{{ route('shop') }}">
                          shop
                      </a>
                  </div>
            </li>
          </ul>
      </div>
    </div>
  </header>