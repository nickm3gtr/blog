@extends('layout')

@section('content')

  <div class="container">
    <div class="mt-5">
      <header class="major special">
        <p>{{ $blog->title }}</p>
      </header>
  
    <a href="#" class="image fit"><img src="/images/pic01.jpg" alt="" /></a>
  
    <p>{{ $blog->body }}</p>
    </div>
  </div>
    
@endsection