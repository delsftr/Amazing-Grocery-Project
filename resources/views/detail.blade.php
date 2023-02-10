@extends('template.template')

@section('content')
<div class="flex">
    <div class="img-detail">
        <h2>{{ $data->item_name }}</h2><br>
        <img src="{{ asset('img/tauge.png') }}" width="200" alt="" srcset="">
    </div>
    <div class="produk-detail">
        <span><b>Price: Rp. {{ number_format($data->price,0,',','.') }},-</b></span><br><br>
        <span>{{ $data->item_desc }}</span><br><br><br>
        <a href="{{ route('buy',$data->id) }}" class="btn btn-primary">Buy</a>
    </div>
</div>
@endsection
