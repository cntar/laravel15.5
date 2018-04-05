@extends('layouts.cart')
@section('content')
 <div class="row">
<h3 class="col-sm-offset-2">Cart Items</h3>

<table class="table table-hover">
	 <thead class="thead-inverse">
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Size</th>
               <th>Action</th>

		</tr>
     </thead>
     <tbody>
     	@foreach($cartItems as $cartItem)
     	  <tr>
     	  	<td>{{$cartItem->name}}</td>
     	  	<td>{{$cartItem->price}}</td>
                 <td width="50px">
                   {{-- The rowId is a unique ID, generated by the cart when you add an item. It's used to identify unique items in the cart. You can have multiple rows in the cart with the same id but their rowId will be different ... --}}
                      {!! Form::open(['route' =>['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                      <input type="text" name="qty" value="{{$cartItem->qty}}">
                      </td>

     	  	       <td>
                    <div>
  
                    {!! Form::select('size', ['small' => 'Small', 'medium' => 'Medium' , 'large' => 'Large'], $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
             </div>
         </td>
       <td>

        <input style="float: left" type="submit" class="btn btn-info col-sm-offset-0" value="Ok">
         {!! Form::close() !!}
     	  	
              <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="post">
               {{csrf_field()}}
               {{method_field('DELETE')}}
               <input type="submit" class="btn btn-danger col-sm-offset-1" value="DELETE">
                   
              </form>   
              
             </td>

     	  </tr>
    @endforeach
      <tr>
          <td></td>
          {{-- The tax() method can be used to get the calculated amount of tax for all items in the cart, given there price and quantity. --}}

            <td id="total">
           
             <br><br>
               <b>TAX</b>    &nbsp${{Cart::tax()}}
               <br>
                {{-- The subtotal() method can be used to get the total of all items in the cart, minus the total amount of tax. --}}
                <b>SUBTOTAL</b>    &nbsp${{Cart::subtotal()}}
                <br>
               <b>GRAND TOTAL:</b>    &nbsp${{Cart::total()}}
          </td>
           <td>
              
              <br><br><br><br>
                 &nbsp
               <b>ITEMS:</b>   &nbsp{{Cart::count()}}
          </td>
          <td></td>
          <td></td>
      </tr>
     </tbody>
</table>
</div>
  <a href="{{url('/checkout')}}" class="btn btn-info col-sm-offset-9">CheckOut</a>
 @endsection 