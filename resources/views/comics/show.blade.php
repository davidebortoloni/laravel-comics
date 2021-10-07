@section('title', " | $series")
@extends('layouts.main')
@section('content')
<section id="book">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col">
            <h2>{{ $series }}</h2>
            <div class="book d-flex">
                <div class="cover">
                  <img src="{{ $thumb }}" alt="{{ $series }}" />
                </div>
                <p>{{ $description }}</p>
              </div>
          </div>
      </div>
    </div>
  </section>
@endsection