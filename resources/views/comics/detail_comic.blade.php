@extends('layout.app')
@section('content')
    <main class="white">
        {{-- jumbotron section --}}
        <section class="jumbotron_"></section>
        <div class="blu_bar">
        </div>
        <div class="container  margins_ ">
            <div class="row p-5">
                <div class="col-7">
                    <h3>{{ $item['title'] }}</h3>
                    <div class="row d-flex">
                        <div class="col-7 d-flex justify-content-between bg-success border p-2">
                            <div>{{ $item['price'] }}</div>
                            <div>AVAILABLE</div>
                        </div>
                        <div class="col-5 d-flex justify-content-center bg-success border p-2">
                            Check Availability &#11206;
                        </div>
                    </div>
                    <div class="my-3">{{ $item['description'] }}</div>
                </div>
                <div class="col-5 d-flex justify-content-end">
                    <img src="{{ $item['thumb'] }}" alt="">
                </div>
            </div>
            <div class="row p-5">
                <div class="col">
                    <h4><strong>Details</strong></h4>
                    <div><strong>Series:</strong> {{ $item['series'] }}</div>
                    <div><strong>Sale date:</strong> {{ $item['sale_date'] }}</div>
                    <div><strong>Type: </strong>{{ $item['type'] }}</div>
                    <div><strong>Writers:</strong> {{ $item['writers'] }}</div>
                    <div><strong>Artists:</strong> {{ $item['artists'] }}</div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                {{-- creiamo il collegamento alla pagina che modifichera il comic  --}}
                <a href="{{ route('comics.edit', ['comic' => $item->id]) }}" class="my-3">
                    <button class="btn btn-warning "> Modify Comic</button>
                </a>
                <form action="{{ route('comics.destroy', ['comic' => $item->id]) }}" method="POST" class="my-3">
                    @csrf
                    @method('DELETE')

                    <a href="{{ route('comics.edit', ['comic' => $item->id]) }}" class="mx-2">
                        <button class="btn btn-danger " type="submit"> Delete Comic</button>
                    </a>
                </form>
            </div>
        </div>
    </main>
@endsection
