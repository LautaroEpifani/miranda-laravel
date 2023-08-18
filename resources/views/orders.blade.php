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
      <div class="orders-container">
      <h1>Orders</h1>
         <div class="make-order">
            <a href="/createOrder">New Order</a>
          </div>
          </div> 
        <div class="room-card">
          <div class="order"> 
            <div class="description-flex">
            <h1 class="title-table">User</h1>
            <h1 class="title-table">Room</h1>
            <h1 class="title-table">Type</h1>
            <h1 class="title-table">Description</h1>
            </div>
            @foreach($orders as $order)
            <div class="description-flex">
              <h1 class="title-table">{{ $order -> user -> name  }}</h1>
              <h1 class="title-table">{{ $order -> room_id }}</h1>
              <h1 class="title-table">{{ $order -> type }}</h1>
              <h1 class="title-table">{{ $order -> description }}</h1> 
              <form action="{{ url('orders', $order->id) }}" method="GET">
                @csrf
                @method('edit')
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button>
              </form>
              <form action="{{ url('orders', $order->id) }}" method="POST">
                @csrf
                @method('delete')
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
              </svg></button>
              </form>
          </div>
          @endforeach
        </div>
       
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