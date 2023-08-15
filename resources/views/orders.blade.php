@extends('layout')
@section('content')
<main>
  <div class="about-hero__container">
    <div class="text text-about">
      <h6 class="description">Room Service</h6>
      <h3 class="title">Orders</h3>
    </div>
    <div class="banner">
      <a class="home" href="/">Home</a>
      <span>|</span>
      <h1 class="page">Orders</h1>
    </div>
  </div>
  <div class="room-cards__container">
    <div class="room-cards">
    @foreach($orders as $order)
        <div class="room-card">
          <div class="slider-container"> 
            <div class="description-flex">
            <h1 class="title-table">Type</h1>
            <h1 class="title-table">Description</h1>
            </div>
          <div class="description-flex">
            <h1 class="title-table">{{ $order -> type }}</h1>
            <h1 class="title-table">{{ $order -> description }}</h1>
            <!-- <h1 class="title">{{ $order -> type }}</h1>
            <h1 class="title">{{ $order -> type }}</h1> -->
          </div>
        </div>
        @endforeach
    </div>
    <ul class="pagination">
      {{$orders -> links()}}
    </ul>
  </div>
  @endsection
  @section('scripts')
</main>
<script src="/js/index.js"></script>

</body>

</html>
@endsection