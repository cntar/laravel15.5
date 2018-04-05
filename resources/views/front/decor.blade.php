  @extends('layouts.main1')
  @section('content')

   @if(count($cultures) > 1)
       @foreach($cultures as $culture)
       
        <div class="content-fluid col-md-3 col-sm-5">
      <div class="container">
      <div class="row">
 <br>
  <img src="images/{{$culture->image}}" alt="Avatar" class="image"><br>
<br>
  <div class="overlay">
    <div class="text">
      <a href="#"> {{$culture->name}} </a><br>
      {{$culture->description}}<br>
      <span>${{$culture->price}}</span>
    <br>
    <div id="shop">
     <a href="{{route('cart.edit',$culture->id)}}" class="btn btn-info">ADD TO CART</a>
   </div>

    </div>
  </div>
</div>
</div>
</div>
 @endforeach

      @else
    <h1>no post found</h1>
     @endif

    @endsection