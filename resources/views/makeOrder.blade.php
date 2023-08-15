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
    
    <div class="blog-contact__container">
  @if(session()->has('message'))
  <div class="submit-message-container">
                <h1>Thank you very much,</h1>
                <h4>Your order has been sent successfully!</h4>
    </div>
    @endif  
      
            <form class="contact-inputs" action="" method="POST">
                @csrf
                <div class="container-inputs">
                    <div class="container-input">
                        <div class="input">
                           
                            <select type="text" name="type" >
                                <option value="drinks">Drinks</option>
                                <option value="food">Food</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="input-error"></div>
                        </div>
                    </div>
                    <div class="container-input">
                        <div class="input">
                          
                            <input type="text" name="description">
                            <div class="input-error"></div>
                        </div>
                    </div>
                  
                </div>
                <button type="submit" name="submit" class="btn-check">Send</button>
            </form>
    


    </div>
    @endsection
    @section('scripts')
</main>
<script src="/js/index.js"></script>
</body>

</html>
@endsection