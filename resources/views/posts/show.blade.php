@extends('layouts.app')

@section('content')
<div class="card-body text-center mt-4 d-flex flex-column align-items-center">
    <div class="card mb-4" style="width: 80%;">
    <div class="">
    <p class="display-6">Post Info</p> 
    </div>
              <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->description}}</p>
      </div>
    </div>

    <div class="card" style="width: 80%;">
     <div class="">
    <p class="display-6">Post Creator Info</p> 
    </div>
    <div class="card-body">
        <h5 class="card-title"> {{$post->posted_by}}</h5>
        <p class="card-text">Created at: {{$post->created_at}}</p>
        @if ($post->updated_at == null)
            <p class="card-text">No updates</p>
        @else
            <p class="card-text">Last update: {{$post->updated_at}}</p>
        @endif

      </div>
    </div>
  </div>
</div>
</body>
@endsection