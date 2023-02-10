@extends('template.template')

@section('content')
    <div class="row">
        @foreach ($data as $item)
            <div class="column">
                <img src="{{ asset('img/tauge.png') }}" alt="" width="100">
                <span>{{ $item->item_name }}</span><br>
                <a href="{{ route('detail', $item->id) }}"><span>Detail</span></a>
            </div>
        @endforeach
    </div>
    {{ $data->links() }}
@endsection
