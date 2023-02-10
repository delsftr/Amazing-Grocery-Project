@extends('template.template')

@section('content')
<div class="flex">
    <div class="img-detail">
        <h2>Cart</h2><br>
    </div><br>
</div>
<table class="cart-table">
    @foreach ($data as $item)
    <tr>
        <td><img src="{{ asset('img/sayur.png') }}" width="100" alt="" srcset=""></td>
        <td>{{ $item->item_name }}</td>
        <td>{{ $item->price }}</td>
        <td><a href="{{ route('cart.delete',$item->id) }}">Delete</a></td>
    </tr>
    @endforeach
</table>
<div class="checkout-section">
    @if(count($data) > 0)
    <h2>Total : Rp. {{ number_format($price,0,',','.') }}</h2>
    <div style="padding: 10px"></div>
    <a href="{{ route('checkout') }}" class="btn btn-primary">Check Out</a>
    @endif
</div>
@endsection
