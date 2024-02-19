@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="text-center">Aggiungi un nuovo comic</h2>
            </div>
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="POST">
                </form>
            </div>
        </div>
    </div>
@endsection
