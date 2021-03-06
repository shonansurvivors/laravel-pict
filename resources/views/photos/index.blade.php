@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      <div class="card-columns">
        @foreach($photos as $photo)
          <div class="">
            <a href="{{ route('photos.show', ['photo' => $photo]) }}">
              <div class="card border-0">

                <img src="{{ Storage::url($photo->filepath) }}" class="card-img photo-rounded">

                <div class="card-body">
                  <h6 class="card-title text-muted">{{ $photo->title }}</h6>
                </div>

              </div>
            </a>
          </div>
        @endforeach
      </div>

    </div>
  </div>
@endsection
