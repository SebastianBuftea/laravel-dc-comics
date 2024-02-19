@extends('layout.app')
@section('content')
    <main>
        <div class="container ">
            <div class="row">

                <div class="col-12 ">
                    <h2 class="text-center color_white">Modify Comic</h2>
                </div>
                {{-- creiano il collegamento con la rotta comic store che si occupera di salvare i dati inseriti --}}
                <div class="col-12 color-form my-5">
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title" class="my-1">Title</label>
                            <input type="text" name="title" id="title" class="form-control my-1"
                                value="{{ $comic['title'] }}" placeholder="Enter the Title of the comic" required>
                        </div>
                        <div class="form-group">
                            <label for="description" class="my-1">Description</label>
                            <input type="text" name="description" id="description" class="form-control my-1"
                                value="{{ $comic['description'] }}" placeholder="Enter the Description of the comic"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="thumb" class="my-1">Thumb</label>
                            <input type="text" name="thumb" id="thumb" class="form-control my-1"
                                value="{{ $comic['thumb'] }}" placeholder="Enter the Thumb of the comic" required>
                        </div>
                        <div class="form-group">
                            <label for="price" class="my-1">Price</label>
                            <input type="text" name="price" id="price" class="form-control my-1"
                                value="{{ $comic['price'] }}" placeholder="Enter the Price of the comic" required>
                        </div>
                        <div class="form-group">
                            <label for="series" class="my-1">Series</label>
                            <input type="text" name="series" id="series" class="form-control my-1"
                                value="{{ $comic['series'] }}" placeholder="Enter the Series of the comic" required>
                        </div>
                        <div class="form-group">
                            <label for="sale_date" class="my-1">Sale data</label>
                            <input type="date" name="sale_date" id="sale_date" class="form-control my-1"
                                value="{{ $comic['sale_date'] }}" placeholder="Enter the Sale date of the comic" required>
                        </div>
                        <div class="form-group">
                            <label for="type" class="my-1">Type</label>
                            <input type="text" name="type" id="type" class="form-control my-1"
                                value="{{ $comic['type'] }}" placeholder="Enter the Type of the comic" required>
                        </div>
                        <div class="form-group">
                            <label for="writers" class="my-1">Writers</label>
                            <input type="text" name="writers" id="writers" class="form-control my-1"
                                value="{{ $comic['writers'] }}" placeholder="Enter the Writers of the comic" required>
                        </div>
                        <div class="form-group">
                            <label for="artists" class="my-1">Artists</label>
                            <input type="text" name="artists" id="artists" class="form-control my-1"
                                value="{{ $comic['artists'] }}" placeholder="Enter the Artists of the comic" required>
                        </div>
                        <div class="form-group py-3 d-flex justify-content-end">
                            <button class="btn btn-success" type="submit"> Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
