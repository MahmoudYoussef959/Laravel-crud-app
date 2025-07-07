@extends('layouts.app')

@section('content')

<form action="{{route('posts.store')}}" method="POST">
 @csrf
    <div class="input-group mt-3 mb-5">
<input type="text" name="title" style="height: 50px" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
</div>


<div class="input-group mb-5">
<input type="text" name="description" style="height: 150px" class="form-control" placeholder="Description" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-5">
<input type="text" name="posted_by" style="height: 50px" class="form-control" placeholder="Post Creator" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-5">
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>

@endsection