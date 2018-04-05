@extends('layouts.main1')

@section('content')

<h3 class="col-sm-offset-3">Shipping information</h3>

<form action="{{route('address.store')}}" method = "post" enctype="multipart/form-data">
<div class="container">
<div class="row">

<div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name = "address">
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name = "city">
    </div>
     <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" id="state" name = "state">
    </div>
     <div class="form-group">
        <label for="zip">Zip</label>
        <input type="text" class="form-control" id="zip" name = "zip">
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" name ="country">
    </div>
    <div class="form-group">
        <label for="phone">Phone number</label>
        <input type="tel" class="form-control" id="phone" name = "phone">
    </div>

        <button type="submit" class="btn btn-primary" name = 'submit'>Payment</button>

</div>
</div>
       </form>

@endsection