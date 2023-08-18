@extends('layout')
@section('content')
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
                        <label for="">Room Number</label>
                            <select type="text" name="room_number">
                            <option value="" selected disabled hidden>Choose here</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <div class="input-error"></div>
                        </div>
                    </div>
                    <div class="container-input">
                        <div class="input-order">
                        <label for="">Choose what you want</label>
                            <select type="text" name="type">
                            <option value="" selected disabled hidden>Choose here</option>
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
    
  @endsection
  @section('scripts')
</main>
<script src="/js/index.js"></script>
</body>
</html>
@endsection