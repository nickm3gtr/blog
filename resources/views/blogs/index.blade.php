@extends('layout')

@section('content')
    
  <!-- Two -->
  <section id="two" class="wrapper style2 special">
    <div class="container">
      <header class="major">
        <h2>Latest from the Blog</h2>
      </header>

      @foreach ($blogs as $blog)
        @if($blog->id % 2 != 0)
          <div class="row 150%">
        @endif
          <div class="6u 12u$(xsmall)">
            <div class="image fit captioned">
              <img src="images/pic02.jpg" alt="" />
              <h3>{{ $blog->title }}</h3>
            </div>
          </div>
        @if($blog->id % 2 == 0 || $loop->last)
          </div>
        @endif
      @endforeach
    </div>
  </section>

@endsection