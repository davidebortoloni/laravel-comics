@section('title', ' | Comics')
@extends('layouts.main')
@section('content')
<section id="books">
    <div class="container">
      <div class="row justify-content-center">
        @foreach ($comics as $i => $comic)
          <div class="col">
            <a href="{{ route('comics.show', $i) }}">
              <div class="book">
                  <div class="cover">
                    <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['series'] }}" />
                  </div>
                  <h3>{{ $comic['series'] }}</h3>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection