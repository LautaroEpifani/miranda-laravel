@extends('layout')
@section('content')
@if ($form == 'orders')

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
            <a href="/orders/makeOrder">New Order</a>
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
       
          </div>
          @endforeach
        </div>
       
    </div>
    <ul class="pagination">
      {{$orders -> links()}}
    </ul>
  </div>
  @else
  <main>
    <div class="about-hero__container">
        <div class="text text-about">
            <h6 class="description">Room Service</h6>
            <h3 class="title">Make an Order</h3>
        </div>
        <div class="banner">
            <a class="home" href="/">Home</a>
            <span>|</span>
            <h1 class="page">Order</h1>
            
        </div>
    </div>
    
    <div class="order__container">
  @if(session()->has('message'))
  <div class="submit-message-container">
                <h1>Thank you very much,</h1>
                <h4>Your order has been sent successfully!</h4>
    </div>
    @endif  
      
            <form class="contact-inputs" action="" method="POST">
                @csrf
                <div class="container-inputs-order">
                    <div class="container-input">
                        <div class="input-order">
                        <label for="">Choose what you want</label>
                            <select type="text" name="type">
                                <option value="drinks">Drinks</option>
                                <option value="food">Food</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="input-error"></div>
                        </div>
                    </div>
                    <div class="container-input">
                        <div class="input-order">
                            <label for="">Request</label>
                            <textarea type="text" name="description"></textarea>
                            <div class="input-error"></div>
                        </div>
                    </div>
                  
                </div>
                <button type="submit" name="submit" class="btn-check-order">Send</button>
            </form>
    


    </div>
    
    @endif
  @endsection
  @section('scripts')
</main>
<script src="/js/index.js"></script>
</body>
</html>
@endsection